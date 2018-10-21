<?php


session_start();

if(!empty($_SESSION['id']) || !empty($_SESSION['name'])){
  session_destroy();
}

require 'connect.inc.php';
$rightnow = date("M jS, Y");

 	$showform = 1;
 	$err = false;
 	$errmsg = "";

 if($_SERVER['REQUEST_METHOD'] == "POST"){
//Trimming form data and storing into array for neatness :)
if(!empty($_POST['uname'])){
 	$formdata['uname'] = trim($_POST['uname']);
  if(!empty($_POST['pwd'])){
 	  $formdata['pwd'] = trim($_POST['pwd']);
  }else{
    $formdata['pwd'] = "";
  }

 	try{

 		$sql = "SELECT uname FROM users WHERE uname = :uname";
 		$stmt = $pdo->prepare($sql);
 		$stmt->bindValue(":uname", $formdata['uname']);
 		$stmt->execute();
 		$count = $stmt->rowCount();
 		if($count <= 0){
 			$err=true;
 			$errmsg="Username does not exist";
 		}else{
 			try{
 				$sql = "SELECT * FROM users WHERE uname = :uname";
 				$stmt = $pdo->prepare($sql);
 				$stmt->bindValue(":uname", $formdata['uname']);
 				$stmt->execute();
 				$row = $stmt->fetch(PDO::FETCH_ASSOC);
 				if(password_verify($formdata['pwd'], $row['pwd'])){
          $_SESSION['id'] = $row['id'];
          $_SESSION['name'] = $row['name'];
 					header('Location:home.php');
 				}else{
 					$err=true;
 					$errmsg= "Invalid password!";
 				}
 			}catch(PDOException $e){
				echo $e->getMessage();
			}
 		}

	}catch(PDOException $e){
		echo $e->getMessage();
	}

}else{
  $msg="Username and password are required!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Elite Image Detailing - Admin</title>
	<!-- linking css stylesheet -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
	<!-- linkin custom css -->
	<link rel="stylesheet" type="text/css" href="styles.css"/>
	<!-- adding font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<!-- Adding jQuery -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>



</head>
<body>
<div class="login-body">
<img class="admin-logo" src="images\EliteLogo.png"/>

<div class="col-md-4 mx-auto p-5">

	<form class="form" method="POST">

		<span class="error"><?php if(isset($errmsg)){echo $errmsg;}?></span>

		<div class="form-group">
			<label for="uname">Username:</label>
			<input class="form-control" type="text" name="uname"/>
		</div>

		<div class="form-group">
			<label for="pwd">Password:</label>
			<input class="form-control" type="password" name="pwd"/>
		</div>

		<div class="form-group">
			<input class="btn btn-success float-right" type="submit" value="Login" style="width: 10rem;"/>
      <a href="http://www.eliteimagedetailing.com" target="_blank"><div class="btn btn-primary" style="width: 10rem;">View Site</div></a>
		</div>

	</form>
</div>
</div>
<?php require 'footer.inc.php'; ?>
