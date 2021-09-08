<?php include 'baglan.php';
session_start();
ob_start();
 ?>
 <!DOCTYPE html>
 <html lang="en">
     <head>
         <meta charset="utf-8" />
         <meta http-equiv="X-UA-Compatible" content="IE=edge" />
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
         <meta name="description" content="" />
         <meta name="author" content="" />
         <title>Turkishsnack-Yönetici</title>
         <link href="css/ystyles.css" rel="stylesheet" />
         <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>

         <script    src="https://code.jquery.com/jquery-1.11.3.min.js" crossorigin="anonymous"></script>

         <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>



         <style media="screen">
           .wdh{
             width:100%;
           }
         </style>
     </head>
     <body class="sb-nav-fixed">
         <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
             <a class="navbar-brand" href="index.html">Turkishsnack</a>
             <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
             <!-- Navbar Search-->

             <!-- Navbar-->
             <ul class="navbar-nav ml-auto ml-md-8">
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                         <a class="dropdown-item" href="yoneticigiris.php">Çıkış</a>
                     </div>
                 </li>
             </ul>
         </nav>
         <div id="layoutSidenav">
             <div id="layoutSidenav_nav">
                 <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                     <div class="sb-sidenav-menu">
                         <div class="nav">
                             <div class="sb-sidenav-menu-heading">Güncelleme</div>
                             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                 <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tablolar
                                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                             </a>
                             <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                 <nav class="sb-sidenav-menu-nested nav">
                                     <a class="nav-link" href="#urun_table">Ürünler Tablosu</a>
                                     <a class="nav-link" href="siparistablo.php">Sipariş Tablosu</a>
                                     <a class="nav-link" href="yoneticiekle.php">Yönetici Tablosu</a>

                                 </nav>
                             </div>
                             <a class="nav-link collapsed" href="yoneticiekle.php" >
                                 <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                 Yönetici Ekle
                             </a>
                             <div class="sb-sidenav-menu-heading">Abonelikler</div>
                             <a class="nav-link" href="abone.php">
                                 <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                 Aylık Kutular Tablosu
                             </a>
                             <div class="sb-sidenav-menu-heading">Mesajlar</div>
                             <a class="nav-link" href="yonetici_chat.php">
                                 <div class="sb-nav-link-icon"><i class="far fa-comments"></i></div>
                                Chat
                             </a>
                         </div>
                     </div>
                   <div class="sb-sidenav-footer">
                         <div class="small"></div>
                          <?php
                                   if(isset($_SESSION['login'])){
                                       echo 'Giriş <strong>'.$_SESSION["yonetici_adi"].'</strong> tarafından yapıldı.';
                                               }
                                               else {
                                                header('Location:yoneticigiris.php');
                                             }
                                               ?>

                     </div>
                 </nav>
             </div>
             <div id="layoutSidenav_content">
                 <main>
                     <div class="container-fluid">
                         <h1 class="mt-4">Kontrol Paneli</h1>
                         <div class="row">

                          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Uyarı:</h5>
                                  <form class="" action="" method="post">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  Eklemek istediğinize emin misiniz?
                                </div>
                                <div class="modal-footer">
                                  <input class="btn btn-success " type="submit" name="evet" value="Evet">
                                  <button type="button" class="btn btn-dark "  aria-label="Close" data-dismiss="modal" name="hayır ">Hayır</button>
                                </div>
                              </form>

                              </div>
                            </div>
                          </div>

                             <div class="col-xl-3 col-md-6">
                                 <div class="card bg-primary text-white mb-4">
                                     <div class="card-body" method="post">Aylık Paket</div>
                                     <div class="dropdown ">
                                       <form class="" action="index.html" method="post">
                                       <button class="btn btn-dark  wdh " type="button" name="rs1_button" id="rs1_buton">Rastgele Oluştur</button>

                                       </form>
  <button  class="btn btn-primary  dropdown-toggle wdh" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
    Detaylar
  </button>
  <div  class="dropdown-menu text-aligncenter wdh" aria-labelledby="dropdownMenuButton" >
<div  name="arr[]" multiple="multiple"id="rliste">
    <?php
      $sorgu="Select * from `urunleri` order by rand() limit 6";
      $sonuc=$baglanti->query($sorgu);
      $rs=$sonuc->fetch_assoc();
      while ($rs=$sonuc->fetch_assoc()) {
             echo '<a id="link" class="dropdown-item" href="#">'.$rs["urun_adi"].'</a>';

    /* $sql="INSERT INTO `eski_kutular` (`icerik_id`, `urun_id`, ) VALUES (NULL,'".$rs["urun_id"]."');";
        $exe=mysqli_query($baglanti,$sql);*/
        $dizi_aylik[]=array(
                'id' =>$rs["id"]
                                );
      }
      $urun1=implode(",",$dizi_aylik[0]);
      $urun2=implode(",",$dizi_aylik[1]);
      $urun3=implode(",",$dizi_aylik[2]);
      $urun4=implode(",",$dizi_aylik[3]);
      $urun5=implode(",",$dizi_aylik[4]);
      $tarih=date("y.m.d");

         ?>



</div>
<form  method="POST">
  <button type="button" class="btn btn-dark wdh" name="rs1_gonder" data-toggle="modal" data-target="#exampleModal" >
Gönder
</button>
<?php
if(isset($_POST['evet']))
 {
       $sql="INSERT INTO `eski_kutular` (`icerik_id`, `ay`, `urun1_id`, `urun2_id`, `urun3_id`, `urun4_id`, `urun5_id`) VALUES (NULL, '$tarih', '$urun1', '$urun2', '$urun3', '$urun4', '$urun5')";
       $so=$baglanti->query($sql);

}
?>
</form>

  </div>

</div>

                              <!--      <div class="card-footer d-flex align-items-center justify-content-between ">
                                         <a class="small text-white stretched-link" href="#">Detaylar</a>
                                         <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                     </div>
                                   -->
                                 </div>
                             </div>
                             <div class="col-xl-3 col-md-6">
                                 <div class="card bg-warning text-white mb-4">
                                     <div class="card-body">3 Aylık Paket</div>
                                     <div class="dropdown">
                                       <form class="" action="index.html" method="post">
                                       <button class="btn btn-dark  wdh " type="button" name="rs2_button" id="rs2_buton">Rastgele Oluştur</button>
                                       </form>
  <button  class="btn btn-warning  dropdown-toggle wdh " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color:white;">
    Detaylar
  </button>
  <div class="dropdown-menu wdh" aria-labelledby="dropdownMenuButton">
    <div id="r2liste">
        <?php
          $sorgu="Select * from `urunleri` order by rand() limit 6";
          $sonuc=$baglanti->query($sorgu);
          while ($rs=$sonuc->fetch_assoc()) {
               echo '<a id="link" class="dropdown-item" href="#">'.$rs["urun_adi"].'</a>';
             }
            ?>
    </div>
  </div>
</div>

                                 </div>
                             </div>
                             <div class="col-xl-3 col-md-6">
                                 <div class="card bg-success text-white mb-4">
                                     <div class="card-body">6 Aylık Paket</div>
                                     <div class="dropdown">
                                       <form class="" action="index.html" method="post">
                                       <button class="btn btn-dark  wdh " type="button" name="rs3_button" id="rs3_buton">Rastgele Oluştur</button>
                                       </form>
  <button  class="btn btn-success  dropdown-toggle wdh " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Detaylar
  </button>
  <div class="dropdown-menu wdh" aria-labelledby="dropdownMenuButton">
    <div id="r3liste">
        <?php
          $sorgu="Select * from `urunleri` order by rand() limit 8";
          $sonuc=$baglanti->query($sorgu);
          while ($rs=$sonuc->fetch_assoc()) {
               echo '<a id="link" class="dropdown-item" href="#">'.$rs["urun_adi"].'</a>';
             }
            ?>
    </div>
  </div>
</div>
                                 </div>
                             </div>
                             <div class="col-xl-3 col-md-6">
                                 <div class="card bg-danger text-white mb-4">
                                     <div class="card-body">Yıllık Paket</div>
                                     <div class="dropdown">
                                       <form class="" action="index.html" method="post">
                                       <button class="btn btn-dark  wdh " type="button" name="rs4_button" id="rs4_buton">Rastgele Oluştur</button>
                                       </form>
  <button  class="btn btn-danger  dropdown-toggle wdh" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
    Detaylar
  </button>
  <div class="dropdown-menu wdh" aria-labelledby="dropdownMenuButton" style="width:100%">
    <div id="r4liste">
        <?php
          $sorgu="Select * from `urunleri` order by rand() limit 10";
          $sonuc=$baglanti->query($sorgu);

          while ($rs=$sonuc->fetch_assoc()) {
               echo '<a id="link" class="dropdown-item" href="#">'.$rs["urun_adi"].'</a>';
             }


            ?>
    </div>
  </div>
</div>
                                 </div>
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-xl-6">
                                 <div class="card mb-4">
                                     <div class="card-header">
                                         <i class="fas fa-chart-area mr-1"></i>
                                         Grafik 1
                                     </div>
                                     <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                 </div>
                             </div>
                             <div class="col-xl-6">
                                 <div class="card mb-4">
                                     <div class="card-header">
                                         <i class="fas fa-chart-bar mr-1"></i>
                                         Grafik 2
                                     </div>
                                     <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                 </div>
                             </div>
                         </div>

                         <div id="urun_table" class="card mb-4">
                             <div class="card-header">
                                 <i class="fas fa-table mr-1"></i>
                                 Ürünler Tablosu
                             </div>

                             <form method="POST" action="">
                             <div class="card-body">
                                 <div class="table-responsive">
                                     <table class="table table-bordered display"  width="100%" cellspacing="0">
                                     </tr>
                                         <thead>
                                             <tr>
                                                 <th>İd</th>
                                                 <th>Resmi</th>
                                                 <th>Adı</th>
                                                 <th>Adedi</th>
                                                 <th>Fiyatı</th>
                                                 <th>Düzenle</th>
                                                 <th>Sil</th>
                                             </tr>
                                         </thead>
                                         <tbody>

                                           <?php


                                           //Silme işlemi
                                           if(isset($_POST['hayır'])){
                                             myModal.hide();

                                           }
                                                          if( @$_POST['di_silinecek']){
                                                                 $silincekler = $_POST;
                                                                 foreach ($silincekler['di_sil'] as $key => $id) {
                                                                   $sorgu = "DELETE FROM `urunleri` WHERE `urunleri`.`id` = ".$id;
                                                                  $baglanti->query($sorgu);
                                                                 }
                                                               }
                                           //Kaydetme
                                           if(isset($_POST["di_gonder"]))
                                            {
                                          $resim_ismi=isset($_FILES['resim_yukle']['name']);
                                          $tmp= isset($_FILES['resim_yukle']['tmp_name']);
                                          $yol="image/".$resim_ismi;

                                            $db = mysqli_connect("localhost", "root", "", "turkishsnack");
                                             $sorgu="INSERT INTO `urunleri` (`id`,`img_url`,`urun_adi`, `urun_adedi`, `urun_fiyat`) VALUES (NULL,'".$_POST["resim_yukle"]."', '".$_POST["adi"]."', '".$_POST["adedi"]."', '".$_POST["fiyati"]."');";
                                             mysqli_query($db, $sorgu);
                                                 move_uploaded_file($tmp,$yol);


                                               }
                                              // $result = mysqli_query($db, "SELECT * FROM urunler");



                                           //Düzenlenecek
                                           if(isset($_POST["di_duzenleButonu"]))
                                            {
                                              $id=$_POST['di_duzenlenecek_id'];
                                              $yeni_resim=$_FILES['duzenlenecek_resim']['name'];
                                              $eski_resim=$_POST['duzenlenecek_resim_old'];
                                             $adi=$_POST['adi'];
                                             $adedi=$_POST['adedi'];
                                             $fiyati=$_POST['fiyati'];
                                             if($yeni_resim!=''){
                                               $update_filename=$_FILES['duzenlenecek_resim']['name'];
                                             }else {
                                               $update_filename=$eski_resim;
                                             }
                                             if($_FILES['duzenlenecek_resim']['name']=''){
                                               if(file_exists("image/".$_FILES['duzenlenecek_resim']['name'])){
                                                 echo "zaten var";
                                               }                                             }
                                             else {
                                               $query="UPDATE `urunleri` SET `img_url`='$update_filename',`urun_adi` = '$adi', `urun_adedi` = '$adedi', `urun_fiyat` = '$fiyati' WHERE `urunleri`.`id` ='$id'";
                                              $run=mysqli_query($baglanti,$query);
                                              if($run){
                                                if ($_FILES['duzenlenecek_resim']['name']!='') {
                                                  move_uploaded_file($_FILES['duzenlenecek_resim']['tmp_name'],"image/".$_FILES['duzenlenecek_resim']['name']);
                                                  unlink("image/".$eski_resim);
                                                }
                                                header("Location:yonetici.php");
                                              }
                                              else {
                                                echo "Resim güncellenmedi";
                                              }
                                             }


                                          /* $dresim_ismi=isset($_FILES['duzenlenecek_resim']['name']);
                                              $dtmp= isset($_FILES['duzenlenecek_resim']['tmp_name']);
                                              $dyol="image/".$dtmp;
                                              $db = mysqli_connect("localhost", "root", "", "turkishsnack");
                                              $sorgu="UPDATE `urunler` SET `urun_resmi`='".$_POST["duzenlenecek_resim"]."',`urun_adi` = '".$_POST["adi"]."', `urun_adedi` = '".$_POST["adedi"]."', `urun_fiyati` = '".$_POST["fiyati"]."' WHERE `urunler`.`urun_id` =".$_POST['di_duzenlenecek_id'].";";
                                              mysqli_query($db, $sorgu);
                                                move_uploaded_file($dtmp,$dyol);
*/

                                            }
                                           /*
                                           if(isset($_POST["di_silinecek"]))
                                           {
                                              foreach($_POST["di_sil"] as $silinecek):
                                                $sorgu = "DELETE FROM `urunler` WHERE `urunler`.`urun_id` = " .$silinecek;
                                               $baglanti->query($sorgu);
                                              endforeach;
                                           }
                                           */
                                           //listeleme
                                           $sorgu="Select * from `urunleri`";
                                           $sonuc=$baglanti->query($sorgu);
                                           while ($satir=$sonuc->fetch_assoc()) {

                                         echo "<tr>";
                                         echo "<th>".$satir["id"]."</th>";
                                         echo  "<td><img style='width:50px;' src=image/".$satir['img_url']." ></td>";
                                         echo "<td>".$satir["urun_adi"]."</td>";
                                         echo "<td>".$satir["urun_adedi"]."</td>";
                                         echo "<td>".$satir["urun_fiyat"]."₺</td>";
                                         echo "<td>"."
                                         <form action='' method='post'>
                                                 <input type='hidden' name='di_duzenlenecek' value='".$satir["id"]."'>
                                               <input class='btn btn-success' type='submit' name='di_duzenle' value='Düzenle'>
                                             </form>

                                         "."</td>";
                                         echo "<td>"."
                                               <input   type='checkbox' name='di_sil[".$satir['id']."]' value='".$satir["id"]."'>
                                         "."</td>";
                                         echo "</tr>";
                                         }

                                            ?>
                                         </tbody>
                                         <tr>
                                         <td colspan="6"></td>
                                         <td><button  onclick='sil()' type='button' class='btn btn-danger' name='di_silinecek' data-toggle="modal" data-target="#exampleModalCenter">
  Sil
</button>
                                           <!--<input onclick='sil()' class='btn btn-danger' type='submit' name='di_silinecek' value='Sil'>--></td>

                                         </tr>
                                     </table>
                                 </div>
                             </div>
                           </form>
                           <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Uyarı:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Silmek istediğinize emin misiniz?
      </div>
      <div class="modal-footer">
        <input class='btn btn-success' type="submit" name="di_silinecek" value="Evet">
        <button class='btn btn-dark'type="button"  aria-label="Close" data-dismiss="modal"name="hayır ">Hayır</button>
      </div>
    </div>
  </div>
</div>
                              <?php
	                              if(isset($_POST["di_duzenle"]))
			                             {
		                                $sorgu="Select * From `urunleri` Where `id`=".$_POST["di_duzenlenecek"];
			                             	$sonuc=$baglanti->query($sorgu);
		                                $kayit=$sonuc->fetch_assoc()
		                                  ?>
                                      <form method="POST" id="uploadForm" enctype="multipart/form-data">
                                        <div class="card-footer">
                                            <label> <i class="fa fa-wrench mr-1"></i>Düzenleme</label>
                                        </div>
                                        <div class="form-row">
                                          <div class="col-sm-2" >
                                            <label><strong>Düzenlenecek Ürün id:</strong></label>
                                            <input  type="text" class="form-control" placeholder="" name="di_duzenlenecek_id" value="<?=$kayit['id']?>" readonly>
                                          </div>
                                          <div class="col-sm-2">
                                            <label for="image"><strong>Resim:</strong></label>
                                            <img width="20%" src="image/<?=$kayit['img_url']?>">
                                            <input type="hidden" name="duzenlenecek_resim_old" value="<?=$kayit['img_url']?>">
                                            <input type="file" id="image" name="duzenlenecek_resim" class="form-control">
                                          </div>

                                          <div class="col-md-2">
                                            <label for=""><strong>Düzenlenecek Ürün Adı:</strong></label>
                                            <input type="text" class="form-control" placeholder="" name="adi"value="<?=$kayit['urun_adi']?>">
                                          </div>
                                          <div class="col-sm-2">
                                            <label><strong>Düzenlenecek Ürün Adedi:</strong></label>
                                            <input type="number" class="form-control" placeholder="" name="adedi" value="<?=$kayit['urun_adedi']?>">
                                          </div>
                                          <div class="col-sm-2">
                                            <label><strong>Düzenlenecek Ürün Fiyatı:</strong></label>
                                            <input type="number" class="form-control" placeholder="" name="fiyati" value="<?=$kayit['urun_fiyat']?>" step="any">
                                          </div>
                                          <div class="col-sm-2" style="margin-top:auto;">
                                         <input class="btn btn-success" type="submit" value="Düzenlemeyi Bitir" name="di_duzenleButonu">
                                        </div>
                                      </div>
                                      </form>
	                             	<?php
                                  	}else
                                 	{
                                     ?>
                             <form method="POST">
                               <div class="card-footer">
                                   <label for=""> <i class="fa fa-plus-circle mr-1"></i>Ürün Ekleme</label>
                               </div>
                               <div style="margin-left:18px;" class="form-row">
                                 <div class="col">
                                   <label for="image"><strong>Resim:</strong></label>
                                   <input type="file" id="image" name="resim_yukle"/>
                                 </div>
                                 <div class="col-5">
                                   <label for=""><strong>Adı:</strong></label>
                                   <input type="text" class="form-control" placeholder="" name="adi">
                                 </div>
                                 <div class="col">
                                   <label><strong>Adedi:</strong></label>
                                   <input type="number" class="form-control" placeholder="" name="adedi">
                                 </div>
                                 <div class="col">
                                   <label><strong>Fiyatı:</strong></label>
                                   <input type="number"step="any" class="form-control" placeholder="" name="fiyati">
                                 </div>
                                 <div class="col" style="margin-top:auto;">
                                <input class="btn btn-danger" type="submit" value="Ekle" name="di_gonder">
                               </div>
                             </form>
                             <?php
                               }
                           ?>
                     </div>
</div>







                 </main>
                 <footer class="py-4 bg-light mt-auto">
                     <div class="container-fluid">
                         <div class="d-flex align-items-center justify-content-between small">
                              <div class="text-muted "> &copy; turkishsnack Tic.A.Ş. Bütün hakları saklıdır.</div>
                         </div>
                     </div>
                 </footer>
             </div>
         </div>


        <script  type="text/javascript">
        $(document).ready(function(){
          $("#rs1_buton").click(function(){
          $("#rliste").load(" #rliste");
        });
});
        </script>
        <script  type="text/javascript">
        $(document).ready(function(){
          $("#rs2_buton").click(function(){
          $("#r2liste").load(" #r2liste");
        });
});
        </script>
      </script>
      <script  type="text/javascript">
      $(document).ready(function(){
        $("#rs3_buton").click(function(){
        $("#r3liste").load(" #r3liste");
      });
});
      </script>
    </script>
    <script  type="text/javascript">
    $(document).ready(function(){
      $("#rs4_buton").click(function(){
      $("#r4liste").load(" #r4liste");
    });
});
    </script>
    <script>
    $(document).ready(function() {
  $('table.display').DataTable();
} );
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
         <script src="js/yscripts.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
         <script src="assets/demo/chart-area-demo.js"></script>
         <script src="assets/demo/chart-bar-demo.js"></script>
         <script src="js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
         <script src="js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
         <script src="assets/demo/datatables-demo.js"></script>

     </body>
 </html>
