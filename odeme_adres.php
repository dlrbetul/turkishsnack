<?php
include 'baglan.php';

$q=$_GET['q'];


mysqli_select_db($baglanti,"ajax_demo");
$sql="SELECT * FROM adres WHERE baslik = '".$q."'";
$result = mysqli_query($baglanti,$sql);


while($row = mysqli_fetch_array($result)) {
   $adres=$row['adres'];
  echo "<br>";

echo "<div class='span4'>";
  echo " <label >Adres Bilgilerini Giriniz</label>";
    echo "<input type='text' name='isim' value=".$row['adres_ad'].">";
  echo "</div>";
echo "<div class='span4'>";
  echo "<input type='text' name='adres_tel' value=".$row['adres_tel']." maxlength='11'>";
  echo "</div>";
echo "<div class='span4'>";
echo "<input type='text' name='adres_bas' value=".$row['baslik'].">";
  echo "</div>";
  echo "<div class='span4 margintop10'>";
  echo "<p>";
  echo " <textarea id='adres' rows='4' class='input-block-level' name='adres' >".$adres."</textarea>";
  echo "</p>";
  echo "</div>";

}
mysqli_close($baglanti);
?>
