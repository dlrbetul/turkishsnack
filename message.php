<?php
include 'baglan.php';

$getMesg = mysqli_real_escape_string($baglanti, $_POST['text']);
$check_data = "SELECT cevaplar FROM chatbot WHERE sorgular LIKE '%$getMesg%'";
$run_query = mysqli_query($baglanti, $check_data) or die("Error");

if(mysqli_num_rows($run_query)>0){
    $fetch_data = mysqli_fetch_assoc($run_query);
    $replay = $fetch_data['cevaplar'];
    echo $replay;
}else{
    echo "Üzgünüm,Seni anlayamadım :(";
}

?>
