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
<style>

.rnk{
	    color: #999999;
}
.rnk2{
	    color:white;
}
#cart_count{
	text-align:center;
	padding:0 0.5rem 0.1rem 0.5rem;
    border-radius:3rem;
	background-color:#e96b56;
	color:white;
}
.sekil{
	text-align:center;
	width:30px;
}

 .cizgi{
	 border-right: 1px solid #e9e9e9;
    padding: 0 30px 0 0;
 }
 .kare{
	 height: 400px;
    width: 850px;
    background-color: #ffffff;

    margin-left: 270px;
    border: 1px solid #e9e9e9;
 }
 .bos{
	  padding: 8px 35px 8px 14px;
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
                <li><a style="color:white;" href="sorulanlar.php" data-placement="bottom" title="Sık Sorulan Sorular"><i class="icon-info-sign icon-white"></i> Yardım & Destek</a></li>
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
					 <li> <?php

                      if(isset($_SESSION['giris'])){

                         echo' <li class="dropdown" >';
                          echo '<a href="">'  .$_SESSION["kullanici_adi"].' <i class="icon-angle-down"></i></a>';
                          echo '<ul class="dropdown-menu" >';
                          echo  '<li><a href="cikis.php">çıkış</a></li>';
                          echo  '<li><a href="profilim.php">profilim</a></li>';
                          echo  '<li><a href="chat.php">Mesaj</a></li>';
                          echo '</ul>';
                          echo '</li>';
                      }
                      else {

                      echo '  <a href="uyegirisi.php"><i class="icon-user"></i>  Üye Girişi  </a>' ;
                      }
                      ?></li>
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

		  <section id="content">
      <div class="container">
        <div class="row">

          <div class="span2">

            <aside class="left-sidebar">



              <div class="widget">

                <h5 class="widgetheading">HESABIM</h5>

                <ul class="cat">
                  <li><a href="profilim.php"><i class="icon-user rnk"></i>  Üyelik Bilgilerim          </a><i class="icon-angle-right"></i> </li>
				  <hr>
                  <li><a href="siparislerim.php"><i class="icon-list-ul rnk "></i>  Siparişlerim      </a><i class="icon-angle-right"></i> </li>
				    <hr>
            <li><a href="uyeAbonelik.php"><i class="icon-gift rnk "></i>  Aboneliklerim     </a><i class="icon-angle-right"></i> </li>
            <hr>
                  <li><a href="adres.php"><i class=" icon-home rnk"></i>  Adreslerim       </a><i class="icon-angle-right"></i> </li>
				    <hr>
                  <li> <a href="yorumlar.php"><i class="icon-comment rnk"></i> Yorumlarım  </a><i class="icon-angle-right"></i> </li>
				    <hr>
				  <li><a href="sorulanlar.php"><i class=" icon-info-sign rnk"></i> Yardım & Destek</a>   <i class="icon-angle-right"></i> </li>
				    <hr>
                </ul>
              </div>
            </aside>
			 </div>



				<?php
	 /*** verileri çekme ***/
	 $a=$_SESSION["id"];
	$yorumlari=$baglanti->query("SELECT * FROM yorumlar WHERE kullanici_id=".$a);


	?>


  <div class="kare" >
			<br>
			  <h6 class="bos" style="color:red ">Yorumlarım</h6>
                  <div class="span8 ">
                    <div class="media ">
             <?php

			$yorumlar=$baglanti->query("SELECT * FROM yorumlar");
                 foreach($yorumlar as $y)
			{
?>
                <div class="media-body span3">
                  <div class="media-content">
				  <br>
                    <h6>   <span> &nbsp;&nbsp;&nbsp;&nbsp;   <?php echo $y["tarih"];?></span></h6>

				   <p>
                     <?php echo $y["k_yorum"];?>
                    </p>
         <div class="kt"><i class="icon-ok-circle arka"></i> <?php echo $y["kt_adi"];?> Kutumuz</div>
                  </div>
                </div>
										   <?php
										   }
										   ?>
              </div>


</div>





      </div>
	   </div>
	  </div>
    </section>





		<br><br><br><br><br><br><br><br>
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
