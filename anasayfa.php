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

  <!-- Theme skin -->
  <link href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="image/sayfa_logo.png" />

</head>

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


                      </ul>
                    </li>
                    <li>
                      <a href="contact.html">Market </a>

                    </li>

                   <li>
                      <a href="contact.html"><i class="icon-shopping-cart"></i> Sepetim </a>

                    </li>
                    <li>

                      <?php

                      if(isset($_SESSION['giris'])){

                         echo' <li class="dropdown">';
                          echo '<a href="">'  .$_SESSION["kullanici_adi"].' <i class="icon-angle-down"></i></a>';
                          echo '<ul class="dropdown-menu">';
                          echo  '<li><a href="cikis.php">çıkış</a></li>';
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
	<!-- section featured -->
    <section id="featured">

      <!-- slideshow start here -->

      <div class="camera_wrap" id="camera-slide">

        <!-- slide 1 here -->
        <div data-src="image/arka1.jpg">
          <div class="camera_caption fadeFromLeft">
            <div class="container">
              <div class="row">
                <div class="span6">
                  <h2 class="animated fadeInDown"><strong>POPÜLER ATIŞTIRMALIKLAR KAPINIZA GELSİN </strong></h2>
                  <p class="animated fadeInUp"> Türkiye'nin en çok tercih edilen atıştırmalıklarla hem kendinizi ödüllendirin hem de sevdiklerinizi mutlu edin.</p>
                  <a href="#" class="btn btn-info btn-large animated fadeInUp">
											 Şimdi Al
										</a>
                  <a href="#" class="btn btn-warning btn-large animated fadeInUp">
											 Hediye Et
										</a>
                </div>
                <div class="span6">
                  <img src="image/8-1.jpg" alt="" class="animated bounceInDown delay1" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- slide 2 here -->
        <div data-src="image/arka2.jpg">
          <div class="camera_caption fadeFromLeft">
            <div class="container">
              <div class="row">
                <div class="span6">
                  <img src="image/13.jpg" alt="" />
                </div>
                <div class="span6">
                  <h2 class="animated fadeInDown"><strong>Ailemize Katılmaya<span class="colored"> Ne Dersiniz?</span></strong></h2>

                  <form>
                    <div class="input-append">
                      <input class="span3 input-large" type="text">
                      <button class="btn btn-theme btn-large" type="submit">Abone Ol</button>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>

		<!-- slide 3 here -->
        <div data-src="image/arka3.jpg">
          <div class="camera_caption fadeFromLeft">
            <div class="container">
              <div class="row">
                <div class="span12 aligncenter">
				<h5 class="animated fadeInDown"> Her teslimatta sizi harika yeni atıştırmalıklarla şaşırtacağız, böylece her zaman yeni favoriler bulacaksınız. Baharatlı, tatlı, şeker, cips, ekşi, sakızlı, hepsine sahibiz!</h5>
                  <img src="image/üclü.png" alt="" class="animated bounceInDown delay1" />
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
	   </section>
    <!-- /section featured -->

    <section id="content">
      <div class="container">


        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span4">
                <div class="box flyLeft">
                  <div class="icon">
                     <img src="image/snack.png">
                  </div>
                  <div  class="text aligncenter">
                    <h4><strong>Sipariş</strong></h4>
                    <p>
                  Siparişinizi alıyoruz, kargoya vermek için lezzetli  atıştırmalık kutunuzu hazırlıyoruz.
                    </p>
                  </div>
                </div>
              </div>

              <div class="span4">
                <div class="box flyIn">
                  <div class="icon">
                   <img src="image/kargo.png">
                  </div>
                  <div class="text aligncenter">
                    <h4> <strong>Kargo</strong></h4>
                    <p>
                Her ayın belli bir günü yerel posta görevliniz tarafından kutunuz  teslim edilecektir.
                    </p>
                  </div>
                </div>
              </div>
              <div class="span4">
                <div class="box flyRight">
                  <div class="icon">
                   <img src="image/kutu.png">
                  </div>
                  <div class="text aligncenter">
                    <h4> <strong>Teslim </strong></h4>
                    <p>
                      Kutunuzu açın ve nefis atıştırmalıklarınızın tadını çıkarın!
                    </p>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="row">
          <div class="span12">
            <div class="solidline"></div>
          </div>
        </div>
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span12">
                <div class="aligncenter">
                  <h3> <strong>Fiyatlarımız</strong></h3>
                </div>
              </div>
            </div>


            <div class="row">

              <div class="span3">
                <div class="pricing-box-wrap animated-fast flyIn">
                  <div class="pricing-heading">
                    <img src="image/24.jpg">
                  </div>
                  <div class="pricing-terms">
                    <h6>20.00&#x20BA; /Ay</h6>
                  </div>
                  <div class="pricing-content">
                    <ul>
                      <li><i class="icon-ok"></i> 6 atıştırmalık</li>
                      <li><i class="icon-ok"></i> 1 içecek</li>
                      <li><i class="icon-ok"></i>1 yeni çıkan atıştırmalık</li>
                      <li><i class="icon-ok"></i> Ayın ürünü hediye</li>
                      <li><i class="icon-ok"></i>Ücretsiz kargo</li>
                    </ul>
                  </div>
                  <div class="pricing-action">
                    <a href="#" class="btn btn-medium btn-theme"><i class="icon-chevron-down"></i>Satın Al</a>
                  </div>
                </div>
              </div>

              <div class="span3">
                <div class="pricing-box-wrap animated-fast flyIn">
                  <div class="pricing-heading">
                  <img src="image/29.jpg">
                  </div>
                  <div class="pricing-terms">
                    <h6>55.00&#x20BA; /3Ay</h6>
                  </div>
                  <div class="pricing-content">
                    <ul>
                      <li><i class="icon-ok"></i>6 atıştırmalık</li>
                      <li><i class="icon-ok"></i>1 içecek</li>
                      <li><i class="icon-ok"></i>1 yeni çıkan atıştırmalık</li>
                      <li><i class="icon-ok"></i>Ayın ürünü hediye</li>
                      <li><i class="icon-ok"></i> Ücretsiz Kargo</li>
                    </ul>
                  </div>
                  <div class="pricing-action">
                    <a href="#" class="btn btn-medium btn-theme"><i class="icon-chevron-down"></i>Satın Al</a>
                  </div>
                </div>
              </div>

              <div class="span3">
                <div class="pricing-box-wrap special animated-slow flyIn">
                  <div class="pricing-heading">
                    <img src="image/28.jpg">
                  </div>
                  <div class="pricing-terms">
                    <h6>100.00&#x20BA; /6Ay</h6>
                  </div>
                  <div class="pricing-content">
                    <ul>
                      <li><i class="icon-ok"></i> 6 atıştırmalık</li>
                      <li><i class="icon-ok"></i>2 içecek </li>
                      <li><i class="icon-ok"></i>1 yeni çıkan atıştırmalık </li>
                      <li><i class="icon-ok"></i>Ayın ürünü hediye</li>
                      <li><i class="icon-ok"></i> Ücretsiz kargo</li>
                    </ul>
                  </div>
                  <div class="pricing-action">
                    <a href="#" class="btn btn-medium btn-theme"><i class="icon-chevron-down"></i>Satın Al</a>
                  </div>
                </div>
              </div>

              <div class="span3">
                <div class="pricing-box-wrap animated flyIn">
                  <div class="pricing-heading">
                      <img src="image/32.jpg">
                  </div>
                  <div class="pricing-terms">
                    <h6>220.00&#x20BA; /Yıllık</h6>
                  </div>
                  <div class="pricing-content">
                    <ul>
                      <li><i class="icon-ok"></i>8 atıştırmalık</li>
                      <li><i class="icon-ok"></i>2 içecek</li>
                      <li><i class="icon-ok"></i>2yeni çıkan atıştırmalık</li>
                      <li><i class="icon-ok"></i> Ayın ürünü hediye</li>
                      <li><i class="icon-ok"></i> Ücretsiz kargo</li>
                    </ul>
                  </div>
                  <div class="pricing-action">
                    <a href="#" class="btn btn-medium btn-theme"><i class="icon-chevron-down"></i>Satın Al</a>
                  </div>
                </div>
              </div>
            </div>

          </div>


        </div>
		<div class="row">
          <div class="span12">
            <div class="solidline"></div>
          </div>
        </div>



        <div class="row">
          <div class="span12 aligncenter">
            <h3 class="title">İnsanlar bizim <strong>hakkımızda</strong> ne söylüyor?</h3>
            <div class="blankline30"></div>

            <ul class="bxslider">
              <li>
                <blockquote>
                  Siparişim özenli ve eksiksiz bir şekilde elime ulaştı.Teşekkürler.
                </blockquote>
                <div class="testimonial-autor">
                  <img src="image/userLogo.png" alt="" />
                  <h4>Kerim Sancak</h4>
                  <a href="#">www.turkishsnack.com</a>
                </div>
              </li>
              <li>
                <blockquote>
                Hediye olarak arkadaşıma yolladım ve çok beğenildi.
                </blockquote>
                <div class="testimonial-autor">
                  <img src="image/userLogo.png" alt="" />
                  <h4>Leyla Karay</h4>
                  <a href="#">www.turkishsnack.com</a>
                </div>
              </li>
              <li>
                <blockquote>
                  Evden çıkamadığımız bu dönemde güzel bir alternatif ve ucuz bir seçim oldu çok memnun kaldım.Aylık paket almıştım.3 aylık olanı satın almayı düşünüyorum.
                </blockquote>
                <div class="testimonial-autor">
                  <img src="image/userLogo.png" alt="" />
                  <h4>Ali Tekin</h4>
                  <a href="#">www.turkishsnack.com</a>
                </div>
              </li>
              <li>
                <blockquote>
                En sevdiklerim bir arada toplanmış çok sağlam geldi hiç kırılma hasar yok.
                </blockquote>
                <div class="testimonial-autor">
                  <img src="image/userLogo.png" alt="" />
                  <h4>Arden Ozan</h4>
                  <a href="#">www.turkishsnack.com</a>
                </div>
              </li>
            </ul>

          </div>
        </div>

      </div>
    </section>


    <section id="works">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h4 class="title"> <strong>Önceki</strong>Kutularımız</h4>
            <div class="row">

              <div class="grid cs-style-4">
                <div class="span3">
                  <div class="item">
                    <figure>
                      <div><img src="image/30.png" alt="" /></div>
                      <figcaption>
                        <div>
                          <span>
                      <a href="#"><i class="icon-list icon-circled icon-bglight icon-2x"></i></a>
                      </span>
                      <h6 class="aligncenter" style="color:white;">İçindekiler</h6>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                </div>
                <div class="span3">
                  <div class="item">
                    <figure>
                      <div><img src="image/13.jpg" alt="" /></div>
                      <figcaption>
                        <div>
                          <span>
                      <a href="#"><i class="icon-list icon-circled icon-bglight icon-2x"></i></a>
                      </span>
                      <h6 class="aligncenter" style="color:white;">İçindekiler</h6>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                </div>
                <div class="span3">
                  <div class="item">
                    <figure>
                      <div><img src="image/32.jpg" alt="" /></div>
                      <figcaption>
                        <div>
                          <span>
                      <a href="#"><i class="icon-list icon-circled icon-bglight icon-2x"></i></a>
                      </span>
                      <h6 class="aligncenter" style="color:white;">İçindekiler</h6>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                </div>
                <div class="span3">
                  <div class="item">
                    <figure>
                      <div><img src="image/27.png" alt="" /></div>
                      <figcaption>
                        <div>
                          <span>
                      <a href="#"><i class="icon-list icon-circled icon-bglight icon-2x"></i></a>
                      </span>
                      <h6 class="aligncenter" style="color:white;">İçindekiler</h6>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                </div>


            </div>
          </div>
        </div>
      </div>
    </section>

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
