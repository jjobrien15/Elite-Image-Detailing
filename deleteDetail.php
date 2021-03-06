<?php

  require 'header.inc.php';
  require 'nav.inc.php';


  $selectedDetail = $_GET['id'];
  $selectedPackage = $_GET['packageID'];

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    try{
      $sql = "DELETE FROM details WHERE id = :id";
      $stmt = $pdo->prepare($sql);
      $stmt->bindValue(':id', $selectedDetail);
      $stmt->execute();
      header('Location: updatePackage.php?id=' . $selectedPackage);
    }catch(Exception $e){
      echo $e->getMessage();
    }
  }

  try{
    $sql = "SELECT * FROM details WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":id", $selectedDetail);
    $stmt->execute();
    $service = $stmt->fetch(PDO::FETCH_ASSOC);
  }catch(PDOException $e){
    echo $e->getMessage();
  }
?>
<div class="content">
  <div class="heading-content">
    <h3>Confirmation</h3>
    <span class="spacer"></span>
    <a href="http://www.eliteimagedetailing.com" target="_blank"><div class="btn btn-primary">View Site</div></a>
  </div>
  <div class="inner-content">
    <p>Are you sure you want to delete <?php echo $service['detail']; ?> from package?</p>
    <form method="POST">
      <input class="btn btn-success" type="submit" value="Yes"/>
      <a class="btn btn-danger" href="updatePackage.php?id=<?php echo $selectedPackage; ?>">No</a>
    </form>
  </div>
</div>
<?php require 'footer.inc.php';?>
