<?php include 'baglan.php';
if (isset($_REQUEST['id'])) {
 $id = intval($_REQUEST['id']);
 ?>
 <div class="table-responsive">
     <table class="table table-bordered "  width="100%" cellspacing="0">
     </tr>
         <thead>
             <tr>
                 <th>Sipariş İd</th>
                 <th>Ürün Adı</th>
                 <th>Ürün Fiyatı</th>
             </tr>
         </thead>
         <tbody>
           <?php

           $sorgu="SELECT * FROM `kutu_sdetay` WHERE `kutu_sdetay`.`order_id`=".$id ;
           $sonuc=$baglanti->query($sorgu);
           while ($siparis_detay=$sonuc->fetch_assoc()) {
         echo "<tr>";
         echo "<th>".$siparis_detay["order_id"]."</th>";
         echo "<td>".$siparis_detay["kutu_ad"]."</td>";

         echo "<td>".$siparis_detay["kutu_fiyat"]."₺</td>";
         echo "</tr>";
         }

?>

       </tbody>
     </table>
 </div>
<?php } ?>
