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
         <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
         <style media="screen">
           .wdh{
             width:100%;
           }
         </style>
     </head>
     <body class="sb-nav-fixed" >
         <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
             <a class="navbar-brand" href="index.html">Turkishsnack</a>
             <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
             <!-- Navbar Search-->

             <!-- Navbar-->
             <ul class="navbar-nav ml-auto ml-md-8">
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                         <a class="dropdown-item" href="yöneticigiris.php">Çıkış</a>
                     </div>
                 </li>
             </ul>
         </nav>
         <div id="layoutSidenav" >
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
                                     <a class="nav-link" href="yonetici.php">Ürünler Tablosu</a>
                                     <a class="nav-link" href="siparistablo.php">Sipariş Tablosu</a>
                                     <a class="nav-link" href="#">Yönetici Tablosu</a>
                                 </nav>
                             </div>
                             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
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
                 <main style="margin:20px;" >

                       <div class="row">
                           <div class="col-lg-4">

                                   <h1 class=" font-weight-dark my-4">&nbsp;Yönetici Ekle</h1>
                                   <div class="card-body">
                                       <form action="" method="post">
                                         <div class="form-group">
                                             <label class="small mb-1" for="i">Yönetici Adı:</label>
                                             <input class="form-control py-4" id="" type="text" name="yAdi" placeholder="Yönetici adını giriniz." required/>
                                         </div>
                                           <div class="form-group">
                                               <label class="small mb-1" for="inputEmailAddress">E-postası:</label>
                                               <input class="form-control py-4" id="" type="email" name="yEposta" placeholder="Epostanızı giriniz." required/>
                                           </div>
                                           <div class="form-group">
                                               <label class="small mb-1" for="inputPassword">Şifresi:</label>
                                               <input class="form-control py-4" id="inputPassword" type="password" name="ySifre" placeholder="Şifrenizi giriniz."required />

                                           </div>
                                           <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary "  name="buton">Ekle</button>
                                           </div>
                                       </form>
                                   </div>

                           </div>
                           <div class="col-lg-4">
                        <figure><img style="margin-left:50%;" src="image/8-2.png"></figure>
                    </div>
                       </div>


                         <div id="" class="card mb-4">
                             <div class="card-header">
                                 <i class="fas fa-table mr-1"></i>
                                 Yönetici Tablosu
                             </div>

                             <form method="POST" action="">
                             <div class="card-body">
                                 <div class="table-responsive">
                                     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                     </tr>
                                         <thead>
                                             <tr>
                                                 <th>İd</th>
                                                 <th>Adı</th>
                                                 <th>E-Postası</th>
                                                 <th>Düzenle</th>
                                                 <th>Sil</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                           <?php
                                           //Silme işlemi
                                                          if( @$_POST['di_silinecek']){
                                                                 $silincekler = $_POST;
                                                                 foreach ($silincekler['di_sil'] as $key => $id) {
                                                                   $sorgu = "DELETE FROM `yonetici` WHERE `yonetici`.`yonetici_id` = ".$id;
                                                                  $baglanti->query($sorgu);
                                                                 }
                                                               }
                                           //Kaydetme
                                              if(isset($_POST["buton"]))
                                              		{
                                              			$sorgu="INSERT INTO `yonetici` (`yonetici_id`, `yonetici_adi`, `yonetici_eposta`, `yonetici_sifre`) VALUES (NULL, '".$_POST["yAdi"]."', '".$_POST["yEposta"]."', '".$_POST["ySifre"]."');";
                                              			if($baglanti->query($sorgu) === TRUE){
                                              			}
                                              			else{
                                              				echo "Kayıt başarısız:" . $baglanti->error ;
                                              			}
                                              		}


                                           //Düzenlenecek
                                           if(isset($_POST["di_duzenleButonu"]))
                                            {
                                              $sorgu="UPDATE `yonetici` SET `yonetici_adi`='".$_POST["dyAdi"]."',`yonetici_eposta` = '".$_POST["dyEposta"]."', `yonetici_sifre` = '".$_POST["dySifre"]."' WHERE `yonetici`.`yonetici_id` =".$_POST['duzenlenecek_id'].";";
                                              if($baglanti->query($sorgu) === TRUE){
                                              }
                                              else{
                                                echo "Kayıt başarısız:" . $baglanti->error ;
                                              }
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
                                           $sorgu="Select * from `yonetici`";
                                           $sonuc=$baglanti->query($sorgu);
                                           while ($satir=$sonuc->fetch_assoc()) {

                                         echo "<tr>";
                                         echo "<th>".$satir["yonetici_id"]."</th>";
                                         echo "<td>".$satir["yonetici_adi"]."</td>";
                                         echo "<td>".$satir["yonetici_eposta"]."</td>";
                                         echo "<td>"."
                                         <form action='' method='post'>
                                               <input type='hidden' name='di_duzenlenecek' value='".$satir["yonetici_id"]."'>
                                               <input class='btn btn-success' type='submit' name='di_duzenle' value='Düzenle'>
                                             </form>
                                         "."</td>";
                                         echo "<td>"."
                                               <input type='checkbox' name='di_sil[".$satir['yonetici_id']."]' value='".$satir["yonetici_id"]."'>
                                         "."</td>";
                                         echo "</tr>";
                                         }

                                            ?>
                                         </tbody>
                                         <tr>
                                         <td colspan="4"></td>
                                         <td><input class='btn btn-danger' type='submit' name='di_silinecek' value='Sil'></td>
                                         </tr>
                                     </table>
                                 </div>
                             </div>
                           </form>
                              <?php
	                              if(isset($_POST["di_duzenle"]))
			                             {
		                                $sorgu="Select * From `yonetici` Where `yonetici_id`=".$_POST["di_duzenlenecek"];
			                             	$sonuc=$baglanti->query($sorgu);
		                                $kayit=$sonuc->fetch_assoc()
		                                  ?>
                                      <form method="POST">
                                          <div class="card-footer">
                                              <label> <i class="fa fa-wrench mr-1"></i>Düzenleme</label>
                                          </div>
                                          <div class="form-row">
                                            <div class="col-md-5" >
                                              <label>Merhaba, <input style="border:none;width:20%;color:#3a87d3;"type="text" name="d_yAdi" value="<?=$kayit['yonetici_adi']?>" readonly></label>
                                              <input  type="password" class="form-control" placeholder="Lütfen şifreni gir!!" name="d_ySifre" value="" >
                                              </div>
                                            <div class="col-sm-2" style="margin-top:auto;">
                                           <input class="btn btn-primary" type="submit" value="Giriş" name="sifreGiris" >
                                          </div>
                                        </form>
                                      <?php
                                          }
                                         if(isset($_POST["sifreGiris"]))
                                          {
                                           $sorgu="SELECT * FROM yonetici WHERE yonetici_adi='" . $_POST["d_yAdi"] . "' and yonetici_sifre= '". $_POST["d_ySifre"]."'";
                                            $sonuc = $baglanti->query($sorgu)or die($baglanti->error);
                                          if($dizi = $sonuc-> fetch_assoc()){
                                     ?>
                                        <form method="POST">
                                   <div class="card-footer">
                                       <label> <i class="fa fa-wrench mr-1"></i>Düzenleme</label>
                                   </div>
                                   <div class="form-row">
                                     <div class="col-sm-2" >
                                       <label><strong>Düzenlenecek id:</strong></label>
                                       <input  type="text" class="form-control" placeholder="" name="duzenlenecek_id" value="<?=$dizi['yonetici_id']?>" readonly>
                                     </div>
                                     <div class="col-md-2">
                                       <label for=""><strong>Düzenlenecek Ad:</strong></label>
                                       <input type="text" class="form-control" placeholder="" name="dyAdi"value="<?=$dizi['yonetici_adi']?>">
                                     </div>
                                     <div class="col-sm-2">
                                       <label><strong>Düzenlenecek Eposta:</strong></label>
                                       <input type="email" class="form-control" placeholder="" name="dyEposta" value="<?=$dizi['yonetici_eposta']?>">
                                     </div>
                                     <div class="col-sm-2">
                                       <label><strong>Düzenlenecek Şifre:</strong></label>
                                       <input type="text" class="form-control" placeholder="" name="dySifre" value="<?=$dizi['yonetici_sifre']?>">
                                     </div>
                                     <div class="col-sm-2" style="margin-top:auto;">
                                    <input class="btn btn-success" type="submit" value="Düzenlemeyi Bitir" name="di_duzenleButonu">
                                   </div>
                                 </form>
                             <?php  }else{
                               echo "<h4 style='color:red'>Yanlış şifre girdiniz.Düzenleme yapamazsınız.</h4>";
                             }
                           }
?>


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

         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
         <script src="js/yscripts.js"></script>
           <script src="js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
         <script src="js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
         <script src="assets/demo/datatables-demo.js"></script>

     </body>
 </html>
