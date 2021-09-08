<?php
ob_start();
 include 'baglan.php';
session_start();

 ?>
 <!DOCTYPE html>
 <html lang="en">
     <head>
         <meta charset="utf-8" />
         <meta http-equiv="X-UA-Compatible" content="IE=edge" />
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
         <meta name="description" content="" />
         <meta name="author" content="" />
         <title>Turkishsnack-Yönetici</title>
         <link href="css/ystyles.css" rel="stylesheet" />

         <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet"
         <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
         <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
         <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

         <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
<style media="screen">

.container{max-width:1170px; margin:auto;}
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
  width: 60%;
}

 .sent_msg p {
  background: #05728f none repeat scroll 0 0;
  border-radius: 3px;
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
     </head>
     <body class="sb-nav-fixed" >
         <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
             <a class="navbar-brand" href="index.html">Turkishsnack</a>
             <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
             <!-- Navbar Search-->

             <!-- Navbar-->
             <ul class="navbar-nav ml-auto ml-md-8">
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                         <a class="dropdown-item" href="yoneticigiris.php">Çıkış</a>
                     </div>
                 </li>
             </ul>
         </nav>
         <div id="layoutSidenav" >
             <div id="layoutSidenav_nav">
                 <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                     <div class="sb-sidenav-menu">
                         <div class="nav">
                             <div class="sb-sidenav-menu-heading">Güncelleme</div>
                             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                 <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tablolar
                                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                             </a>
                             <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                 <nav class="sb-sidenav-menu-nested nav">
                                     <a class="nav-link" href="yonetici.php">Ürünler Tablosu</a>
                                     <a class="nav-link" href="#">Sipariş Tablosu</a>
                                     <a class="nav-link" href="yoneticiekle.php">Yönetici Tablosu</a>
                                 </nav>
                             </div>
                             <a class="nav-link collapsed" href="yoneticiekle.php" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                 <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                 Yönetici Ekle
                             </a>
                             <div class="sb-sidenav-menu-heading">Abonelikler</div>
                             <a class="nav-link" href="abone.php">
                                 <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                 Aylık Kutular Tablosu
                             </a>
                             <div class="sb-sidenav-menu-heading">Mesajlar</div>
                             <a class="nav-link" href="yonetici_chat.php">
                                 <div class="sb-nav-link-icon"><i class="far fa-comments"></i></div>
                                Chat
                             </a>
                         </div>
                     </div>
                   <div class="sb-sidenav-footer">
                         <div class="small"></div>
                          <?php
                                   if(isset($_SESSION['login'])){
                                       echo 'Giriş <strong>'.$_SESSION["yonetici_adi"].'</strong> tarafından yapıldı.';
                                               }
                                               else {
                                                header('Location:yoneticigiris.php');
                                             }
                                               ?>
                     </div>
                 </nav>
             </div>
             <?php

                $a=$_SESSION["yonetici_adi"];

                $yntc=$baglanti->query("SELECT * FROM yonetici WHERE yonetici_adi='$a'");

                foreach($yntc as $row)
                {
                  $_SESSION["yonetici_id"]=$row["yonetici_id"];
                }

             ?>
             <div id="layoutSidenav_content">
                 <main style="margin:20px;" >
                   <div style="width:1170px;margin:auto; margin-top:20px;">
                   <h3 class=" text-center">Turkishsnack'e Sorulanlar!</h3>
                   <div class="messaging">
                         <div class="inbox_msg">
                           <div class="inbox_people">
                             <div class="headind_srch">
                               <div class="recent_heading">
                                 <h4>Gelen Mesajlar</h4>
                                   <input type="hidden" id="kid_tut"  value="<?php echo $_SESSION['yonetici_id'];?>">

                               </div>
                             </div>
                             <div class="inbox_chat">

                               <?php

                             $klnc=$baglanti->query("SELECT * FROM kullanici");
                             foreach($klnc as $row)
                             {
                               ?>
                                 <div  class="chat_list " id="<?php echo $row["kullanici_id"] ?>" onclick="chat(this.id)">
                                   <input type="hidden" id="yid_tut" value="<?php echo $row["kullanici_id"] ?>">
                                 <div class="chat_people">
                                   <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                   <div class="chat_ib">
                                     <h5><?php echo $row["kullanici_adi"] ?>
                                       <p>
                                         <?php
                                         $data="";
                                         $sql2 ="SELECT *  FROM `chat_detay`
                                        inner join `chat` on `chat_detay`.`chat_id`=`chat`.`id` WHERE (`chat`.`k_id` =".$_SESSION["yonetici_id"]." AND `chat`.`y_id` =".$row["kullanici_id"].")
                                          OR (`chat`.`k_id` =".$row["kullanici_id"]." AND  `chat`.`y_id` =".$_SESSION["yonetici_id"].") ORDER BY  `chat_detay`.`id` DESC LIMIT 1" ;
                                         $query2 = mysqli_query($baglanti, $sql2);
                                         $row2 = mysqli_fetch_assoc($query2);
                                         (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result =" Mesaj yok ";
                                         (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
                                         if(isset($row2['k_id'])){
                                             ($_SESSION['yonetici_id'] == $row2['k_id']) ? $sen = "Siz: " : $sen= "";
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

                             <?php }?>
                             </div>
                           </div>
                           <div class="mesgs">

                             <p></p>
                                 <span id="chat_details"></span>
                            </div>
                         </div>
                       </div></div>







                 </main>
                 <footer class="py-4 bg-light mt-auto">
                     <div class="container-fluid">
                         <div class="d-flex align-items-center justify-content-between small">
                              <div class="text-muted "> &copy; turkishsnack Tic.A.Ş. Bütün hakları saklıdır.</div>
                         </div>
                     </div>
                 </footer>
             </div>
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
         xmlhttp.open("GET","ychat_detay.php?kid="+kid+"&yid="+yid,true);
         xmlhttp.send();
     }

     </script>
     <script>
     function msg_ekle(incoming_id){
       var message=document.getElementById("message").value;
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onload = function() {
         if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {
           if (message=== "") {
             alert("boş bırakmayınız");
           }
             document.getElementById("chat_details").scrollTop =   document.getElementById("chat_details").scrollHeight;
             setTimeout(chat(incoming_id,500));
         }
       };
       xmlhttp.open("GET", "ychat_ekleme.php?incoming_id="+incoming_id+"&message="+message, true);
       xmlhttp.send();
       }

     </script>
         <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/yscripts.js"></script>
          <script src="js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>



     </body>
 </html>
<?php  ob_end_flush(); ?>
