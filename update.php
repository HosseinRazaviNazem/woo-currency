<?php 
include 'db.php';
$dollar = $_POST['dollar'];
$euro   = $_POST['euro'];

$sql = "UPDATE Currency SET dollar = $dollar, Euro= $euro WHERE id = $id";
$stmt = $connection->prepare($sql);
$stmt->execute();

?>