<?php
  include("baglan.php");
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
                        <li><a href="typography.html">Geçmiş Kutularımız</a></li>
                        <li><a href="components.html">Aylık Kutularımız</a></li>
                        <li><a href="icons.html">Hediye Kutularımız</a></li>
						<li><a href="rastgele_kutu.php">Rastgele Kutularımız</a></li>


                      </ul>
                    </li>
                    <li>
                      <a href="contact.html">Market </a>

                    </li>

                   <li>
                      <a href="contact.html"><i class="icon-shopping-cart"></i> Sepetim </a>

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
	  <?php
		  if(isset($_POST["uyeol"]))
		 {
	 $sql="INSERT INTO `kullanici` (`kullanici_id`, `ad`, `soyad`, `kullanici_adi`, `kullanici_sifre`, `kullanici_eposta`, `k_il`,`k_ilce`,`kullanici_adres`, `kullanici_telefonNo`)
	 VALUES (NULL, '".$_POST['ad']."',
	 '".$_POST['soyad']."',
	 '".$_POST['kullanici_adi']."',
	 '".$_POST['kullanici_sifre']."',
	 '".$_POST['kullanici_eposta']."',
	  '".$_POST['k_il']."',
	   '".$_POST['k_ilce']."',
	 '".$_POST['kullanici_adres']."',
	 '".$_POST['kullanici_telefonNo']."');";
$sonuc=$baglanti->query($sql)or die($baglanti->error);
if ($sonuc===true) {
   header("Location:uyegirisi.php");
}
else {
  echo '<script>alert("Kayıt edilemedi!!")';
}
		 }
	  ?>
      <br>
      <div class="arka_form2" >

        <div class="row">
          <div class="span8">
            <h3 class="title"><image src="image/snack.png"><strong>&nbsp;Üye OL</strong></h3>
      <form action="" method="post" role="form" class="contactForm" onsubmit="return isValid(this)">
               <div class="row">
			   <div class="span8 form-group  ">
                 <label>&nbsp;&nbsp; ADINIZ:  </label> <input type="text" name="ad" id="ad"/>
                   <div class="validation"></div>
                 </div>
				  <div class="span8 form-group  ">
                  <label>&nbsp;&nbsp; SOYADINIZ:  </label> <input  type="text" name="soyad" id="soyad"  />
                   <div class="validation"></div>
                 </div>
				  <div class="span8 form-group  ">
                   <label> &nbsp;&nbsp;KULLANICI ADINIZ:  </label> <input style="width:340px; height:40px;" type="text" name="kullanici_adi" id="kul_ad"  />
                   <div class="validation"></div>
               </div>
                 <div class="span8 form-group  ">
                    <label>&nbsp;&nbsp; E-POSTA ADRESİNİZ:  </label><input style="width:340px; height:40px;" type="email" name="kullanici_eposta" id="email" />
                   <div class="validation"></div>
                 </div>

                 <div class="span8 form-group " id="d1">
                           <label>&nbsp;&nbsp; ŞİFRENİZ : </label><input style="width:340px; height:28px;" type="password" name="kullanici_sifre" id="s1"  data-rule="minlen:8" data-msg="En az 8 karakter giriniz." />
                          <div class="validation "></div>
                             </div>
                           <div class="span8 form-group ">
                          <label>&nbsp;&nbsp; TEKRAR ŞİFRE GİRİNİZ:  </label> <input style="width:340px; height:28px;" type="password" name="kullanici_sifre2" id="s2" onblur="aa()"  />
                          <div class="validation "></div>
                          </div>
                          <div style="color:red; margin-left: 100px;" id="a1"> </div>
                  <div class="span8 form-group  ">
                   <label>&nbsp;&nbsp; TELEFON NUMARANIZ: </label>  <input style="width:340px; height:40px;" type="text" name="kullanici_telefonNo" id="b1"  />
                   <div class="validation"></div>
                 </div>
				  <div class="span2 form-group">
                   <label> &nbsp;&nbsp;İL:  </label> <input style="width:150px; height:28px;" type="text" name="k_il" id="kul_adres" />
                   <div class="validation"></div>
                 </div>
			   <div class="span2 form-group">
                   <label class="span2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;İLÇE:  </label> <input style="width:148px; height:28px;" type="text" name="k_ilce" id="kul_adres" />
                   <div class="validation"></div>
                 </div>
				<div class="span8 form-group">
                   <label> &nbsp;&nbsp;ADRESİNİZ:  </label> <input style="width:340px; height:100px;" type="text" name="kullanici_adres" id="kul_adres" />
                   <div class="validation"></div>
                 </div>

              <div class="span3 text-center form-group">
                   <button class="btn btn-theme btn-medium " type="submit" name="uyeol">Üye OL</button>
                 </div>
          </div>

       </div>
   </div>

</div>
<br>
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
    <script>
    function aa(){
     var s1=document.getElementById("s1");
     var s2=document.getElementById("s2");
     var b1=document.getElementById("b1");
     var d1=document.getElementById("d1");
     var a1=document.getElementById("a1");
     document.getElementById("b1").onclick=function()
     {
       if ( s1 == null|| s1 == "" || s2 == null || s2 == "")
           {
               a1.innerHTML="boş bırakmayın";
               return false;
           }
     if(s1.value==s2.value){
      a1.innerHTML="**Şifreler eşleşti";
      a1.style.color="#237a23";
     }
     else{
      a1.innerHTML="!!!!!!Şifreler aynı değil!";
      a1.style.color="#d92727";
     }
     }

     }


     </script>

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


 <!-- Template Custom JavaScript File -->
 <script src="js/custom.js"></script>
  </body>
</html>
<?php
ob_flush();
 ?>
