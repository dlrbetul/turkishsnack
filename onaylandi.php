<?php
session_start();
ob_start();
unset($_SESSION["shopping_cart"]);
unset($_SESSION["indirimli_fiyat"]);
unset($_SESSION["kupon_id"]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Turkishsnack Çıkış</title>
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />

  <link href="css/overwrite.css" rel="stylesheet" />

<style media="screen">
  .renk{
  background: #faf788;
  border-color:#faf788;
}
.renk:hover {
  background: #f7780b;
  border-color:#f7780b;
}
.renk:active,.renk:focus{
  background: #f7780b;
  border-color:#f7780b;
}
  }
</style>
</head>

<body>
<section id="content">
      <div class="container">



        <div class="row">
          <div class="span12">
            <div class="aligncenter">
              <i class="icon-circled icon-bgsuccess icon-check icon-4x"></i>
            </div>
            <div class="blankline30"></div>
            <h3 style="font-size:36px; color:green;" class="aligncenter">Merhaba <?=$_SESSION["kullanici_adi"]?>,Siparişin Başarıyla Alınmıştır.</h3>
            <p class="aligncenter">Bizi tercih ettiğin için teşekkür ederiz.Kendini lezzetli atıştırmalıklarla ödüllendirmek istersen yine bekleriz.İyi Günler!!</p>
          </div>
          <div class="aligncenter">
            <button class="aligncenter btn-medium renk" type="button" ><a href="anasayfa.php">Anasayfaya Dön</a></button>
          </div>
        </div>
        <div class="aligncenter">
          <img  style="width:100%"src="image/siparis.gif" alt="">
        </div>


      </div>
    </section>

</body>
</html>
<?php ob_end_flush();
 ?>
