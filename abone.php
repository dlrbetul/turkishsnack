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
         <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
         <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet" crossorigin="anonymous" />

         <link href="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" rel="stylesheet" crossorigin="anonymous" />
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


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
                                     <a class="nav-link" href="siparistablo.php">Sipariş Tablosu</a>
                                     <a class="nav-link" href="yoneticiekle.php">Yönetici Tablosu</a>
                                 </nav>
                             </div>
                             <a class="nav-link collapsed" href="yoneticiekle" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
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
                 <main style="margin:20px;width:1588px" >


<?php
if(isset($_POST["sil"])){

$sql="DELETE FROM `kutu_siparis` WHERE `order_id`=".$_POST['sip_id2'];
$result=$baglanti->query($sql);

}

 ?>
                                        <div id="siparis_table" class="card mb-4 display"  style="width:1568px">
                                            <div class="card-header">
                                                <i class="fa fa-shopping-cart mr-1"></i>
                                                Aylık Kutu Sipariş Tablosu
                                            </div>
                                            <form method="POST" action="">
                                            <div class="card-body">
                                                <div class="table-responsive " >



                                                    <table class="table stripe change " id="example" class="display" width="100%" cellspacing="0" >
                                                    </tr>
                                                        <thead>
                                                            <tr >
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
                                                          <div id="filtre">

                                                          </div>
                                                          <?php
                                                          $sorgu="Select `kutu_siparis`.*,`kullanici`.`kullanici_adi` from `kutu_siparis` inner join `kullanici` on `kutu_siparis`.`kullanici_id`=`kullanici`.`kullanici_id`";
                                                          $sonuc=$baglanti->query($sorgu);
                                                          while ($siparis=$sonuc->fetch_assoc()) {
                                                        echo "<tr id=".$siparis['order_id'].">";
                                                        echo "<th>".$siparis["order_id"]."</th>";
                                                        echo "<td>".$siparis["kullanici_adi"]."</td>";
                                                        echo "<td>".$siparis["alici_adisoyadi"]."</td>";
                                                        echo "<td>".$siparis["telefon"]."</td>";
                                                        echo "<td>".$siparis["adres_baslik"]."</td>";
                                                        echo "<td>".$siparis["adres"]."</td>";
                                                        echo "<td>".$siparis["tarih"]."</td>";
                                                        echo "<td>".$siparis["toplam"]."₺</td>";
                                                        echo "<td>".$siparis["odeme_tipi"]."</td>";
                                                        echo "<td  data-target='durum'>".$siparis["durum"]."</td>";
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
                               <form class='mx-1' action='#' method='POST'>
                                 <input type='hidden' name='sip_id2' value='<?=$siparis['order_id']?>'>
                                 <button type="submit" name="sil" class="btn btn-danger btn-sm btn-icon-split" value="sil">
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
                                                      <tfoot>
          <tr>
            <th ></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>

            <th >Tarih</th>
            <th></th>
            <th></th>
            <th>Durum</th>
          </tr>
      </tfoot>
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
                <a href="" id="save" class="btn btn-success pull-right">Düzenle</a>
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
        url: 'kutuSiparisGoster.php',
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
       url: 'kutuCargo.php',
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

<script type="text/javascript">
$(document).ready(function() {
  $('#example').DataTable( {
      initComplete: function () {
this.api().columns([6, 9]).every( function () {
                var column = this;
              var select = $('<select><option value="">Seçim</option></select>')
                  .appendTo( $(column.footer()).empty() )
                  .on( 'change', function () {
                      var val = $.fn.dataTable.util.escapeRegex(
                          $(this).val()
                      );

                      column
                          .search( val ? '^'+val+'$' : '', true, false )
                          .draw();
                  } );

              column.data().unique().sort().each( function ( d, j ) {
                  select.append( '<option value="'+d+'">'+d+'</option>' )
              } );
          } );
      }
  } );
} );
</script>



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
