<?php
include 'baglan.php';
session_start();
$kullanici_id=$_GET['kid'];
$yonetici_id=$_GET['yid'];
$output = "";
$_SESSION["gelen_id"]=$yonetici_id;
 $sorgu="SELECT *  FROM `chat_detay`
inner join `chat` on `chat_detay`.`chat_id`=`chat`.`id` WHERE (`chat`.`k_id` = $kullanici_id AND `chat`.`y_id` = $yonetici_id)
  OR (`chat`.`k_id` = {$yonetici_id} AND  `chat`.`y_id` = $kullanici_id) ORDER BY  `chat_detay`.`id`" ;
$query = mysqli_query($baglanti, $sorgu);
$k="SELECT * FROM yonetici WHERE yonetici_id=".$yonetici_id;
$query2 = mysqli_query($baglanti, $k);
$row2 = mysqli_fetch_assoc($query2);
if(mysqli_num_rows($query2) > 0){


  echo  '<p style="font-weight:bold;  text-transform: uppercase;"> YÖNETİCİ : '.$row2['yonetici_adi'].'</p><hr>';

}


if(mysqli_num_rows($query) > 0){
    while($row = mysqli_fetch_assoc($query)){
        if($row['k_id'] === $kullanici_id){
            $output .='
                <div class="outgoing_msg">
                  <div class="sent_msg">
                    <p>'.$row['msg'].'</p>
                    <span class="time_date">'.$row['date'].'</span> </div>
                </div>
            ';
        }else{
            $output .='
     <div class="incoming_msg">
       <div class="incoming_msg_img"> <img src="image/profil.png" alt="sunil"> </div>
       <div class="received_msg">
         <div class="received_withd_msg">
           <p>'.$row['msg'].'</p>
           <span class="time_date">'.$row['date'].'</span></div>
       </div>
     </div>
  ';
        }
    }
}else{
    $output .= '<div class="text">Mesajınız yok.Gönderildikten sonra gözükecek.</div>';
}
echo "<div class='msg_history'>";
echo $output;
echo "</div>";
echo "<form action='#' class=''>
<div class='type_msg'>
<div class='input_msg_write'>
  <input type='hidden' class='incoming_id' name='incoming_id' value='$yonetici_id' >
  <input type='text' id='message' name='message' class='write_msg'  placeholder='Mesajınızı giriniz...' />
  <button class='msg_send_btn' name='gonder' type='button'  onclick='window.location.reload(false)'><i class='fa fa-paper-plane' aria-hidden='true' onclick='msg_ekle($yonetici_id);'></i></button>
</div>
</div>
   </form>";
   ?>
