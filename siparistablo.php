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

         <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

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
                             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
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
             <div id="layoutSidenav_content">
                 <main style="margin:20px;" >


<?php
if(isset($_POST["sil"])){

$sql="DELETE FROM `siparis` WHERE `order_id`=".$_POST['sip_id2'];
$result=$baglanti->query($sql);

}

 ?>
                                        <div id="siparis_table" class="card mb-4">
                                            <div class="card-header">
                                                <i class="fa fa-shopping-cart mr-1"></i>
                                                Sipariş Tablosu
                                            </div>
                                            <form method="POST" action="">
                                            <div class="card-body">

                                    <div class="btn-filter" style="margin-bottom:10px;">
                                      <button type="button" id="hepsi" name="button" class="btn btn-danger active">Hepsi</button>
                                      <button type="button" id="siparis" name="button" class="btn btn-warning">Sipariş Alındı</button>
                                      <button type="button" id="kargo" name="button" class="btn btn-info">Kargoya Verildi</button>
                                      <button type="button" id="teslim" name="button" class="btn btn-success">Teslim Edildi</button>
                                    </div>






      <!--  <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-danger active">
                <input type="radio" name="status" id="hepsi" value="hepsi" checked="checked"> Hepsi
            </label>&nbsp;
            <label class="btn btn-warning">
                <input type="radio" name="status"id="siparis" value="siparişiniz"> Sipariş alındı
            </label>&nbsp;
            <label class="btn btn-info">
                <input type="radio" name="status" id="kargo" value="kargoya"> Kargoda
            </label>&nbsp;
            <label class="btn btn-success">
                <input type="radio" name="status" id="teslim" value="teslim"> Teslim edildi
            </label>
        </div>-->
                                                <div class="table-responsive">
                                                    <table  class="table table-bordered  " id="dataTable"  cellspacing="0">
                                                        <thead>
                                                            <tr>
                                                                <th>Sipariş İd</th>
                                                                <th>Kullanıcı Adı</th>
                                                                <th>Alıcı Adı</th>
                                                                <th>Alıcı Telefon</th>
                                                                <th>Alıcı Başlık</th>
                                                                <th>Adres</th>

                                                                <th>Tarih</th>
                                                                <th>Toplam</th>
                                                                <th>Ödeme Tipi</th>
                                                                <th>Durum</th>
                                                                <th>İşlemler</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                          <?php
                                                          $sorgu="Select `siparis`.*,`kullanici`.`kullanici_adi` from `siparis` inner join `kullanici` on `siparis`.`kullanici_id`=`kullanici`.`kullanici_id`";
                                                          $sonuc=$baglanti->query($sorgu);
                                                          while ($siparis=$sonuc->fetch_assoc()) {
                                                        echo "<tr data-status=".$siparis['durum']." id=".$siparis['order_id'].">";
                                                        echo "<th>".$siparis["order_id"]."</th>";
                                                        echo "<td>".$siparis["kullanici_adi"]."</td>";
                                                        echo "<td>".$siparis["alici_adisoyadi"]."</td>";
                                                        echo "<td>".$siparis["telefon"]."</td>";
                                                        echo "<td>".$siparis["adres_baslik"]."</td>";
                                                        echo "<td>".$siparis["adres"]."</td>";
                                                        echo "<td>".$siparis["tarih"]."</td>";
                                                        echo "<td>".$siparis["toplam"]."₺</td>";
                                                        echo "<td>".$siparis["odeme_tipi"]."</td>";
                                                        echo "<td  id=".$siparis["durum"]." data-target='durum'>".$siparis["durum"]."</td>";
                                                        echo "<td>"?>
                                                        <div class='d-flex justify-content-center'>
                               <form class='mx-1' action='#' method='POST'>
                                 <input type='hidden' name='sip_id' value='<?=$siparis['durum']?>'>
                                 <a  href='#benimmodal' data-toggle='modal' id='link'data-role='update'  data-id='<?=$siparis['order_id']?>'  class="btn btn-success btn-sm btn-icon-split">
                                   <span class='icon text-white-60'>
                                     <i class='fas fa-edit'></i>
                                   </span>
                                 </a>
                            </form>
                               <form class='mx-1' action='#' method='POST'  >
                                 <input type='hidden' name='sip_id2' value='<?=$siparis['order_id']?>'>
                                 <button type="submit" name="sil" class="btn btn-danger btn-sm btn-icon-split" value="sil" >
                                   <span class='icon text-white-60'>
                                     <i class='fas fa-trash'></i>
                                   </span>
                            </button>
                               </form>
                               <form class='mx-1' action='#' method='POST'>
                                 <input type='hidden' name='sip_id3' value='<?=$siparis['order_id']?>'>
                                 <button  data-toggle="modal" data-target="#view-modal" data-id="<?=$siparis['order_id']?>" id="getUser" class="btn btn-primary btn-sm btn-icon-split">
                                   <span class='icon text-white-60'>
                                     <i class='fas fa-eye'></i>
                                   </span>
                                 </button>
                            </form>
                           </div>

                                                        <?php "</td>";

                                                        echo "</tr>";
                                                        }

                                                           ?>


                                                      </tbody>
                                                    </table>


                                                    </div>

                                                  </form>

                                                  <div id="view-modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none;">
                                                    <div class="modal-dialog modal-lg" >
                                                       <div class="modal-content">
                                                          <div class="modal-header">
                                                             <h4 class="modal-title pull-left" id="myModalLabel"> Siparis Detay </h4>
                                                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                                                          </div>
                                                          <div class="modal-body">
                                                             <div id="modal-loader" style="display: none; text-align: center;">

                                                             </div>

                                                             <!-- mysql data will be load here -->
                                                             <div id="dynamic-content"></div>
                                                          </div>


                                                      </div>
                                                    </div>
                                                  </div>



        <!-- Modal -->
        <div id="benimmodal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title "><i class='fas fa-edit'></i>Siparis Durumu</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

              </div>
              <div class="modal-body">
<div class="form-group">
  <label>Siparis durumunu giriniz:</label>
  <input type="text" id="durum" class="form-control" >
</div>
<input type="hidden" id="userID" class="form-control">
          </div>
              <div class="modal-footer">
                <a href="javascript:void(0)" id="save" class="btn btn-success pull-right">Düzenle</a>
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kapat</button>
              </div>
            </div>

          </div>
        </div>







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

      <script type="text/javascript">
      $(document).ready(function(){

  $(document).on('click', '#getUser', function(e){

   e.preventDefault();

   var uid = $(this).data('id'); // get id of clicked row

   $('#dynamic-content').html(''); // leave this div blank
   $('#modal-loader').show();      // load ajax loader on button click

   $.ajax({
        url: 'siparisGoster.php',
        type: 'POST',
        data: 'id='+uid,
        dataType: 'html'
   })
   .done(function(data){
        console.log(data);
        $('#dynamic-content').html(''); // blank before load.
        $('#dynamic-content').html(data); // load here
        $('#modal-loader').hide(); // hide loader
   })
   .fail(function(){
        $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
        $('#modal-loader').hide();
   });

  });
});
      </script>

      <script type="text/javascript">
      $(document).ready(function(){
            $(document).on('click','a[data-role=update]',function(){
//alert($(this).data("id"));
            var cargo_id=$(this).data("id");
            var durum1=$('#'+ cargo_id).children('td[data-target=durum]').text();

            $('#durum').val(durum1);
            $('#userID').val(cargo_id);

          $('#benimmodal').modal('show');
});
$('#save').click(function(){
  var id=$('#userID').val();
  var durum=$('#durum').val();
  $.ajax({
       url: 'cargo.php',
       type: 'POST',
       data:{id:id,durum:durum},
      success: function (response) {
        $('#'+id).children('td[data-target=durum]').text(durum);
        $('#benimmodal').modal('hide');
         $(".modal-backdrop.in").hide();
      }

  });
  /*.done(function(response){
    $('#'+id).children('td[data-target=durum]').text(durum);
    //$('#benimmodal').dialog('close');
    $('#benimmodal').modal('toggle');
    //$('.modal-backdrop').hide();




  });
  */

});
  });
      </script>

<!--<script type="text/javascript">

$(document).ready(function()
{
    $(".btn-group .btn").click(function()
    {
        var inputValue  =   $(this).find("input").val();
        if(inputValue   != 'hepsi')
        {
            var target  =   $('table tr[data-status="' + inputValue + '"]');
            $("table tbody tr").not(target).hide();
            target.fadeIn();
        }
        else
        {
            $("table tbody tr").fadeIn();
        }
    });
    var bs=$.fn.tooltip.Constructor.VERSION;
       var str=bs.split(".");
       if(str[0]   ==  4)
           {
               $(".label").each(function()
               {
                   var classStr    =   $(this).attr("class");
                   var newClassStr =   classStr.replace(/label/g, "badge");
                   $(this).removeAttr("class").addClass(newClassStr);
               });
           }
});


</script>
-->
<script type="text/javascript">
$(document).ready(function()
{

  const tabs=document.querySelectorAll('.btn-filter button');

for(let tab of tabs){

  tab.onclick=function(){

  let activetab=document.querySelectorAll('button.checked');

  activetab[0].classList.remove('checked')

    tab.classList.add('checked');
  }

}
  var tablo = $('#dataTable').DataTable();


$('#hepsi').on('click', function () {
  tablo.columns(9).search("").draw();
});

$('#siparis').on('click', function () {
  tablo.columns(9).search("siparişiniz" ).draw();
});

$('#kargo').on('click', function () {
  tablo.columns(9).search("kargoya").draw();
});
$('#teslim').on('click', function () {
  tablo.columns(9).search("teslim").draw();
});
});

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
