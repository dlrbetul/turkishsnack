<?php 
include("baglan.php");
session_start();
$rastkutu_id=isset($_POST["rastkutu_id"]);
$sql="SELECT * FROM rastgelekutu WHERE rastkutu_id='".isset($_POST["rastkutu_id"])."'";
$rsk=mysqli_query($baglanti,$sql);

//$rskutu=$baglanti->select(1);
$rskutu=mysqli_fetch_array($rsk);
//while($rskutu=mysqli_fetch_array($rskutu)){

$rs_kutu_adi=$rskutu["rs_kutu_adi"];
$detay=$rskutu["detay"];
$rs_fiyat=$rskutu["rs_fiyat"];
$img_url=$rskutu["img_url"];
$_SESSION["rastkutu"][$rastkutu_id]["rastkutu_id"]=$rastkutu_id;
$_SESSION["rastkutu"][$rastkutu_id]["rs_kutu_adi"]=$rs_kutu_adi;
$_SESSION["rastkutu"][$rastkutu_id]["detay"]=$detay;
$_SESSION["rastkutu"][$rastkutu_id]["rs_fiyat"]=$rs_fiyat;
$_SESSION["rastkutu"][$rastkutu_id]["img_url"]=$img_url;

//header("Location:rastgele_kutu.php");


?>
