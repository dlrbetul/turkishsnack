<?php include 'baglan.php';
 require_once ('eklecikar.php');
ob_start();

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Turkishsnack</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/prettyPhoto.css" rel="stylesheet" />
  <link href="css/camera.css" rel="stylesheet" />
  <link href="css/jquery.bxslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />

  <!-- Theme skin -->
  <link href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="image/sayfa_logo.png" />

</head>
<style>
#content img{
  max-width: 85% !important;
    height: auto;
}
#cart_count{
	text-align:center;
	padding:0 0.5rem 0.1rem 0.5rem;
    border-radius:3rem;
	background-color:#e96b56;
	color:white;
}
.a2{
  padding-left: 30px;
position: relative;
font-size: 1.1em;
margin-bottom: 5px;
background-color: #e96b5642;}
.b2{
  height: 360px;
    width: 360px;
    background-color: #ffffff;
    padding: 28px;
    margin-left: 60px;
    border: 2px solid #e96b5642;

}
.sekil{
	text-align:center;
	width:90px;
  height: 45px;
  font-size:20px;
  background-color: white;
}
.liste{
  text-align: center;

    width: 500px;
    border-radius: 15px;
    padding: 40px;
    margin-top:40px;
}
h1.buyuk{
  text-transform:uppercase;
  text-align: center;
  color:red;

}
.boy{
  font-size: 30px !important;
}
.boy2{
  font-size: 50px !important;
}
.arka{
	color:green;
}
.kt{

  margin-left:200px;
}
.kare{
  height: 150px;
    width: 500px;
}
.ktm{
  height: 100px;
  margin-left: 100px;
}


</style>

<body>

  <div id="wrapper">

    <!-- start header -->
    <header>
      <div class="top">
        <div class="container">
          <div class="row">
            <div class="span6">
              <p class="topcontact"><i class="icon-phone"></i> (266) 222 2222</p>

            </div>
            <div class="span6">

              <ul class="social-network">
			  <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-white"></i></a></li>
			  <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google +"><i class="icon-google-plus icon-white"></i></a></li>
				<br>
                <li><a style="color:white;" href="sıksorulanlar.html" data-placement="bottom" ><i class="icon-info-sign icon-white"></i> Yardım & Destek</a></li>
                </ul>


            </div>
          </div>
        </div>
      </div>

	  <div class="container">


        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
              <a href="anasayfa.php"><img src="image/logo.png" alt="" /></a>
            </div>
          </div>

          <div class="span8">

            <div class="navbar navbar-static-top">

              <div class="navigation">

                <nav>

                  <ul class="nav topnav">

                    <li class="active">
                      <a href="anasayfa.php"><i class="icon-home"></i> Anasayfa </a>

                    </li>



                    <li class="dropdown">
                      <a href="#">Kutularımız <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="anasayfa.php#eski">Geçmiş Kutularımız</a></li>
                        <li><a href="anasayfa.php#fiyat">Aylık Kutularımız</a></li>
                        <li><a href="hediyekutu.php">Hediye Kutularımız</a></li>
						<li><a href="rastgele_kutu.php">Rastgele Kutularımız</a></li>

                      </ul>
                    </li>
                    <li>
                      <a href="market.php">Market </a>

                    </li>

                    <li>
                      <div class="dropdown">
   <a href="sepet.php" class="btn  dropdown-toggle  " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <i class="icon-shopping-cart"></i> Sepetim  <?php
                             if (isset($_SESSION["shopping_cart"])){
                                 $adet  = count($_SESSION["shopping_cart"]);
                                 echo " <span id=\"cart_count\">$adet</span>";
                             }else{
                                 echo " <span id=\"cart_count\">0</span>";
                             }
                         ?></a>


   </a>
    <div class="dropdown-menu"style="background:white " aria-labelledby="dropdownMenuButton">
     <form>
                 <div class="table-responsive">
                      <table class="table table-bordered table-striped">
                           <tr>
               <div class="col-md-6">  <td colspan="3" align="right"> Sepet İçeriği<br> </a></td>
                <tr>
                              <div class="col-md-6">
               <th width="5%">ÜRÜN ADI</th>  </div>
                                <th width="5%">ADET</th>
                                <th width="5%">TOPLAM FİYAT</th>
                           </tr>
            </div>
                           </tr>
                           <?php
                           if(!empty($_SESSION["shopping_cart"]))
                           {
                                $total = 0;
                                foreach($_SESSION["shopping_cart"] as $keys => $values)
                                {
                           ?>
                           <tr>
                                <td><?php echo $values["item_name"]; ?></td>
                                <td><?php echo $values["item_quantity"]; ?></td>
                                <td> <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?> TL</td>

                           </tr>
                           <?php
                                     $total = $total + ($values["item_quantity"] * $values["item_price"]);
                                }
                           ?>
                           <tr>
                                <td colspan="2" align="right">Toplam Fiyat</td>
                                <td align="right"> <?php echo number_format($total, 2); ?> TL</td>
                           </tr>
     <tr>
             <tr>
                <td colspan="3" align="right"> <a href="sepet.php"><i class="icon-shopping-cart"></i> Sepetime Git </a></td></tr>
                           </tr>
     <tr>
                           <?php
                           }
                           ?>
                      </table>
                 </div>
        </form>
   </div>
 </div>

                     </li>
                    <li>

                      <?php

                      if(isset($_SESSION['giris'])){

                         echo' <li class="dropdown" >';
                          echo '<a href="">'  .$_SESSION["kullanici_adi"].' <i class="icon-angle-down"></i></a>';
                          echo '<ul class="dropdown-menu" >';
                          echo  '<li><a href="cikis.php">çıkış</a></li>';
						  echo  '<li><a href="profilim.php">profilim</a></li>';

                          echo '</ul>';
                          echo '</li>';
                      }
                      else {

                      echo '  <a href="uyegirisi.php"><i class="icon-user"></i>  Üye Girişi  </a>' ;
                      }
                      ?>

                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
<div class="container">

  <?php

  $hd_id=$_GET["id"];
    $hediyekutu=$baglanti->query("SELECT * FROM hediyekutu where id=".$hd_id);
    foreach ($hediyekutu as $sonuc) {
      // code...
    ?>
  <section id="inner-headline">
     <div class="container">
       <div class="row">
         <div class="span12">
           <div class="inner-heading">
             <ul class="breadcrumb">
               <li><a href="anasayfa.php">Anasayfa</a> <i class="icon-angle-right"></i></li>
               <li><a href="hediyekutu.php">Hediye Kutularımız</a> <i class="icon-angle-right"></i></li>
               <li class="active"><?php echo $sonuc["hd_adi"];?></li>

             </ul>
           </div>
         </div>
       </div>
     </div>
    </section>
  <section id="content">
     <div class="container">
        <form method="post" action="incele.php?action=add&id=<?php echo $sonuc["id"]; ?>">
          <h1 class="buyuk"> <strong class="boy2"><?php echo $sonuc["hd_adi"];?></strong></h1>

       <div class="row">
         <div class="span12">

         </div>
       </div>
       <div class="row">
         <div class="span6">

              <div class="liste" >
            <h4>
              <?php echo $sonuc["hd_genel"];?>
            </h4>
<hr>
             <div class="blankline"></div>
             <select class="form-control sekil" name="quantity">
               <option>1</option>
               <option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>

           <p ><br>
                     <strong class="boy"> <?php echo $sonuc["hd_fiyat"]; ?> TL (KDV DAHİL)</strong>
                   </p>
                      <input type="hidden" name="hidden_name" value="<?php echo $sonuc["hd_adi"]; ?>" />
                      <input type="hidden" name="hidden_price" value="<?php echo $sonuc["hd_fiyat"]; ?>" />


                        <input type="submit" name="add_to_cart" style="margin-top:5px;"class="btn btn-medium btn-theme iceri" value="SEPETE EKLE" />  <br>
           </div>

          </div>
         <div class="span6">
           <img src="image/yenikutular/<?php echo $sonuc["img_url"];?>" alt="" class="flyRight" />
         </div>

       </div>
</form>

     </div>
   </section>
   <div class="container">
   <div class="widget">
                <div class="tabs">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#one" data-toggle="tab"><i class="icon-search"></i> KUTU İÇERİĞİ</a></li>
                    <li><a href="#two" data-toggle="tab"><i class=" icon-comments"></i> YORUMLAR</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="one">

              <ul class= "popular">
                <?php  for ($i=1; $i<=7 ; $i++) {
if ($sonuc["detay$i"]!='') {?>
<li><i class="icon-star"></i> <?php echo $sonuc["detay$i"];?></li>


<?php     }
} ?>


                         </ul>
                    </div>
                    <?php if(isset($_SESSION['giris'])){
?>
                    <div class="tab-pane" id="two">
                      <form  method="POST">

            <button type="button" class="btn btn-danger wdh" name="rs1_gonder" data-toggle="modal" data-target="#exampleModal" >

           <i class="icon-plus "></i> YENİ EKLE
          </button>

          <?php
          $c=$sonuc["hd_adi"];
          $b=$_GET["id"];
             $a=$_SESSION["id"];


             $sorgu="Select * from `kullanici`where kullanici_id=".$a;
                                           $sonuc=$baglanti->query($sorgu);
                                           while ($s=$sonuc->fetch_assoc()) {
                                             $k=$s["kullanici_adi"];
                        }
          if(isset($_POST['evet']))
           {


                $sql=" INSERT INTO `yorumlar` (`id`, `kutu_id`, `kullanici_id`,`k_adi` ,`kt_adi`, `k_yorum`) VALUES
              (NULL, '$b', '$a', '$k','$c', '".$_POST["kullanici_yorum"]."')";
                 $so=$baglanti->query($sql);


         }
          ?>
          </form>
                      <ul class="recent">

                        <?php
                        $id=$_GET["id"];
                        $sorgu="Select * from `yorumlar`where kutu_id=".$id;
                                                      $sonuc=$baglanti->query($sorgu);
                                                      while ($satir=$sonuc->fetch_assoc()) {
           											   ?>

                                    <li class="kare"><image src="image/heart2.png"> <b>&nbsp;&nbsp;<?php echo $satir["k_adi"];?></b> <hr>
                                      <?php echo $satir["k_yorum"];?>
                                      <div class="kt"> <b><?php echo $satir["tarih"];?></b>&nbsp;&nbsp; <a style="color:green;"><img src="image/like.png" alt=""> Kutumuzu Satın Aldı <br> </a></div>

                                    </li>
                                   <?php
                                  }
                                  ?>

                      </ul>
                    </div>
                  </div>
                </div>
              </div>
  </div>
  <?php
}else{?>

  <div class="tab-pane" id="two">
  <ul class="recent">
    <div class="alert alert-primary" role="alert">
    <b>YORUM YAPABİLMENİZ İÇİN GİRİŞ YAPINIZ!!  </b> &nbsp;&nbsp;  <?php  echo ' <a href="uyegirisi.php"><i class="icon-user"></i>  Üye Girişi  </a>' ; ?>
    </div>
      <?php
      $id=$_GET["id"];
      $sorgu="Select * from `yorumlar`where kutu_id=".$id;
                                    $sonuc=$baglanti->query($sorgu);
                                    while ($satir=$sonuc->fetch_assoc()) {
                 ?>

                  <li class="kare"><image src="image/heart2.png"> <b>&nbsp;&nbsp;<?php echo $satir["k_adi"];?></b> <hr>
                    <?php echo $satir["k_yorum"];?>
                    <div class="kt"> <b><?php echo $satir["tarih"];?></b>&nbsp;&nbsp; <a style="color:green;"> <img src="image/like.png" alt=""> Kutumuzu Satın Aldı <br> </a></div>

                  </li>
                 <?php
                }
                ?>

    </ul>
  </div>
</div>
</div>
</div>
</div>
  <?php
}
}
  ?>

</div>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title ktm" id="exampleModalLabel">
                                    <?php
                                    $id=$_GET["id"];
                                    $sorgu="Select * from `hediyekutu`where id=".$id;
                                                                  $sonuc=$baglanti->query($sorgu);
                                                                  while ($satir=$sonuc->fetch_assoc()) { ?>

                                            <img class="ktm" src ="image/yenikutular/<?php echo $satir["img_url"];?>"> <br>
                                            <?php
                                            echo $satir["hd_adi"];
                                          }
                                          ?></h5>
                                  <form class="" action="" method="post">

                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">




				   <div >
		          <p> * DEĞERLENDİRMENİZ :  </p>
				        </div>
				      <div >
	             <input type="text"  style="width:350px; height:100px;" name="kullanici_yorum" />
                  </div>
                  </div>
				  </div>
                  <div class="modal-footer">
               <input class="btn btn-success " type="submit" name="evet" value="KAYDET">

                 </div>
                  </form>

                              </div>
                            </div>







    <footer>
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Turkishsnack</h5>
              <ul class="link-list">
                <li><a href="#">Biz kimiz?</a></li>
                <li><a href="#">Şartlar ve koşullar </a></li>
                <li><a href="#">Gizlilik Politikası</a></li>
                <li><a href="#">Sıkça sorulan sorular</a></li>
                <li><a href="#">Destek forumumuz</a></li>

              </ul>

            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">İletişim</h5>
              <address>
							<strong>Turkishsnack Tic.A.Ş</strong><br>
							Dinkçiler Mahallesi,Soma Caddesi no:22-26<br>
						  Altıeylül/Balıkesir
						</address>
              <p>
                <i class="icon-phone"></i> (266) 222-2222 - (554) 333-3333 <br>
                <i class="icon-envelope-alt"></i> d2e-market@turkishsnack.com
              </p>
            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">turkishsnack'e katılın</h5>
              <p>
              Ailemize katılın ve lezzetli atıştırmalık ve fırsatları kaçırmayın!
              </p>
              <form class="subscribe">
                <div class="input-append">
                  <input class="span2" id="appendedInputButton" type="text">
                  <button class="btn btn-theme" type="submit">Abone ol</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p><span>&copy; turkishsnack Tic.A.Ş. Bütün hakları saklıdır.</span></p>
              </div>

            </div>

            <div class="span6">
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Eterna
                -->
             <a href="#">d2e-market teknoloji</a> tarafından yapılmıştır.
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>


		<script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>

  <script src="js/modernizr.custom.js"></script>
  <script src="js/toucheffects.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/camera/camera.js"></script>
  <script src="js/camera/setting.js"></script>

  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>

  <script src="js/jquery.flexslider.js"></script>
  <script src="js/animate.js"></script>
  <script src="js/inview.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>

</body>
</html>
