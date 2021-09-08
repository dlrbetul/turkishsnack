<?php
include 'baglan.php';
session_start();

$outgoing_id=$_SESSION["id"];
$incoming_id =1;
$message=$_GET['text'];

   $sql2="INSERT INTO `message` (`id`,`incoming_id`, `outgoing_id`, `message`) VALUES (NULL,'$incoming_id', '$outgoing_id', '$message')";
   $success = $baglanti->query($sql2);



?>
