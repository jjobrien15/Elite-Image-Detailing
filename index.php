<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124411594-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-124411594-1');
</script>


	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Joe O'Brien">
	<meta name="keywords" content="Elite, Image, Auto, Detail, Detaling, Auto Detailing, New Jersey, NJ">
	<meta name="description" content="Elite Image Detailing of New Jersey">

	<link rel="shortcut icon" href="images/EliteLogoIco.ico" type="image/x-icon">
	<!-- Adding bootstrap css -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<!-- Incliding font-awesome-icons -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
	<!-- Link to custom css -->
	<link rel="stylesheet" type="text/css" href="styles.min.css">
	<!-- Adding external fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rajdhani" rel="stylesheet">

	<title>Elite Image Detailing</title>

</head>

<?php

$connString = "mysql:host=localhost;dbname=admintest";
$uname = "root";
$pwd = "Zxasqw12";

try{
	$pdo = new PDO($connString, $uname, $pwd);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo "Connection to DB failed -> " . $e->getMessage();
}


$intro = "";
$email = "";
$facebook = "";
$instagram = "";
$phone = "";

  try{
    $sql = "SELECT * FROM home";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $intro = $row['intro'];
    $email = $row['email'];
    $facebook = $row['facebook'];
    $instagram = $row['instagram'];
    $phone = $row['phone'];
  }catch(PDOException $e){
    echo $e->getMessage();
  }
?>

<body>

<header>

	<div class="social-bar">

		<div class="full-nav">
			<div class="row text-center">
				<div class="col-md-4 my-auto">
          <?php if(!empty($email)){ ?>
					<span class=" fas fa-envelope"></span> : <a class="phone" href="<?php echo 'mailto:' . $email; ?>"><?php echo $email; ?></a>
        <?php } ?>
        </div>
				<div class="col-md-4 my-auto">
          <?php if(!empty($phone)){ ?>
					<span class="fas fa-phone"></span> : <a class="phone" href="<?php echo 'tel:' . $phone; ?>"><?php echo $phone; ?></a>
          <?php } ?>
				</div>
				<div class="col-md-4 my-auto">
          <?php if(!empty($facebook) || !empty($instagram)){ ?>
					       Follow Us:
          <?php
            }
            if(!empty($facebook)){
          ?>
					<a href="<?php echo $facebook ?>" target="_blank"><span class="fab fa-facebook"></span></a>
          <?php
            }
            if(!empty($instagram)){
          ?>
					<a href="https://www.instagram.com/eliteimagedetailingofnj/" target="_blank"><span class="fab fa-instagram"></span></a>
          <?php
            }
          ?>
				</div>
			</div>
		</div>
		<div class="mini-nav">
					<div class="row">
						<div class="col-md-12">
						<nav class="navbar navbar-expand-lg mx-auto">
							<a class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar top-bar"></span>
							    	<span class="icon-bar middle-bar"></span>
							    	<span class="icon-bar bottom-bar"></span>
							</a>

							<div class="collapse navbar-collapse text-center" id="navbar">
								<ul class="navbar-nav">

									<li class="nav-item my-auto">
										<a class="nav-link servicesLink" href="#services">SERVICES</a>
									</li>

									<li class="nav-item my-auto">
										<a class="nav-link testimonialsLink" href="#testimonials">TESTIMONIALS</a>
									</li>

									<li class="nav-item my-auto">
										<a class="nav-link aboutLink" href="#about">ABOUT</a>
									</li>

									<li class="nav-item my-auto">
										<a class="nav-link contactLink" href="#contact">CONTACT</a>
									</li>

								</ul>
                    <?php if(!empty($email)){ ?>
                    <span class=" fas fa-envelope"></span> : <a class="phone" href="<?php echo 'mailto:' . $email; ?>"><?php echo $email; ?></a>
                    <?php } ?><br /><br />
                    <?php if(!empty($phone)){ ?>
                    <span class="fas fa-phone"></span> : <a class="phone" href="<?php echo 'tel:' . $phone; ?>"><?php echo $phone; ?></a><br /><br />
                    <?php } ?>

                    <?php if(!empty($facebook) || !empty($instagram)){ ?>
          					       Follow Us:
                    <?php
                      }
                      if(!empty($facebook)){
                    ?>
          					<a href="<?php echo $facebook ?>" target="_blank"><span class="fab fa-facebook"></span></a>
                    <?php
                      }
                      if(!empty($instagram)){
                    ?>
          					<a href="https://www.instagram.com/eliteimagedetailingofnj/" target="_blank"><span class="fab fa-instagram"></span></a>
                    <?php
                      }
                    ?>
							</div>
					</nav>
				</div>
			</div>
		</div>

</header>
<section class="banner home-banner" id="home">
	<div class="black">
		<nav class="navbar navbar-expand-lg full-nav">

			<a class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="icon-bar top-bar"></span>
		    	<span class="icon-bar middle-bar"></span>
		    	<span class="icon-bar bottom-bar"></span>
			</a>

			<div class="collapse navbar-collapse" id="navbar">
				<ul class="navbar-nav mx-auto">

					<li class="nav-item my-auto">
						<a class="nav-link servicesLink custom-nav-right" href="#services">SERVICES</a>
					</li>

					<li class="nav-item my-auto">
						<a class="nav-link testimonialsLink custom-nav-right" href="#testimonials">TESTIMONIALS</a>
					</li>

					<li class="nav-item my-auto">
						<a class="nav-link aboutLink custom-nav-right" href="#about">ABOUT</a>
					</li>

					<li class="nav-item my-auto">
						<a class="nav-link contactLink custom-nav-right" href="#contact">CONTACT</a>
					</li>

				</ul>
			</div>
	</nav>

		<div class="container">
			<div class="row v-center">
				<div class="col-md-10 text-center mx-auto">
					<div class="brand">
						<img class="logo" src="images/EliteLogoMain.png">
					</div>
					<div class="intro">
            <?php if(!empty($intro)){ ?>
              <p><?php echo $intro; ?></p>
            <?php  }?>
          </div>
  				</div>
  			</div>
  		</div>
  	</div>
</section>

<section class="services p-full" id="services">
	<div class="wrapper">
		<div class="col-md-6 mx-auto text-center">
			<h2 class="services-title mx-auto">Our Elite Services</h2>
			<div class="row">
        <div class="col-md-6 col-sm-6 text-right">
          <p>Our services and packages are listed below. If you are not sure what you need or you need special services get in touch with us by using our <a class="contactLink" href="javascript:void(0)">contact form</a> below.</p>
    			<p><strong>&#42;All packages include sales tax & mobile fee&#42;</strong></p>
        </div>
				<div class="col-md-6 col-sm-6">
					<ul class="serv-list text-left">
            <strong>Services Include:</strong>
						<?php
              try{
                $sql = "SELECT * FROM services";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
              }catch(PDOException $e){
                echo $e->getMessage();
              }

              foreach ($services as $service) {
                  echo "<li>" . $service['servname'] . "</li>";
              }
            ?>
					</ul>
				</div>
			</div>
</div>

		<div class="row">

		<div class="col-md-12">

			<h2 class="title mx-auto text-center">Packages</h2>

				<div class="row">
          <?php
          try{
            $sql = "SELECT * FROM packages";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $packages = $stmt->fetchAll(PDO::FETCH_ASSOC);
          }catch(PDOException $e){
            echo $e->getMessage();
          }

          foreach($packages as $package){
          ?>
					<div class="col-md-6 my-auto text-right">
						<h3><?php echo $package['title']; ?></h3>
						<p >Cars From <span class="price">&dollar;<?php echo $package['priceSmall'];?></span><br />
						SUV/Small Trucks From <span class="price">&dollar;<?php echo $package['priceMedium'];?></span><br />
						Large SUV/Trucks From <span class="price">&dollar;<?php echo $package['priceLarge'];?></span></p>
					</div>

					<div class="col-md-6 py-5 text-left">
						<ul>
							<?php
                try{
                  $sql = "SELECT * FROM details WHERE package = :packageId";
                  $stmt = $pdo->prepare($sql);
                  $stmt->bindValue(":packageId", $package['id']);
                  $stmt->execute();
                  $perks = $stmt->fetchAll(PDO::FETCH_ASSOC);
                }catch(PDOException $e){
                  echo $e->getMessage();
                }
                foreach($perks as $perk){
                  echo "<li>" . $perk['detail'] . "</li>";
                }
              ?>
						</ul>
					</div>
        <?php } ?>
				</div><!-- End Row -->
			</div>
		</div><!-- end Row -->
	</div><!-- End Wrapper -->
</section>


<section class="testimonials banner" id="testimonials">
	<div class="black">
		<div class="wrapper p-half">
			<h2 class="text-center mx-auto white">Testimonials</h2>
			<div class="col-lg-6 col-md-6 mx-auto">
				<div id="testimonials-carousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
            <?php
              try{
                $sql = "SELECT * FROM testimonials";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $testimonials = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $counter = 0;
              }catch(PDOException $e){
                echo $e->getMessage();
              }
              foreach($testimonials as $testimonial){
                $counter ++;
                if($counter == 1){
            ?>
							<div class="carousel-item active">
								<p><?php echo $testimonial['body']; ?></p>
								<p>- <?php echo $testimonial['author']; ?></p>
							</div>
            <?php }else{ ?>
              <div class="carousel-item">
								<p><?php echo $testimonial['body']; ?></p>
								<p>- <?php echo $testimonial['author']; ?></p>
							</div>
            <?php }/*End else*/}/*End foreach*/ ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about p-full" id="about">
		<div class="wrapper">
			<div class="row">
				<div class="col-md-7 my-auto">
					<h2 class="text-left">About Us</h2>
          <?php
            try{
              $sql = "SELECT message FROM about WHERE id = 1";
              $stmt = $pdo->prepare($sql);
              $stmt->execute();
              $aboutMsg = $stmt->fetch(PDO::FETCH_ASSOC);
            }catch(PDOException $e){
              echo $e->getMessage();
            }
          ?>
					<p><?php echo $aboutMsg['message']; ?></p>
				</div>
				<div class="col-md-5 my-auto">
					<img class="d-block mx-auto" src="images/red-car.jpg" style="width: 75%"/>
				</div>
			</div>
		</div>
</section>

<section class="contact banner" id="contact">
	<div class="black p-full">
		<div class="wrapper">
			<h2 class="text-center mx-auto white">Let's Chat</h2>
			<div class="row">
				<div class="col-md-6 my-auto text-right">
          <?php
            try{
              $sql = "SELECT message FROM contact WHERE id = 1";
              $stmt = $pdo->prepare($sql);
              $stmt->execute();
              $contactMsg = $stmt->fetch(PDO::FETCH_ASSOC);
            }catch(PDOException $e){
              echo $e->getMessage();
            }
          ?>
					<p><?php if(!empty($contactMsg)){ echo $contactMsg['message']; } ?></p>
					<p class="c-info">
            <?php if(!empty($email)){ ?>
	          <span class=" fas fa-envelope"></span> : <a class="phone" href="<?php echo 'mailto:' . $email; ?>"><?php echo $email; ?></a>
            <?php } ?></p>
					<p class="c-info">
            <?php if(!empty($phone)){ ?>
  					<span class="fas fa-phone"></span> : <a class="phone" href="<?php echo 'tel:' . $phone; ?>"><?php echo $phone; ?></a>
            <?php } ?>
          </p>
				</div>
				<div class="col-md-6">
					<form  id="email-form" action="http://formspree.io/<?php if(!empty($email)){echo $email;}else{echo "eliteimagedetailing11@gmail.com";} ?>" ectype="text/plain">
							<span id="errmsg" class="red"><strong>Please fill in required information and try again!</strong></span>
							<span id="successmsg"><strong>Message Sent!</strong></span>
							<div class="form-group">
								<label for="Name">Name: <span class="required">*</span></label>
								<input id="name" class="form-control" type="text" name="Name" placeholder="Your Name" />
							</div>
							<div class="form-group">
								<label for="Phone">Phone: </label>
								<input id="phone" class="form-control" type="text" name="Phone" placeholder="(XXX)XXX-XXXX" />
							</div>
							<div class="form-group">
								<label for="Email">Email: <span class="required">* </span></label>
								<input id="email" class="form-control" type="text" name="Email" placeholder="Your Email" />
							</div>
							<div class="form-group">
								<label for="Subject">Subject: <span class="required">*</span></label>
								<input id="subject" class="form-control" type="text" name="Subject" placeholder="Subject" />
							</div>
							<div class="form-group">
								<label for="Body">Message: <span class="required">*</span></label>
								<textarea id="body" class="form-control" type="text" name="Body" placeholder="Message here..."></textarea>
							</div>

						<input id="submit-btn" class="btn btn-success float-right" type="submit" value="Send"/>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="toTopBtn">
	<a id="toTopBtn" href="#"><span class="fas fa-arrow-up"></span></a>
</div>



<footer class="footer p-half">
		<div class="row">

			<div class="col-md-5 order-md-1 my-auto">
				<nav class="navbar navbar-expand-lg footer-nav">
					<ul class="navbar-nav mx-auto">
						<li class="nav-item"><a class="nav-link servicesLink" href="#services">SERVICES</a></li>
						<li class="nav-item"><a class="nav-link testimonialsLink" href="#testimonials">TESTIMONIALS</a></li>
						<li class="nav-item"><a class="nav-link aboutLink" href="#about">ABOUT</a></li>
						<li class="nav-item"><a class="nav-link contactLink" href="#contact">CONTACT</a></li>
					</ul>
				</nav>
			</div>

			<div class="col-md-4 order-md-3 text-center my-auto">
          <?php if(!empty($facebook) || !empty($instagram)){ ?>
					       <p>Follow Us:</p>
          <?php
            }
            if(!empty($facebook)){
          ?>
					<a href="<?php echo $facebook; ?>" target="_blank"><span class="fab fa-facebook"></span></a>
          <?php
            }
            if(!empty($instagram)){
          ?>
					<a href="https://www.instagram.com/eliteimagedetailingofnj/" target="_blank"><span class="fab fa-instagram"></span></a>
          <?php
            }
          ?>
			</div>

			<div class="col-md-3 my-auto order-md-2 text-center">
					<img class="nav-logo" src="images/EliteLogo.png" style="width: 150px;">
					<p>Designed & Developed by <a href="https://github.com/jjobrien15" target="_blank">Joe O'Brien</a></p>
			</div>

		</div>
</footer>



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Adding bootstrap JS -->
<script src="bootstrap/js/bootstrap.js"></script>
<!-- Adding Custom JS -->
<script src="scripts.js"></script>

</body>
</html>
