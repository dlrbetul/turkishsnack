<?php
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
#cart_count{
	text-align:center;
	padding:0 0.5rem 0.1rem 0.5rem;
    border-radius:3rem;
	background-color:#e96b56;
	color:white;
}
.sekil{
	text-align:center;
	width:40px;
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
                      <a href="market.php">Market </a>

                    </li>

                   <li>
                      <div class="dropdown">
  <a href="rs_sepet.php" class="btn  dropdown-toggle  " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                               <td> <?php echo number_format( ($values["item_quantity"] * $values["item_price"]), 2); ?> TL</td>

                          </tr>
                          <?php
                                    $total =  $total + ($values["item_quantity"] * $values["item_price"]);
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
					 <li>            <?php

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
		<?php
	 /*** verileri çekme ***/
	$rastgelekutu=$baglanti->query("SELECT * FROM rastgelekutu");


	?>
	 <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
              <ul class="breadcrumb">
                <li><a href="anasayfa.php">Anasayfa</a> <i class="icon-angle-right"></i></li>
                <li class="active">Rastgele Kutularımız</li>
              </ul>
              <h2>SİZE ÖZEL KUTULARIMIZ</h2>
            </div>
          </div>
        </div>
      </div>
	   </section>
	 <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">

           <ul class="team-categ filter">
            <div class="alert alert-danger " role="alert">

         <h4> <image src="image/snack.png"><strong>&nbsp;Hoşgeldiniz</strong>  </h4>
      <br>
			İstediğiniz Sayıda Üründen Oluşacak Olan Kutunuz İçin Ürün Sayısı Belirleyiniz.
			<br>
			Maksimum 6 Adet Ürün Sipariş Verebilirsiniz. Kargosu Bizden :)
        </div>

            </ul>




            <div class="clearfix"></div>
            <div class="row">
			<?php foreach($rastgelekutu as $rskutu)
			{
?>       <div class="col-sm-6 col-md-3">
              <section id="team">
                <ul id="thumbs" class="team">
				 <li class="item-thumbs span3 dev" data-id="id-1" data-type="dev">
                    <div class="team-box thumbnail">
					 <form method="post" action="rastgele_kutu.php?action=add&id=<?php echo $rskutu["id"]; ?>">

                      <img src ="image/kuturast/<?php echo $rskutu["img_url"];?>" alt="<?php echo $rskutu["rs_kutu_adi"];?>" >
                      <div class="caption">
                        <h5><?php echo $rskutu["rs_kutu_adi"];

						?></h5>

                        <p>
                         <?php echo $rskutu["detay"]; ?>
                        </p><hr>
						 Ürün Sayısı:<br>
						 <select class="form-control sekil" id="exampleFormControlSelect1" name="quantity">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
	   <option>6</option>
    </select>
						<p><hr>
						Adet Fiyatı:
                          <strong><?php echo $rskutu["rs_fiyat"]; ?></strong>  TL
                        </p>
						<input type="hidden" name="hidden_name" value="<?php echo $rskutu["rs_kutu_adi"]; ?>" />
                       <input type="hidden" name="hidden_price" value="<?php echo $rskutu["rs_fiyat"]; ?>" />
                         <input type="submit" name="add_to_cart" style="margin-top:5px;"class="btn btn-medium btn-theme" value="SEPETE EKLE" />
                      </div>
					  </form>
                    </div>
                  </li>


              </section>
			  </div>
			<?php
} ?>

            </div>
          </div>
        </div>

	  </div>

    </section>
<?php


?>
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

 $(document).ready(function(){

 $("#kutu_sec").click(function(){

	alert();
});
});

</script>

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
