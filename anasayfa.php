<?php include 'baglan.php';
   require_once ('kutuekle.php');
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
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  <!-- Theme skin -->
  <link href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="image/sayfa_logo.png" />
  <script type="text/javascript">
  $(document).ready(function(){
      $('.chat_icon').click(function(event){
      $('.chat_box ').removeClass('hidden');
      $('.chat_box ').addClass('active');
      })
    $('.kapat').click(function(event){
      $('.chat_box').removeClass('active');
      $('.chat_box').addClass('hidden');
      })
  });
  </script>
</head>
<style>
.chat_icon{
	position:fixed;
	right:30px;
	bottom:0;
	font-size:80px;
	color: #fff;
	cursor:pointer;
	z-index:1000;
}
.chat_box{
	position:fixed;
	right:20px;
	bottom:100px;
	width:400px;
	height:75vh;

	z-index:1000;
	transition:all 0.3s ease-out;
	tansform: scaleY(0);
}
.chat_box.active{
	tansform: scaleY(1);
}
.chat_box.hidden{
  tansform: scaleY(0);
}
hidden{
  display: none;
}
active{
  display: contents;
}
.typing-area{
  padding: 5px 10px;
  display: flex;
  justify-content: space-between;
}
.typing-area input{
  height: 30px;
  width: 200px;
  font-size: 16px;
  padding: 5px 13px;
  border: 1px solid #e6e6e6;
  outline: none;
  border-radius: 5px 0 0 5px;
}
.typing-area button{
  color: #fff;
  width: 20px;
  border: none;
  outline: none;
  background: #333;
  font-size: 19px;
  cursor: pointer;
  opacity: 0.7;
  pointer-events: none;
  border-radius: 0 5px 5px 0;
  transition: all 0.3s ease;
}
.typing-area button.active{
  opacity: 1;
  pointer-events: auto;
}

.chat_box header{
 margin-top:0;
 margin-bottom: 15px;
 padding: 5px 5px 15px 5px;
  background:#26847c87;
}
.wrapper{
    width: 370px;
    background: #fff;
    border-radius: 5px;
    border: 1px solid lightgrey;
    border-top: 0px;
}
.wrapper .title{
    background: #ff0000a3;
    color: #fff;
    font-size: 20px;
    font-weight: 500;
    line-height: 60px;
    text-align: center;
    border-bottom: 1px solid #e96b56;
    border-radius: 5px 5px 0 0;
}
.wrapper .form{
    padding: 20px 15px;
    min-height: 400px;
    max-height: 400px;
    overflow-y: auto;
}
.wrapper .form .inbox{
    width: 100%;
    display: flex;
    align-items: baseline;
}
.wrapper .form .user-inbox{
    justify-content: flex-end;
    margin: 13px 0;
}
.wrapper .form .inbox .icon{
    height: 40px;
    width: 40px;
    color: #fff;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    font-size: 18px;
    background: #488e886b;
}
.wrapper .form .inbox .msg-header{
    max-width: 53%;
    margin-left: 10px;
}
.form .inbox .msg-header p{
    color: #fff;
    background: #488e88;
    border-radius: 10px;
    padding: 8px 10px;
    font-size: 14px;
    word-break: break-all;
}
.form .user-inbox .msg-header p{
    color: #333;
    background: #efefef;
}
.wrapper .typing-field{
    display: flex;
    height: 60px;
    width: 100%;
    align-items: center;
    justify-content: space-evenly;
    background: #efefef;
    border-top: 1px solid #d9d9d9;
    border-radius: 0 0 5px 5px;
}
.wrapper .typing-field .input-data{
    height: 40px;
    width: 335px;
    position: relative;
}
.wrapper .typing-field .input-data input{
    height: 100%;
    width: 95%;
    outline: none;
    border: 1px solid transparent;
    padding: 0 0 0 15px;
    border-radius: 3px;
    font-size: 15px;
    background: #fff;
    transition: all 0.3s ease;
}
.typing-field .input-data input:focus{
    border-color: rgba(0,123,255,0.8);
}
.input-data input::placeholder{
    color: #999999;
    transition: all 0.3s ease;
}
.input-data input:focus::placeholder{
    color: #bfbfbf;
}
.wrapper .typing-field .input-data button{
    position: absolute;
    right: 5px;
    top: 50%;
    height: 30px;
    width: 65px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    outline: none;
    opacity: 0;
    pointer-events: none;
    border-radius: 3px;
    background: #e96b56;;
    border: 1px solid #6e00ffb8;
    transform: translateY(-50%);
    transition: all 0.3s ease;
}
.wrapper .typing-field .input-data input:valid ~ button{
    opacity: 1;
    pointer-events: auto;
}
.typing-field .input-data button:hover{
    background: #006fef;
}

</style>


<body>

  <div class="chat_icon ">
  <i class=" icon-comments" aria-hidden="true"></i>
  </div>
  <div class="chat_box hidden" >
    
   <div class="wrapper">
       <header >
      <form class="head" action="" method="post">
        <p style="color:white; float:left;"><strong>Turkishsnack'e Sor!</strong></p>
        <button style="float:right; background: #cdcddc;
    border-radius: 10px;"type="button"class="kapat" name="button">X</button>
      </form>
    </header>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class=" icon-user"></i>
                </div>
                <div class="msg-header">
                    <p>Merhaba, Size Nasıl Yardımcı Olabilirim?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Mesajınızı yazınız..." required>
                <button id="send-btn">Gönder</button>
            </div>
        </div>
    </div>

  <!--  <?php
    if(isset($_SESSION['giris'])){
      ?><form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $_SESSION['kullanici_adi']; ?>" readonly>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form><?php
    }
    else { ?>

      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="" placeholder="Adınızı Giriniz">
        <input type="text" name="message" class="input-field" placeholder="Mesajınızı buraya yazınız." autocomplete="off">
        <button >Gönder </button>
      </form><?php  } ?>
    -->
  </div>


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
                <li><a style="color:white;" href="sorulanlar.php" data-placement="bottom" ><i class="icon-info-sign icon-white"></i> Yardım & Destek</a></li>
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
                        <li><a href="#eski">Geçmiş Kutularımız</a></li>
                        <li><a href="#fiyat">Aylık Kutularımız</a></li>
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

                      <?php

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
                  <a href="anasayfa.php#fiyat" class="btn btn-info btn-large animated fadeInUp">
											 Şimdi Al
										</a>
                  <a href="hediyekutu.php" class="btn btn-warning btn-large animated fadeInUp">
											 Hediye Et
										</a>
                </div>
                <div class="span6">
                  <img src="image/yenikutular/kutuilk.png" alt="" class="animated bounceInDown delay1" />
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
                  <img src="image/yenikutular/kutuiki.png" alt="" />
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
                     <img src="image/aburcubur.png">
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
                Her ayın belli bir günü yerel posta görevlimiz tarafından kutunuz  teslim edilecektir.
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
                  <h3 id="fiyat"> <strong>Ürünlerimiz Ve Fiyatlarımız</strong></h3>
                </div>
              </div>
            </div>


            <div class="row">

              <div class="span3">
                <div class="pricing-box-wrap animated-fast flyIn">
                  <div class="pricing-heading">
                    <img src="image/yenikutular/kutu5.png">
                  </div> <?php

	          $aylik=$baglanti->query("SELECT * FROM aylik");
				 foreach($aylik as $ay)
			{
				  ?>
				   <form method="post" action="odeme2.php?action=add&id=<?php echo $ay["aylik_id"]; ?>">
                  <div class="pricing-terms">
                    <h6 name="fiyat"> <?php echo $ay["aylik_k_fiyat"]; ?>&#x20BA;  / <?php echo $ay["aylik_k_adi"]; ?></h6>
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
				  <input type="hidden" name="hidden_adi" value="<?php echo $ay["aylik_k_adi"]; ?>" />
                       <input type="hidden" name="hidden_fiyati" value="<?php echo $ay["aylik_k_fiyat"]; ?>" />
                    <input type="submit" name="add_to_kutu" style="margin-top:5px;"class="btn btn-medium btn-theme" value="SEPETE EKLE" />

                  </div>
                </div>
              </div>
			  </form>
			   <?php
			}
				  ?>



              <div class="span3">
                <div class="pricing-box-wrap animated-fast flyIn">
                  <div class="pricing-heading">
                  <img src="image/yenikutular/kutu4.png"></div>
				  <?php

	          $aylik3=$baglanti->query("SELECT * FROM aylik_3");
				 foreach($aylik3 as $ay)
			{
				  ?>

                  <form method="post" action="odeme2.php?action=add&id=<?php echo $ay["aylik_id"]; ?>">
                  <div class="pricing-terms">
                    <h6 name="fiyat"> <?php echo $ay["aylik_k_fiyat"]; ?>&#x20BA;  / <?php echo $ay["aylik_k_adi"]; ?></h6>
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
                 <input type="hidden" name="hidden_adi" value="<?php echo $ay["aylik_k_adi"]; ?>" />
                       <input type="hidden" name="hidden_fiyati" value="<?php echo $ay["aylik_k_fiyat"]; ?>" />
                    <input type="submit" name="add_to_kutu" style="margin-top:5px;"class="btn btn-medium btn-theme" value="SEPETE EKLE" />
                  </div>
                </div>
              </div>
			  </form>
			    <?php
			}
				  ?>

              <div class="span3">
                <div class="pricing-box-wrap special animated-slow flyIn">
                  <div class="pricing-heading">
                    <img src="image/yenikutular/kutu6.png">
                  </div>
				    <?php

	          $aylik6=$baglanti->query("SELECT * FROM aylik_6");
				 foreach($aylik6 as $ay)
			{
				  ?>
                 <form method="post" action="odeme2.php?action=add&id=<?php echo $ay["aylik_id"]; ?>">
                  <div class="pricing-terms">
                    <h6 name="fiyat"> <?php echo $ay["aylik_k_fiyat"]; ?>&#x20BA;  / <?php echo $ay["aylik_k_adi"]; ?></h6>
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
                    <input type="hidden" name="hidden_adi" value="<?php echo $ay["aylik_k_adi"]; ?>" />
                       <input type="hidden" name="hidden_fiyati" value="<?php echo $ay["aylik_k_fiyat"]; ?>" />
                    <input type="submit" name="add_to_kutu" style="margin-top:5px;"class="btn btn-medium btn-theme" value="SEPETE EKLE" />
                  </div>
                </div>
              </div>
			    </form>
			    <?php
			}
				  ?>


              <div class="span3">
                <div class="pricing-box-wrap animated flyIn">
                  <div class="pricing-heading">
                      <img src="image/yenikutular/kutu3.png">
                  </div>
				<?php

	          $yillik=$baglanti->query("SELECT * FROM yillik");
				 foreach($yillik as $yil)
			{
				  ?>
                <form method="post" action="odeme2.php?action=add&id=<?php echo $yil["yillik_id"]; ?>">
                  <div class="pricing-terms">
                    <h6 name="fiyat"> <?php echo $yil["yillik_k_fiyat"]; ?>&#x20BA;  / <?php echo $yil["yillik_k_adi"]; ?></h6>
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
                     <input type="hidden" name="hidden_adi" value="<?php echo $yil["yillik_k_adi"]; ?>" />
                       <input type="hidden" name="hidden_fiyati" value="<?php echo $yil["yillik_k_fiyat"]; ?>" />
                    <input type="submit" name="add_to_kutu" style="margin-top:5px;"class="btn btn-medium btn-theme" value="SEPETE EKLE" />
                  </div>
                </div>
              </div>

			  </form>
			    <?php
			}
				  ?>


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
            <h4 class="title" id="eski"> <strong>Önceki</strong>Kutularımız</h4>
            <div class="row">

              <div class="grid cs-style-4">
                <div class="span3">
                  <div class="item">
                    <figure>
                      <div><img src="image/yenikutular/kutu2.png" alt="" /></div>
                      <figcaption>
                        <div>
                          <span>
                      <a href="icerik.php"><i class="icon-list icon-circled icon-bglight icon-2x"></i></a>
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
                      <div><img src="image/yenikutular/kutu5.png" alt="" /></div>
                      <figcaption>
                        <div>
                          <span>
                      <a href="icerik.php"><i class="icon-list icon-circled icon-bglight icon-2x"></i></a>
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
                      <div><img src="image/yenikutular/kutu1.png" alt="" /></div>
                      <figcaption>
                        <div>
                          <span>
                      <a href="icerik.php"><i class="icon-list icon-circled icon-bglight icon-2x"></i></a>
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
                      <div><img src="image/yenikutular/kutu3.png" alt="" /></div>
                      <figcaption>
                        <div>
                          <span>
                      <a href="icerik.php"><i class="icon-list icon-circled icon-bglight icon-2x"></i></a>
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
  <!--<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>-->


   <script type="text/javascript">
$(document).ready(function(){
  $("#send-btn").on('click',function(){
    $value=$("#data").val();
	<!--var cümle=$value; $deger=cümle.substring(8);-->
	
    $msg='<div class="user-inbox inbox"><div class="msg-header"><p>'+$value+'</p></div></div>';
    $(".form").append($msg);
    $("#data").val('');
    $.ajax({
      url:'message.php',
      type:'POST',
      data:'text='+$value,
      success:function(result){
      $replay='<div class="bot-inbox inbox"><div class="icon"> <i class=" icon-user"></i></div><div class="msg-header"><p>'+result+'</p></div></div>';
      $(".form").append($replay);
	  $(".form").scrollTop($(".form")[0].scrollHeight);
      }
    });

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
