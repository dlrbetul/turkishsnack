<?php
ob_start();
include('baglan.php');
   require_once ('eklecikar.php');
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
                      <a href="sepete_ekle.php"><i class="icon-shopping-cart"></i> Sepetim </a>
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
              </div>
          </div>
        </div>
      </div>
				</header>

				 <section id="inner-headline">
					  <div class="container">
						<div class="row">
						  <div class="span12">
							<div class="inner-heading">
							  <ul class="breadcrumb">
								<li><a href="anasayfa.php">Anasayfa</a> <i class="icon-angle-right"></i></li>
								<li><a href="#">Yardım & Destek</a> <i class="icon-angle-right"></i></li>
								<li class="active">Sıkça Sorulan Sorular</li>

							  </ul>
							  <h2>Sıkça Sorulan Sorular</h2>
							</div>
						  </div>
						</div>
					  </div>
					</section>





					 <section id="content">
							<div class="container">
								 <div class="row">
									<div class="span12">

										  <h5 class="title"><strong>Üyelik</strong> Soruları</h5>

										       <div class="accordion" id="accordion2">
											  <div class="accordion-group">
												<div class="accordion-heading">
												  <a class="accordion-toggle " data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
																<i class="icon-plus"></i> Üye olmak istiyorum nasıl yapablirim? </a>
												</div>
												<div id="collapseOne" class="accordion-body collapse ">
												  <div class="accordion-inner">
													Ana sayfamızda sağ üst köşede bulunan üye ikonuna tıklayarak gerekli bilgileri doldurup aramıza katılabilirsiniz.
												  </div>
												</div>
											  </div>
											  <div class="accordion-group">
												<div class="accordion-heading">
												  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
																<i class="icon-plus"></i> Şifremi unuttum ne yapmalıyım? </a>
												</div>
												<div id="collapseTwo" class="accordion-body collapse">
												  <div class="accordion-inner">
													Ana sayfamızda sağ üst köşede bulunan üye girişi ekranından 'ŞİFREMİ UNUTTUM' bölümüne tıklayarak kayıtlı e-posta adresinizi forma girip gönderiniz. Şifre yenileme linki mail ile gönderilecektir.
												  </div>
												</div>
											  </div>

											</div>

											 <h5 class="title"><strong>Ürünler Ve Sipariş</strong> Soruları</h5>
											<div class="accordion" id="accordion3">
											  <div class="accordion-group">
												<div class="accordion-heading">
												  <a class="accordion-toggle " data-toggle="collapse" data-parent="#accordion3" href="#billing-collapseOne">
																<i class="icon-plus"></i>  Siparişimin durmunu nasıl öğrenebilirim? </a>
												</div>
												<div id="billing-collapseOne" class="accordion-body collapse ">
												  <div class="accordion-inner">
													Siparişinizin  son durumunu turkishsnack web sitesinden teslimat numarasıyla sorgulama yaparak öğrenebilirsiniz.
												  </div>
												</div>
											  </div>
											  <div class="accordion-group">
												<div class="accordion-heading">
												  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#billing-collapseTwo">
																<i class="icon-plus"></i>Sitenizde hangi şekilde ödeme yapabilirim? Kart geçerli mi? </a>
												</div>
												<div id="billing-collapseTwo" class="accordion-body collapse">
												  <div class="accordion-inner">
													Sitemizde müşterilerimize kapıda ödeme imkanı sunulmaktadır.Kart ile ödeme seçeneğimiz yoktur.
												  </div>
												</div>
											  </div>
											  <div class="accordion-group">
												<div class="accordion-heading">
												  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#billing-collapseThree">
																<i class="icon-plus"></i> Siparişimi tamamladıktan sonra üzerinde değişiklik yapabilir miyim?</a>
												</div>
												<div id="billing-collapseThree" class="accordion-body collapse">
												  <div class="accordion-inner">
													Siparişinizi onayladıktan sonra maalesef üzerinde değişiklik yapamıyoruz. Eğer herhangi bir değişiklik yapmak isterseniz siparişinizi iptal ederek yeni bir sipariş oluşturabilirsiniz.
												  </div>
												</div>
											  </div>
											   <div class="accordion-group">
																	<div class="accordion-heading">
																	  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseFour">
																					<i class="icon-plus"></i> Ürünlerim elime ulaştı ancak değiştirmek istiyorum ne yapabilirim?</a>
																	</div>
																	<div id="collapseFour" class="accordion-body collapse">
																	  <div class="accordion-inner">
																		Turkishsnack Online mağaza üzerinden verdiğiniz siparişlerde maalesef değişiklik kabul edemiyoruz. Böyle bir talebiniz olursa aldığınız ürünleri iade ederek yeni bir sipariş oluşturabilirsiniz.
															  </div>
														</div>
													 </div>
			                                              <div class="accordion-group">
																				<div class="accordion-heading">
																				  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseFive">
																								<i class="icon-plus"></i>Kampanya ürünleri neden hemen tükeniyor?</a>
																				</div>
																				<div id="collapseFive" class="accordion-body collapse">
																				  <div class="accordion-inner">
																					Müşterilerimizin yoğun ilgisi nedeniyle ürünlerimiz kısa sürede tükenebilmektedir. Sitemizdeki stok bilgilerini günlük olarak güncellemekteyiz.
																				  </div>
																				</div>
																			  </div>
																			  <div class="accordion-group">
																	<div class="accordion-heading">
																	  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseSix">
																					<i class="icon-plus"></i>Yeni kampanyalardan nasıl haberdar olabilirim ?</a>
																	</div>
																	<div id="collapseSix" class="accordion-body collapse">
																	  <div class="accordion-inner">
																		Kampanyalarımızı web sitemiz, Facebook, Instagram ve Twitter hesaplarımızdan yaptığımız paylaşımlar sayesinde öğrenebilirsiniz.
																	  </div>
																	</div>
																  </div>
																<div class="accordion-group">
																	<div class="accordion-heading">
																	  <a class="accordion-toggle " data-toggle="collapse" data-parent="#accordion3" href="#collapseSeven">
																					<i class="icon-plus"></i> Siparişimin durmunu nasıl öğrenebilirim?</a>
																	</div>
																	<div id="collapseSeven" class="accordion-body collapse ">
																	  <div class="accordion-inner">
																		Kargonuzun son durumunu turkishsnack web sitesinden teslimat numarasıyla sorgulama yaparak öğrenebilirsiniz.
																	  </div>
																	</div>
																  </div>
														<div class="accordion-group">
																	<div class="accordion-heading">
																	  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseEight">
																					<i class="icon-plus"></i> Kargo ücreti ne kadar?</a>
																	</div>
																	<div id="collapseEight" class="accordion-body collapse">
																	  <div class="accordion-inner">
																	Tüm alışverişlerinizde kargo ücretsizdir.
																	  </div>
																	</div>
																  </div>
																  <div class="accordion-group">
																	<div class="accordion-heading">
																	  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseNine">
																					<i class="icon-plus"></i>Ürünün kargoya veriliş süresi kaç gündür?</a>
																	</div>
																	<div id="collapseNine" class="accordion-body collapse">
																	  <div class="accordion-inner">
																		Siparişiniz 6 iş günü içerisinde kargoya teslim edilir. Sipariş yoğunluğu yaşanan dönemlerde bu süre 10 iş gününe kadar uzayabilmektedir. Alışverişlerin yoğun olduğu dönemlerde kargo süresini göz önünde bulundurmanızı rica ederiz.
																	  </div>
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
								 <a href="#">d2e-market teknoloji</a> tarafından yapılmıştır.
								  </div>
								</div>
							  </div>
							</div>
						  </div>
		  </footer>

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
