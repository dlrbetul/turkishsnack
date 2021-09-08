<?php
session_start();
ob_start();
session_destroy();
header("Refresh:2; url=anasayfa.php");
ob_end_flush();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Turkishsnack Çıkış</title>
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" /> 
  <link href="css/style.css" rel="stylesheet" />
  
 <link href="css/shortcode.css" rel="stylesheet" />
  <link href="css/overwrite.css" rel="stylesheet" />
  
  
</head>

<body>
<section id="content">
      <div class="container">



        <div class="row">
          <div class="span12">
            <div class="aligncenter">
              <i class="icon-circled icon-bgwarning icon-time icon-4x"></i>
            </div>
            <div class="blankline30"></div>
            <h3 style="font-size:24px;" class="aligncenter">Çıkış Yaptınız.Anasayfaya Yönlendiriliyosunuz.</h3>
            <p class="aligncenter">Bizi tercih ettiğiniz için teşekkür ederiz.Kendinizi lezzetli atıştırmalıklarla ödüllendirmek isterseniz yine bekleriz.İyi Günler!!</p>
          </div>

        </div>



      </div>
    </section>

</body>
</html>