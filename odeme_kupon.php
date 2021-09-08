<?php
include 'baglan.php';
session_start();
$kupon=$_GET['kod'];
$kid=$_GET['id'];
$toplam=$_GET['toplam'];
$query="SELECT * FROM `kupon` WHERE `kupon`.`kupon_adi`='$kupon'";
$sonuc=$baglanti->query($query);
if($kayit=mysqli_fetch_assoc($sonuc)){
 $kullanici_var_mı=$baglanti->query("SELECT * FROM kullanilan_kupon WHERE kullanici_id=".$kid);
 if($kayit2=mysqli_fetch_assoc($kullanici_var_mı)){
   echo "<span  style='color:#13a647; margin-left:20px;'>Kupon daha önce kullanıldı.</span>";
 }
 else {
   mysqli_select_db($baglanti,"ajax_demo");
   $query="SELECT * FROM `kupon` WHERE `kupon`.`kupon_adi`='$kupon'";
   $sonuc=$baglanti->query($query);
   while($row = mysqli_fetch_array($sonuc)) {
     $deger=$row['deger'];
     $toplam=$toplam-$deger;
     $_SESSION["indirimli_fiyat"]=$toplam;
     $_SESSION["kupon_id"]=$row['id'];
     echo "<h6>İndirim Miktarı:".$deger."₺</h6>";
    echo "<h6>İndirimli Fiyat:".$toplam."₺</h6>";

 }
 }
}
else {
  echo "<span  style='color:#d92727; margin-left:20px;'>Böyle bir kupon bulunamadı.</span>";
}
?>
