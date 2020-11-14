<?php
$connection=new pdo ("mysql:host=localhost;dbname=currency;char-set:utf8","root","");
$connection->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);

?>