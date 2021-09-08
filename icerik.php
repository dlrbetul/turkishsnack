<?php include 'baglan.php';
session_start();

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


  <link rel="stylesheet" href="cssmenu/animate.css">
 <link rel="stylesheet" href="cssmenu/superslides.css">
  <link rel="stylesheet" href="cssmenu/responsive.css">
  <link rel="stylesheet" href="cssmenu/baguetteBox.min.css">


  <!-- Theme skin -->
  <link href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="image/sayfa_logo.png" />
  <style media="screen">
  .heading-title{
  	margin-bottom: 50px;
  }
  .heading-title h2{
  	color: #010101;
  	font-size: 28px;
  	font-family: 'Arbutus Slab', serif;
  }
  .heading-title p{
  	font-size: 18px;
  	font-weight: 200;
  	margin: 0px;
  }
  .filter-button-group{
  		margin: 10px 0px;
  	}
    .menu-box{
  	padding: 70px 0px;
  }
  .filter-button-group button {
      color: #333;
      letter-spacing: 1px;
      text-transform: uppercase;
      font-weight: 600;
      font-size: 14px;
      cursor: pointer;
      background: #fff;
      padding: 12px 40px;
      border: none;
      border-radius: 4px;
  }

  .filter-button-group button.active {
      background: #cfa671;
      color: #fff;
      box-shadow: 2px 20px 45px 5px rgba(0,0,0,.2);
  }

  .gallery-single{
  	margin: 30px 0px;
  }

  .gallery-single {
      position: relative;
      overflow: hidden;
      -webkit-box-shadow: 0 0 10px #ccc;
      box-shadow: 0 0 10px #ccc;

  }

  .why-text {
      position: absolute;
      left: 0;
      bottom: -100%;
      right: 0;
      height: 100%;
      background: rgba(207, 166, 113, 0.9);
      padding: 12px 12px;
      -webkit-transition: all .3s ease;
      transition: all .3s ease;
  }
  .why-text h4{
  	color: #ffffff;
  	font-size: 24px;
  	font-weight: 500;
  	font-family: 'Arbutus Slab', serif;
  }
  .why-text p{
  	color: #ffffff;
  	font-size: 18px;
  	border-bottom: 1px dashed #010101;
  	margin: 0px;
  	padding-bottom: 15px;
  	margin-top: 50px;
  	margin-bottom: 15px;
  }
  .why-text h5{
  	font-size: 28px;
  	font-weight: 600;
  	color: #ffffff;
  }

  .gallery-single:hover .why-text{
  	bottom: 0px;
  }
.special-list, ::after, ::before {
    box-sizing: border-box;
}

.menu-box, ::after, ::before {
    box-sizing:border-box;
}
.special-list{
  position:relative;
  height:810px;
}
.special-grid{
  position:absolute;
  margin-left:60px;
  top: 0px;
  width:200px;

}
.containera {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
.img-fluid {
    max-width:100%;
    height:auto;
    max-height:300px;
    min-height:300px;

    border-style: none;
}
.a{
  text-align:center;
}


  </style>
</head>

<body style="overflow:visible;">

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
                      <a href="market.php"></i>Market </a>

                    </li>

                   <li>

                      <a href="contact.html"><i class="icon-shopping-cart "></i> Sepetim </a>

                    </li>
                    <li>

                      <?php

                      if(isset($_SESSION['giris'])){

                         echo' <li class="dropdown">';
                          echo '<a href="">'  .$_SESSION["kullanici_adi"].' <i class="icon-angle-down"></i></a>';
                          echo '<ul class="dropdown-menu">';
                          echo  '<li><a href="cikis.php">çıkış</a></li>';
                          echo  '<li><a href="profilim.php">profilim</a></li>';
                          echo  '<li><a href="chat.php">Mesaj</a></li>';
                          echo '</ul>';
                          echo '</li>';
                      }
                      else {

                      echo '  <a href="uyegirisi.php">Üye Girişi  </a>' ;
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
    <div class="menu-box">
    <div class="containera">
      <div class="row">
        <div class="col-lg-12">
          <div class="heading-title text-center">
            <h2>Önceki Kutularımız</h2>
            <p>Önceki aylarda kutularımızın içinde neler varmış bakalım.Bu ayın kutusunu almayı unutma!!</p>
          </div>
        </div>
      </div>


<div class="row">
<?php
$ing_aylar = array("January","February","March","May","April","June","July","August","September","October","November","December");
$tr_aylar = array("OCAK","SUBAT","MART","NISAN","MAYIS","HAZIRAN","TEMMUZ","AGUSTOS","EYLUL","EKIM","KASIM","ARALIK");
 $tarihCekme="SELECT MONTHNAME(`ay`) FROM `eski_kutular` ORDER BY `icerik_id` DESC LIMIT 3";
 $tarih=$baglanti->query($tarihCekme);
 $json_array=array();
  while ($tarih1=$tarih->fetch_assoc()) {
    $tarihDegis= str_replace($ing_aylar,$tr_aylar,$tarih1);
    $json_array[]=$tarihDegis;
  }

  $ay1=implode(",",$json_array[0]);
  $ay2=implode(",",$json_array[1]);
  $ay3=implode(",",$json_array[2]);

  $t="SELECT `ay` FROM `eski_kutular` ORDER BY `icerik_id` DESC LIMIT 3";
  $date=$baglanti->query($t);
  $j=array();
   while ($date11=$date->fetch_assoc()) {

     $j[]=$date11;
   }
   $a1=implode(",",$j[0]);
   $a2=implode(",",$j[1]);
   $a3=implode(",",$j[2]);

 ?>
 <div class="col-lg-12">
   <div class="special-menu text-center">
     <div class="button-group filter-button-group">
       <button class="active" data-filter="*">Hepsi</button>
       <button data-filter=".<?=$a1?>"><?=$ay1?></button>
       <button data-filter=".<?=$a2?>"><?=$ay2?></button>
       <button data-filter=".<?=$a3?>"><?=$ay3?></button>
     </div>
   </div>
 </div>





 </div>


      <div class="row special-list">
      <?php
      $icerik="SELECT `icerik_id` FROM `eski_kutular` ORDER BY `icerik_id` DESC LIMIT 3";
      $icerik1=$baglanti->query($icerik);

      while ($sonuc_icerik=$icerik1->fetch_assoc()) {
      	for($j = 1; $j <= 5; $j++){

      $sorgu1="SELECT `eski_kutular`.`icerik_id`,`eski_kutular`.`ay`,`eski_kutular`.`urun".$j."_id`,`urunleri`.`img_url`,`urunleri`.`urun_adi`,`urunleri`.`urun_fiyat`  FROM `eski_kutular` INNER JOIN `urunleri` ON `eski_kutular`.`urun".$j."_id`=`urunleri`.`id` WHERE `eski_kutular`.`icerik_id`=".$sonuc_icerik['icerik_id']."";
      $sonuc1=$baglanti->query($sorgu1);
      $satir1=$sonuc1->fetch_assoc();
      if($satir1!=null){


      ?>
      		<div class="col-sm-4 col-md-6 special-grid <?=$satir1['ay']?> ">
                <div class="gallery-single fix a">
                  <img src="image/<?=$satir1['img_url']?>" class="img-fluid" alt="Image">
                  <div class="why-text">
                    <p><?=$satir1['urun_adi']?></p>
                    <h5><?=$satir1['urun_fiyat']?>₺</h5>
                  </div>
                </div>
              </div>


      <?php

      	}
      }

  }
      ?>
      </div>


      </div>

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
  <script src="js/bootstrap.js"></script>

  <script src="js/modernizr.custom.js"></script>
  <script src="js/toucheffects.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>

  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>

  <script src="js/jquery.flexslider.js"></script>
  <script src="js/animate.js"></script>
  <script src="js/inview.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>


  <script src="jsmenu/jquery-3.2.1.min.js"></script>
  <script src="jsmenu/jquery.superslides.min.js"></script>
  <script src="jsmenu/images-loded.min.js"></script>
  <script src="jsmenu/isotope.min.js"></script>
  <script src="jsmenu/custom.js"></script>
-

</body>
</html>
