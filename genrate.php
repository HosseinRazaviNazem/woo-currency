<?php
$connection=new pdo ("mysql:host=localhost;dbname=currency;char-set:utf8","root","");
$connection->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);

//$data = $_POST;
$counter = 10;
while($counter!=0) {
    $dollar=rand(7500,10000);
    $euro=rand(7500,10000);
    $create_date= date("Y-m-d H:i:s");
    
    $sql = "INSERT INTO currency (dollar, Euro,create_date)
      VALUES ('$dollar', '$euro','$create_date')";
      // use exec() because no results are returned
    $stmt=$connection->prepare($sql);
    $stmt->execute();

    $counter--;
}


?>