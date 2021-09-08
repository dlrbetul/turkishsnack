<?php
include('baglan.php');
ob_start();
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
        <title>Page Title - SB Admin</title>
        <link href="css/ystyles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <style>
          body{
        background-image: url("image/arkaplan_cake.jpg");
          }
        </style>
    </head>
    <body>
      <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4"><image src="image/snack.png">Yönetici Girişi</h3></div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">E-posta</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="email" name="y_eposta" placeholder="Epostanızı giriniz." required/>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Şifre</label>
                                                <input class="form-control py-4" id="inputPassword" type="password" name="y_sifre" placeholder="Şifrenizi giriniz."required />
                                                <span id="sifremsj" style="color:#d92727; margin-left:8px;"></span>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                 <button class="btn btn-primary "  name="buton">Giriş Yap</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-3 bg-light mt-auto">
                    <div class="container-fluid ">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted "> &copy; turkishsnack Tic.A.Ş. Bütün hakları saklıdır.</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <?php
      if (isset($_POST['buton'])) {
          $y_eposta=$_POST["y_eposta"];
          $y_sifre=$_POST["y_sifre"];
          $sorgu="SELECT * FROM yonetici WHERE yonetici_eposta='" . $_POST["y_eposta"] . "' and yonetici_sifre = '". $_POST["y_sifre"]."'";
          $sonuc = $baglanti->query($sorgu)or die($baglanti->error);
          $dizi = $sonuc-> fetch_assoc();
          if(is_array($dizi)) {
             $_SESSION["login"] = "true";
              $_SESSION["id"] = $dizi['yonetici_id'];
              $_SESSION["yonetici_adi"] = $dizi['yonetici_adi'];
              $_SESSION["eposta"] = $dizi['yonetici_eposta'];
              $_SESSION["sifre"] = $dizi['yonetici_sifre'];
              header("Location:yonetici.php");
            } else{?>
                 <script>
                 	var pwmesaj=document.getElementById("sifremsj");
                	pwmesaj.innerHTML="Yanlış bilgi girdiniz.Tekrar deneyiniz.";
              	</script>
          	<?php
            }
          }
          ?>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/yscripts.js"></script>
    </body>
</html>
<?php ob_end_flush(); ?>
