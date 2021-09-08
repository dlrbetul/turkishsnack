<?php
 $connect = mysqli_connect("localhost", "root", "", "turkishsnack");
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
.renk{
  background-color:rgba(255,0,0,0.4);
  color:white;
}
h3{
  display: block;
  font-size: 2em;
  margin-top:88px;
  margin-left: 0;
  margin-right: 0;
  font-weight: bold;
}
#en_cok_satilan{
  background-image: linear-gradient(to right, rgba(255,0,0,0.1), rgba(210,0,0,0.5));
    margin-left:5%;
  margin-right:5%;
  text-align: center;
    margin-bottom: 20px;

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
	width:50px;
}
.img-fluid {
    max-width:100%;
    height:auto;
    max-height:250px;
    min-height:250px;

    border-style: none;
}
.encok{
  padding-top:20px;
  color: black;
    text-transform:uppercase;
    font-family: cursive;


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
					  </a>
                    </li>
					 <li>  <?php

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

	<section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <ul class="breadcrumb">
                <li><a href="anasayfa.php">Anasayfa</a> <i class="icon-angle-right"></i></li>
                <li><a href="market.php">Market</a> <i class="icon-angle-right"></i></li>
                <li class="active">Ürünlerimiz</li>
              </ul>
              <h2>ÜRÜNLERİMİZ</h2>
            </div>
          </div>
        </div>
      </div>
	   </section>


<section id="en_cok_satilan">
  <div class="container ">
    <div class="row">
      <div class="span10" style="column-count:3">
                <?php
                $Fiyat=$connect->query("SELECT * From urunleri INNER JOIN( SELECT urun_id,SUM(urun_adedi) AS t FROM siparis_detay GROUP BY urun_id ORDER By SUM(urun_adedi) DESC LIMIT 1) siparis_detay ON urunleri.id=siparis_detay.urun_id");
/*  $kactane=$connect->query("SELECT * From urunleri INNER JOIN( SELECT urun_id,SUM(urun_adedi) AS t FROM siparis_detay GROUP BY urun_id ORDER By SUM(urun_adedi)) siparis_detay ON urunleri.id=siparis_detay.urun_id");
  foreach ($kactane as $a) {
echo $a['urun_id'];
echo "-";
echo $a['t'];
echo "--";
echo $a['urun_adi'];
echo " ";
}*/
             foreach($Fiyat as $fyt)
                 {?>

                        <form method="post" action="market.php?action=add&id=<?php echo $fyt["id"]; ?>">
                                <h3 style="font-family: cursive; margin-top: 50px;"> <image  src="image/buy.png"style="margin-bottom: 20px;"> <br> En Çok Satılan Ürün </h3>
                                 <img src="image/<?php echo $fyt["img_url"]; ?>" class="img-fluid" style=" margin-top:10px;  border-radius: 50%; width:200px;height: 200px; " />

                                 <h4 class="text-info encok "><b><?php echo $fyt["urun_adi"]; ?></b></h4>
                                 <h4 class="text-danger encok"> <b><?php echo $fyt["urun_fiyat"]; ?> TL </b></h4>
                                <select class="form-control sekil" name="quantity">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  </select>
                                 <input type="hidden" name="hidden_name" value="<?php echo $fyt["urun_adi"]; ?>" />
                                 <input type="hidden" name="hidden_price" value="<?php echo $fyt["urun_fiyat"]; ?>" />

                  <br>
                                 <input type="submit" name="add_to_cart" style="margin-top:5px;"class="btn btn-medium renk" value="SEPETE EKLE" />


                  </form>

<?php } ?>
      </div>
    </div>
  </div>
</section>






  <section id="content">
     <div class="container">
       <div class="row">
         <div class="span3"style="width:190px;">
           <aside class="left-sidebar">
             <div class="widget">

               <h4 class="widgetheading"><i class="icon-list-ul"></i> Kategoriler</h4>
               <ul style="margin-left:2px;">
               <i class="icon-angle-right"></i> <a type="submit" name="ktg" href="market.php"><b>Hepsi</b></a>
               </ul>

               <?php
               $kategori=$connect->query("SELECT * FROM kategori");
         foreach($kategori as $ktg)
         { ?>
         <ul class="cat">
<form method="get">
         <li><i class="icon-angle-right"></i> <a type="submit" name="ktg" href="market.php?kt_id=<?php echo $ktg["ktg_id"]; ?>"><b> <?php echo $ktg["ktg_adi"] ?></b></a></li>
         <?php }?>
</form>
         </ul>
         </div>
         </aside>
         </div>

       <?php

       if (isset($_GET["kt_id"])) { ?>
         <div class="span10">
           <div class="row">
        <?php
        $id=$_GET["kt_id"];
               $query = "SELECT * FROM urunleri where ktg_id=".$id;
               $result = mysqli_query($connect, $query);
               if(mysqli_num_rows($result) > 0)
               {
                    while($row = mysqli_fetch_array($result))
                    {
               ?>

                    <div class="col-sm-6 col-md-3">
             <section id="team">
               <ul id="thumbs" class="team">
        <li class="item-thumbs span3 dev" data-id="id-1" data-type="dev">
                   <div class="team-box thumbnail"style="width: 200px;
       height: 450px;">
                     <form method="post" action="market.php?action=add&id=<?php echo $row["id"]; ?>">

                              <img src="image/<?php echo $row["img_url"]; ?>" class="img-fluid" style="width:200px;height: 200px" /><br />
                              <h5 class="text-info"><?php echo $row["urun_adi"]; ?></h5>
                              <h4 class="text-danger"> <?php echo $row["urun_fiyat"]; ?>TL</h4>
                             <select class="form-control sekil" name="quantity">
       <option>1</option>
       <option>2</option>
       <option>3</option>
       <option>4</option>
       <option>5</option>
       </select>
                              <input type="hidden" name="hidden_name" value="<?php echo $row["urun_adi"]; ?>" />
                              <input type="hidden" name="hidden_price" value="<?php echo $row["urun_fiyat"]; ?>" />

                <br>
                              <input type="submit" name="add_to_cart" style="margin-top:5px;"class="btn btn-medium btn-theme" value="SEPETE EKLE" />


       </form>
                   </div>
                 </li>


             </section>
       </div>
<?php }}?>
           </div>
         </div>
       <?php  } else { ?>
         <div class="span10">

                 <div class="clearfix"></div>
                 <div class="row">

     			<?php
                     $query = "SELECT * FROM urunleri";
                     $result = mysqli_query($connect, $query);
                     if(mysqli_num_rows($result) > 0)
                     {
                          while($row = mysqli_fetch_array($result))
                          {
                     ?>        <div class="col-sm-6 col-md-3">
                   <section id="team">
                     <ul id="thumbs" class="team">
     				 <li class="item-thumbs span3 dev" data-id="id-1" data-type="dev">
                         <div class="team-box thumbnail"style="width: 200px;
             height: 450px;">
                           <form method="post" action="market.php?action=add&id=<?php echo $row["id"]; ?>">

                                    <img src="image/<?php echo $row["img_url"]; ?>" class="img-fluid" style="width:200px;height: 200px" /><br />
                                    <h5 class="text-info"><?php echo $row["urun_adi"]; ?></h5>
                                    <h4 class="text-danger"> <?php echo $row["urun_fiyat"]; ?>TL</h4>
                                   <select class="form-control sekil" name="quantity">
           <option>1</option>
           <option>2</option>
           <option>3</option>
           <option>4</option>
           <option>5</option>
         </select>
                                    <input type="hidden" name="hidden_name" value="<?php echo $row["urun_adi"]; ?>" />
                                    <input type="hidden" name="hidden_price" value="<?php echo $row["urun_fiyat"]; ?>" />

     							   <br>
                                    <input type="submit" name="add_to_cart" style="margin-top:5px;"class="btn btn-medium btn-theme" value="SEPETE EKLE" />


     </form>
                         </div>
                       </li>


                   </section>
     			  </div>
     				<?php } }?>

                 </div>
               </div>


    <?php   } ?>
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
