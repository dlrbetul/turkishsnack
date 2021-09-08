<?php
ob_start();
include 'baglan.php';
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
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

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
  .s2{
      width: 77.5px;
    float: left;
    min-height: 1px;
    margin-left: 20px;
  }
    .yorumlar{

	 margin-left:500px;
	 margin-right: 25px;

 }
 .urun_detay{
	 text-align:center;
	 width:800px;


 }
 .orta{
 margin-left:100px;

 }
.sinif {
  border: 2px green solid;
  border-radius: 4px;
  text-align:center;
}
.ss{
  width:100%;
  background-color:#ffffff;
    border: 1px solid #cccccc;
    min-height: 40px;
    padding-left: 20px;
    font-size: 13px;
    padding-right: 20px;
}

  </style>
  <script>
  $(document).ready(function () {
    $("#kupon").click(function(){
      if($('#kod').val()!=''){
        var str=document.getElementById('kod').value;
        var id=$('#id_tut').val();
          var toplam=$('#toplam_tut').val();
        var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(dataResult) {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("indirim").innerHTML = this.responseText;
            }
    };
    xmlhttp.open("GET","odeme_kupon.php?kod="+str+"&id="+id+"&toplam="+toplam,true);
    xmlhttp.send();
    return false;
      }

    });});

  </script>


  <script>
function adres(str) {
  if (str == "") {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","odeme_adres2.php?",true);
    xmlhttp.send();

  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","odeme_adres.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>




</head>

<body style="overflow:visible;"  >

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


                      </ul>
                    </li>
                    <li>
                      <a href="market.php">Market </a>

                    </li>

                   <li>

                      <a href="sepet.php"><i class="icon-shopping-cart "></i> Sepetim </a>

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

<br>

<div class="container">
<div class="span12">
      <div class="row">


  <div class="tabs">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#one" data-toggle="tab"><i class="icon-ok"></i> ADRES VE ÖDEME BİLGİLERİ</a></li>
                  </ul>

                  <div class="tab-content">
                    <div class="tab-pane active" id="one">
                      <ul class="popular">
<div class="col span4 pull-left">
  <div class="span4" style="margin-left:100px">
      <select class="form-select form-select-lg mb-3 ss" aria-label=".form-select-lg example" name="secim" id="secim" onclick="adres(this.value)" >
        <option style="display:none" disabled selected>Yeni adres veya kayıtlı adres için tıklayın</option>
          <option  value="" >Yeni adres</option>
                     <?php
                /*** verileri çekme ***/
                $a=$_SESSION["id"];
               $adres=$baglanti->query("SELECT * FROM adres WHERE kullanici_id=".$a);
             foreach($adres as $k) {
 ?>
                     <option value="<?=$k['baslik']?>"> <?php echo $k["baslik"]; ?></option>
             <?php } ?>
     </select>

     <br>
               </div>
                          <form id="commentform" action="odeme.php" method="post" name="comment-form" class="orta" enctype="multipart/form-data" >
                <div class="row">
                <div style="margin-left:50px;" id="txtHint"></div>
                <br>

				    <br>
				   <div class="span4">
				   <hr>
                     <img src="image/kart.png" class="text-center"/>
                  </div>
                  <div class="span4"><br>
                     <label> &nbsp;&nbsp;Kart Sahibinin Adı Soyadı:  </label> <input type="text" name="kart_isim" />
                  </div>
				    <div class="span8">
		          <label> &nbsp;&nbsp;Kart Numarası:  </label>
              <div class="s2">
                      <input type="text"name="kt_adi"maxlength="4"id="a" class="sinif"/>

                     </div>
              <div class="s2">
                       <input type="text"name="kt_adi" maxlength="4" id="b" class="sinif"/>

                     </div>
              <div class="s2">
                       <input type="text"name="kt_adi" maxlength="4" id="c" class="sinif" />

                     </div>
              <div class="s2">
                       <input type="text"name="kt_adi"maxlength="4" id="d" class="sinif" />

                     </div>
				  </div>
          <div class="span6"style="margin-left:5px;">

           <div class="s2">
              <div class="span6">
                   <label for="expiry-date">Son Kullanma Tarihi:</label>

         </div>
                   <select id="expiry-date" class="ss">
                       <option>Ay</option>
                       <option value="1">01</option>
                       <option value="2">02</option>
                       <option value="3">03</option>
                       <option value="4">04</option>
                       <option value="5">05</option>
                       <option value="6">06</option>
                       <option value="7">07</option>
                       <option value="8">08</option>
                       <option value="9">10</option>
                       <option value="11">11</option>
                       <option value="12">12</option>
                   </select>
                         </div>

         <div class="s2">
         <div class="span6">
                   <label for="expiry-date">  <br>        </label>

         </div>

                    <select id="expiry-date" class="ss">
                       <option>Yıl</option>
                       <option value="2016">16</option>
                       <option value="2017">17</option>
                       <option value="2018">18</option>
                       <option value="2019">19</option>
                       <option value="2020">20</option>
                       <option value="2021">21</option>
                       <option value="2022">22</option>
                       <option value="2023">23</option>
                       <option value="2024">24</option>
                       <option value="2025">25</option>
                       <option value="2026">26</option>
                       <option value="2027">27</option>
                       <option value="2028">28</option>
                       <option value="2029">29</option>
                       <option value="2030">30</option>
                   </select>
             </div>
                      <div class="span2"  >
                         <label> CVV:  </label>
                                   <input type="text"name="kt_adi" maxlength="3" placeholder="***"  />
                     </div>
        </div>






</div>
</div>

<div class="col span4 pull-right" style="margin-right:120px;">
  <div class="widget">
  <div class="tabs">
            <ul>

                       <li class="item-thumbs span4 dev" data-id="id-4" data-type="dev">
                <div class="team-box thumbnail">

                  <div>
                    <h5>SİPARİŞ ÖZETİ</h5>
                    <hr>
                    <div class="table-responsive">
                         <table class="table table-dark">
                    <tr>
                       <div>  <th >ÜRÜN ADI</th>  </div>
                         <th>ADET</th>
                         <th >TOPLAM FİYAT</th>
                    </tr>
        <?php

                      $total = 0;
                      foreach($_SESSION["shopping_cart"] as $keys => $values)
                      {
        ?>
                 <tr>
                      <td><?php echo $values["item_name"]; ?></td>
                      <td><?php echo $values["item_quantity"]; ?></td>
                     <td> <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?> ₺</td>
                 </tr>
                 <?php
                           $total = $total + ($values["item_quantity"] * $values["item_price"]);
                      }
                 ?>
  </table>
  </div>


          <p>
                     ÜRÜN TOPLAMI:<h2><?php echo "$total"; ?>₺</h2>
                     <input type="hidden" id="toplam_tut" value="<?php echo $total;?>">
                            <span id="indirim"></span>

                    </p>
        <hr>
                <div class="input-append">
                <!--  <input  class="span2 input-small" id="kod" name="kod" type="text" placeholder="*İndirim Kuponu" >-->
      <input type="text" class="span2 input-small" id="kod"  placeholder="*İndirim Kuponu" name="kod">
    <input type="hidden" id="id_tut" value="<?php echo $_SESSION['id'];?>">
                  <button id="kupon" type="button"class="btn btn-theme btn-small">KULLAN</button>
                  <!--<input  type="submit" value="KULLAN" name="kupon" id="kupon" onclick="showHint(document.getElementsByName('kod')[0].value);return false;">-->

                  <div>

                      <span id="kuponmsg" style="color:#d92727; margin-left:-66px;"></span>
                  </div>
                </div>
        <hr>
                 <button class="btn btn-theme btn-medium margintop10" type="submit" name="paylas"> SİPARİŞİ TAMAMLA</button>

                  </div>
                </div>
              </li>

                </ul>
              </div>
            </div>


</div>

</form>

   </ul>
                    </div>

                  </div>
                </div>
              </div>
 </div>

 <?php
  if(isset($_POST["paylas"]))
 {
   $total = 0;

   foreach($_SESSION["shopping_cart"] as $keys => $values)
   {
	$total = $total + ($values["item_quantity"] * $values["item_price"]);
   }
   if ($_SESSION["indirimli_fiyat"]!=NULL) {
        $total=$_SESSION["indirimli_fiyat"];
          $kupon_id=$_SESSION["kupon_id"];
          $kid=$_SESSION["id"];
          $ekle="INSERT INTO `kullanilan_kupon` (`id`, `kullanici_id`, `kupon_id`) VALUES (NULL, '$kid', '$kupon_id');";
          $basarili=$baglanti->query($ekle)or die($baglanti->error);
   }


    $userid=$_SESSION["id"];
   $ad=$_POST["isim"];
   $tel=$_POST["adres_tel"];
     $adres=$_POST["adres"];
   $adresbas=$_POST["adres_bas"];
   $odeme="kredi kart";
   $durum="siparişiniz alındı";
 $sql="INSERT INTO `siparis` (`order_id`, `kullanici_id`, `alici_adisoyadi`, `telefon`, `adres_baslik`, `adres`, `toplam`,`odeme_tipi`,`durum`)
 VALUES (NULL, '.$userid.',
   '$ad',
 '$tel',
 '$adresbas',
 '$adres',
 '$total','$odeme','$durum');";

 $sonuc=$baglanti->query($sql)or die($baglanti->error);
 $id=$baglanti->insert_id;
 foreach($_SESSION["shopping_cart"] as $keys => $values)
 {
 $F_ID=$values["item_id"];
 $price=$values["item_price"];
 $quantity=$values["item_quantity"];
 $sql="INSERT INTO `siparis_detay` (`siparis_id`,`order_id`, `urun_id`, `urun_fiyati`, `urun_adedi`) VALUES (NULL,'$id', '$F_ID', '$price', '$quantity')";

 $success = $baglanti->query($sql);
 if ($success===true){
  header("Location:onaylandi.php");
 }
 else{
 echo '<script>alert("Kayıt edilemedi!!")';
 }
   }
 }
 ?>
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

</body>
</html>
<?php
ob_end_flush();
?>
