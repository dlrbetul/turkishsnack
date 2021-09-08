<?php
include('baglan.php');
session_start();
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
  <style>
    body{
  background-image: url("image/arkaplan_cake.jpg");
    }
  </style>
</head>

<body >

  <div id="wrapper">


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
                <li><a style="color:white;" href="#" data-placement="bottom" title="Sık Sorulan Sorular"><i class="icon-info-sign icon-white"></i> Yardım & Destek</a></li>
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
                      <a href="sepet.php"><i class="icon-shopping-cart"></i> Sepetim </a>

                    </li>
                    <li>
                      <a href="uyegirisi.php"><i class="icon-user"></i>Üye Girişi </a>
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
      <!--    -->
      <br>
      <div class="arka_form">
        <div class="row">
          <div class="span8">
            <h3 class="title"><image src="image/snack.png"><strong>&nbsp;Üye Girişi</strong></h3>
      <form action="#" method="post" id="form" class="contactForm">
               <div class="row">
                 <div class="span4 form-group  ">
                   <div class="inputemail">
                     <input style="margin-left:20px;" type="email" name="k_email" id="email" placeholder="E-postanızı giriniz." onkeydown="dogrulama()" required />
                     <span id="mesaj"></span>
                   </div>
                 </div>
                 <div class="span8 form-group ">
                   <div class="inputpass">
                 <input style="margin-left:20px; width:340px; height:28px;" type="password" name="k_sifre" id="password" placeholder="Parolanızı giriniz." required />
                 <br>
                <span id="sifremsj" style="color:#d92727; margin-left:20px;"></span>
                 </div>
                    <h6>Hesabın yok mu?<a style="color:#ff7a0f" href="uyeol.php">Üye ol</a></h6>
               </div>
              </div>
              <div class="text-left">
                   <button class="btn btn-theme btn-medium " type="submit" name="submit">Giriş Yap</button>
                 </div>
          </div>
       </div>
</div>
<br>

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
    <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>
<?php
if (isset($_POST['submit'])) {
  $k_email=$_POST["k_email"];
  $k_sifre=$_POST["k_sifre"];
  $sorgu="SELECT * FROM kullanici WHERE kullanici_eposta='" . $_POST["k_email"] . "' and kullanici_sifre = '". $_POST["k_sifre"]."'";
	$sonuc = $baglanti->query($sorgu)or die($baglanti->error);
  $dizi = $sonuc-> fetch_assoc();
  if(is_array($dizi)) {
     $_SESSION["giris"] = "true";
      $_SESSION["id"] = $dizi['kullanici_id'];
      $_SESSION["kullanici_adi"] = $dizi['kullanici_adi'];
      $_SESSION["eposta"] = $dizi['kullanici_eposta'];
      $_SESSION["sifre"] = $dizi['kullanici_sifre'];
      header("Location:anasayfa.php");
    } else{ ?>
    <script>
	var pwmesaj=document.getElementById("sifremsj");
	pwmesaj.innerHTML="Yanlış bilgi girdiniz.Tekrar deneyiniz.";
	</script>
	<?php
	}
    }
 ?>
<script type="text/javascript">
  function dogrulama(){
    var form=document.getElementById("form");
    var email=document.getElementById("email").value;
    var mesaj=document.getElementById("mesaj");


    var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (email.match(pattern)) {
      form.classList.add("valid");
      form.classList.remove("invalid");
      mesaj.innerHTML="Böyle bir e-posta adresi mevcut";
      mesaj.style.color="#237a23";
    }
    else {
      form.classList.remove("valid");
      form.classList.add("invalid");
      mesaj.innerHTML="Lütfen geçerli bir e-posta adresi giriniz.";
      mesaj.style.color="#d92727";

    }
    if (email=="") {

      form.classList.remove("valid");
      form.classList.remove("invalid");
      mesaj.innerHTML="";


    }

  }
</script>
  <!--  <script type="text/javascript">
    function kontrol() {
    var username, pass, text ;

    // Kullanıcı adının uzunluğunu username değişkenine aktar
    // Şifrenin uzunluğunu pass değişkenine aktar
    username= document.getElementById("kullanici_adi").value.length;
    pass= document.getElementById("kullanici_sifre").value.length;


    // Kullanıcı adı veya şifre girilmemişse
    if (username == 0 || pass == 0) {
    text= "Kullanici adı veya sifre bos birakilamaz";
    }

    // Şifre 6 karakterden kısaysa
    else if (pass < 8) {
    text= "Sifre 6 karakterden kisa olamaz";
    }

    // Kullanıcı adı 3'den küçük 20'den fazlaysa
    else if (username < 3 || username > 20) {
    text= "Kullanici adi 3-20 karakter arasında olmalıdır";
    }

    // İkisi de uygunsa
    else {
    text= "Kayıt Basarili" ;
    }


    document.getElementById("result").innerHTML = text;
    }
    </script>
  -->
<script src="js/jquery.js"></script>
 <script src="js/jquery.easing.1.3.js"></script>
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

 <!-- Contact Form JavaScript File -->
 <script src="js/inview.js"></script>


 <!-- Template Custom JavaScript File -->
 <script src="js/custom.js"></script>
  </body>

</html>
