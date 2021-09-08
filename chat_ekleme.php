<?php
include 'baglan.php';
session_start();

$outgoing_id=$_SESSION["id"];
$incoming_id =$_GET['incoming_id'];
$message=$_GET['message'];
$date=date("Y-m-d h:i:sa");

$sql="INSERT INTO `chat` (`id`, `k_id`, `y_id`)
VALUES (NULL, '$outgoing_id',
 '$incoming_id');";
 $sonuc=$baglanti->query($sql)or die($baglanti->error);
 $last_id = $baglanti->insert_id;
 if($message!==" "){
   $sql2="INSERT INTO `chat_detay` (`id`,`chat_id`, `msg`, `date`) VALUES (NULL,'$last_id', '$message', '$date')";
   $success = $baglanti->query($sql2);

 }

?>
