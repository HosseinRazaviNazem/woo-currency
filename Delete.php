<?php
include 'db.php';

 $id =  $_GET['id'];

 $sql = "DELETE FROM currency WHERE id = $id ";

 $stmt = $connection->prepare($sql );
 $stmt->execute();

?>