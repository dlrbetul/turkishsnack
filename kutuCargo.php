<?php include 'baglan.php';
if(isset($_POST['durum'])){

  $durum=$_POST['durum'];
  $id=$_POST['id'];
  $query="UPDATE `kutu_siparis` SET `durum`='$durum' WHERE `order_id` =".$id;
 $run=mysqli_query($baglanti,$query);


}

 ?>
