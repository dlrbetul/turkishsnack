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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/prettyPhoto.css" rel="stylesheet" />
  <link href="css/camera.css" rel="stylesheet" />
  <link href="css/jquery.bxslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>

  <!-- Theme skin -->
  <link href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="image/sayfa_logo.png" />
<style media="screen">

<style media="screen">

img{ max-width:100%;}
.inbox_people {
  background: #f8f8f8 none repeat scroll 0 0;
  float: left;
  overflow: hidden;
  width: 40%; border-right:1px solid #c4c4c4;
}
.inbox_msg {
  border: 1px solid #c4c4c4;
  clear: both;
  overflow: hidden;
}
.top_spac{ margin: 20px 0 0;}


.recent_heading {float: left; width:40%;}

.headind_srch{ padding:10px 29px 10px 20px; overflow:hidden; border-bottom:1px solid #c4c4c4;}

.recent_heading h4 {
  color: #05728f;
  font-size: 21px;
  margin: auto;
}


.chat_ib h5{ font-size:15px; color:#464646; margin:0 0 8px 0;}
.chat_ib h5 span{ font-size:13px; float:right;}
.chat_ib p{ font-size:14px; color:#989898; margin:auto}
.chat_img {
  float: left;
  width: 11%;
}
.chat_ib {
  float: left;
  padding: 0 0 0 15px;
  width: 88%;
}

.chat_people{ overflow:hidden; clear:both;}
.chat_list {
  border-bottom: 1px solid #c4c4c4;
  margin: 0;
  padding: 18px 16px 10px;
}
.inbox_chat { height: 550px; overflow-y: scroll;}

.active_chat{ background:#ebebeb;}

.incoming_msg_img {
  display: inline-block;
  width: 6%;
}
.received_msg {
  display: inline-block;
  padding: 0 0 0 10px;
  vertical-align: top;
  width: 92%;
 }
 .received_withd_msg p {
  background: #ebebeb none repeat scroll 0 0;
  border-radius: 3px;
  color: #646464;
  font-size: 14px;
  margin: 0;
  padding: 5px 10px 5px 12px;
  width: 100%;
}
.time_date {
  color: #747474;
  display: block;
  font-size: 12px;
  margin: 8px 0 0;
}
.received_withd_msg { width: 57%;}
.mesgs {
  float: left;
  padding: 30px 15px 0 25px;
  width: 54%;
}

 .sent_msg p {
  background: #05728f none repeat scroll 0 0;
  border-radius: 2px;
  font-size: 14px;
  margin: 0; color:#fff;
  padding: 5px 10px 5px 12px;
  width:100%;
}
.outgoing_msg{ overflow:hidden; margin:26px 0 26px;}
.sent_msg {
  float: right;
  width: 46%;
}
.input_msg_write input {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  color: #4c4c4c;
  font-size: 15px;
  min-height: 48px;
  width: 100%;
}

.type_msg {border-top: 1px solid #c4c4c4;position: relative;}
.msg_send_btn {
  background: #05728f none repeat scroll 0 0;
  border: medium none;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  font-size: 17px;
  height: 33px;
  position: absolute;
  right: 0;
  top: 11px;
  width: 33px;
}
.messaging { padding: 0 0 50px 0;}
.msg_history {
  height: 520px;
  overflow-y: auto;
}




</style>

</style>
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
    <body>

      <div style="width:1170px;margin:auto; margin-top:20px;">
      <h3 class=" text-center">Turkishsnack'e Sor!</h3>
      <div class="messaging">
            <div class="inbox_msg">
              <div class="inbox_people">
                <div class="headind_srch">
                  <div class="recent_heading">
                    <h4>Gelen Mesajlar</h4>
                    <?php
                    $a=$_SESSION["kullanici_adi"];

                    $yntc=$baglanti->query("SELECT * FROM kullanici WHERE kullanici_adi='$a'");

                    foreach($yntc as $row)
                    {
                      $_SESSION["id"]=$row["kullanici_id"];
                    }
                    if(!isset($_SESSION['giris']))
                    {


                     header('location:uyegirisi.php');
                    }
                    ?>
                      <input type="hidden" id="kid_tut"  value="<?php echo $_SESSION['id'];?>">
                  </div>
                </div>
                <div class="inbox_chat">

                  <?php

                $klnc=$baglanti->query("SELECT * FROM yonetici");
                foreach($klnc as $row)
                {
                  ?>
                  <div  class="chat_list " id="<?php echo $row["yonetici_id"] ?>" onclick="chat(this.id)">
                    <input type="hidden" id="yid_tut" value="<?php echo $row["yonetici_id"] ?>">
                    <div class="chat_people">
                      <div class="chat_img"> <img src="image/profil.png" > </div>
                      <div class="chat_ib">

                        <h5><?php echo $row["yonetici_adi"] ?>
                        <p>
                          <?php
                          $data="";
                          $sql2 ="SELECT *  FROM `chat_detay`
                         inner join `chat` on `chat_detay`.`chat_id`=`chat`.`id` WHERE (`chat`.`k_id` =".$_SESSION["id"]." AND `chat`.`y_id` =".$row["yonetici_id"].")
                           OR (`chat`.`k_id` =".$row["yonetici_id"]." AND  `chat`.`y_id` =".$_SESSION["id"].") ORDER BY  `chat_detay`.`id` DESC LIMIT 1" ;
                          $query2 = mysqli_query($baglanti, $sql2);
                          $row2 = mysqli_fetch_assoc($query2);
                          (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result ="mesaj yok";
                          (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
                          if(isset($row2['k_id'])){
                              ($_SESSION['id'] == $row2['k_id']) ? $sen = "Siz: " : $sen= "";
                          }else{
                              $sen = "";
                          }
                          $data .= '<p>'. $sen . $msg .'</p>';
                      echo $data;
                          ?>
                        </p>
                      </div>
                    </div>
                  </div>
                <?php } ?>
                </div>
              </div>
              <div class="mesgs">

                <p></p>
            <span id="chat_details"></span>
               </div>








            </div>
          </div></div>





    </body>


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
  function chat(yid){
      var kid=document.getElementById("kid_tut").value;

      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("chat_details").innerHTML = this.responseText;

        }
      };
      xmlhttp.open("GET","chat_details.php?kid="+kid+"&yid="+yid,true);

      xmlhttp.send();
  }

  </script>
  <script>
  function msg_ekle(incoming_id){
    var message=document.getElementById("message").value;
    div = document.querySelector(".chat_details");
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
      if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {
        if (message=== "") {
          alert("boş bırakmayınız");
        }
          document.getElementById("chat_details").scrollTop =   document.getElementById("chat_details").scrollHeight;
          setInterval(chat(incoming_id),500);
          clearInterval(myVar);
      }
    };
    xmlhttp.open("GET", "chat_ekleme.php?incoming_id="+incoming_id+"&message="+message, true);
    xmlhttp.send();
    }

  </script>
  <script>
  
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
