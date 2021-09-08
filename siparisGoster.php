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
                 <th>ürün Resmi</th>
                 <th>Ürün Adı</th>
                 <th>Ürün Fiyatı</th>
                 <th>Ürün Adedi</th>
             </tr>
         </thead>
         <tbody>
           <?php

           $sorgu="SELECT `siparis_detay`.*,`urunleri`.`img_url`,`urunleri`.`urun_adi`  FROM `siparis_detay`
           inner join `urunleri` on `siparis_detay`.`urun_id`=`urunleri`.`id` WHERE `siparis_detay`.`order_id`=".$id ;
           $sonuc=$baglanti->query($sorgu);
           while ($siparis_detay=$sonuc->fetch_assoc()) {
         echo "<tr>";
         echo "<th>".$siparis_detay["order_id"]."</th>";
         echo "<td><img style='width:50px;' src=image/".$siparis_detay["img_url"]."></td>";
         echo "<td>".$siparis_detay["urun_adi"]."</td>";

         echo "<td>".$siparis_detay["urun_fiyati"]."₺</td>";
         echo "<td>".$siparis_detay["urun_adedi"]."</td>";
         echo "</tr>";
         }

?>

       </tbody>
     </table>
 </div>
<?php } ?>
