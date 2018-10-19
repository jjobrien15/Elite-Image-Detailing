<?php

require 'connect.inc.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){

  $packageID = $_POST['packageID'];
  $detail = $_POST['newPerk'];

  try{
    $sql = "INSERT INTO details(package, detail) VALUES (:packageID, :detail)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':packageID', $packageID);
    $stmt->bindValue(':detail', $detail);
    $stmt->execute();
  }catch(PDOException $e){
    echo $e->getMessage();
  }

}

?>
