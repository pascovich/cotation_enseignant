<?php

include 'database/connect.php';
?>
<?php

$requette=$db->prepare("SELECT * FROM promotion_option_view ");
$requette->execute();
$opt=$requette->fetchAll();


$requette2=$db->prepare("SELECT * FROM annee");
$requette2->execute();
$annee=$requette2->fetchAll();


if (empty($_SESSION['user'])) {
   header('location:login.php');
 }
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SYSTEM - COTATION</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
          <?php include("partials/sidebar.php"); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
               <?php include("partials/navbar.php"); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Mon Compte</li>
                            </ol>
                        </nav>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-2">
                        <form method="POST" action="" id="tri_form">
                        <div class="card-header py-3 row">
                             
                            <div class="col-md-8">
                               
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Annee academique</label>
                                        <select class="form-control" name="id_annee" id="id_annee">
                                              
                                              <?php foreach($annee as $f): ?>
                                                
                                                <option value="<?=$f['id'];?>"><?=$f['designation'];?></option>
                                              <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Promotion & Option</label>
                                        <select class="form-control" name="id_promotion" id="id_promotion">
                                              
                                              <?php foreach($opt as $f): ?>
                                                
                                                <option value="<?=$f['id'];?>">
                                                    <?=$f['designation'];?> - <?=$f['options'];?>
                                                        
                                                    </option>
                                              <?php endforeach; ?>
                                        </select>
                                    </div>

                                </div>
                                
                            
                            </div>
                            <div class="col-md-4">
                                <br>
                                <!-- <button type="button" id="add_cotation" data-toggle="modal" data-target="#cotationModal" class="btn btn-primary" align="rigth" class=" col-md-2">trier</button>
 -->                                <input type="submit" name="submit" value="Selectionner" class="btn btn-primary">
                            </div>
                            
                            
                        </div>
                        </form>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered cotation_data" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date Horaire</th>
                                            <th>Annee-Acad</th>
                                            <th>Promotion & option</th>
                                            <th>Cours</th>
                                            <th>Enseignant</th>
                                            <th>Cote</th>
                                            <th>Max</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody id="container">
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Date Horaire</th>
                                            <th>Annee-Acad</th>
                                            <th>Promotion & option</th>
                                            <th>Cours</th>
                                            <th>Enseignant</th>
                                            <th>Cote</th>
                                            <th>Max</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('partials/footer.php'); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
<!-- insert modal -->



<!-- end insert modal -->
   

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>



<script>
    $(document).ready(function(){
        $('#add_cotation').click(function(){
            $('#cotationModal').modal('show');
            $('#cotation_form')[0].reset();
            $('.modal-title').text("Cotation du cours");
            $('#action').val("Add");
            $('#operation').val("Add");
        });
    // var dataTable = $('.cotation_data').DataTable({
    //     "processing":true,
    //     "serverSide":true,
    //     "order":[],
    //     "ajax":{
    //         url:"../fetch/fetch_compte_cotation.php",
    //         type:"POST"
    //     },
    //     "columnDefs":[
    //         {
    //             // "targets":[0, 2, 3],
    //             "targets":[0, 5, 6],
    //             "orderable":false,
    //         },
    //     ],
    //     "bDestroy":true

    // });
        $(document).on('submit', '#tri_form', function(event) {
      event.preventDefault();
      var pro_opt = $('#id_promotion').val();
      var annee = $('#id_annee').val();
      if (pro_opt != '' && annee != '') {
        $.ajax({
          url: "fetch/tri_fetch_cotation.php",
          method: 'POST',
          data: new FormData(this),
          contentType: false,
          processData: false,
          success: function(data) {
            $('#container').html(data);


          }
        });
      } else {

        alert("Both Fields are Required");
      }
    });
    $(document).on('submit','#cotation_form',function(event){
        event.preventDefault();
        

        // if( && motif != '' )
        // {
            $.ajax({
                url:"../insert/insert_compte_cotation.php",
                method:'POST',
                data:new FormData(this),
                contentType:false,
                processData:false,
                success:function(data)
                {
                    
                        alert(data);
                        $('#cotation_form')[0].reset();
                        $('#cotationModal').modal('hide');
                        dataTable.ajax.reload();
                        
                }
            });
        // }
        // else
        // {
                       
        //     alert("Both Fields are Required");
        // }
    });

    $(document).on('click', '.update', function(){
        var id_cours = $(this).attr("id");
        $('#cotationModal').modal('show');
        $('#id_cours').val(id_cours);
        $('#action').val("Coter");
        $('#operation').val("Add");
     
    });
   
});

</script>