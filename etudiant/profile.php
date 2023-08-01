<?php

include 'partials/connect.php';
?>
<?php

$requette=$db->prepare("SELECT * FROM auth_etudiant_view ");
$requette->execute();
$opt=$requette->fetchAll();

$requette1=$db->prepare("SELECT * FROM etudiant");
$requette1->execute();
$et=$requette1->fetchAll();




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

    <title>ETUDIANT - PROFILE</title>

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                 
                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Informations Personnelles</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Direct
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Social
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Referral
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('../partials/footer.php'); ?>
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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>

<div class="modal fade bs-example-modal-lg" id="cotationModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                    <form action="" method="POST" id="cotation_form" enctype="multipart/form-data" autocomplete="on">

                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Informations de La cotation</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                
                                 <div class="col-md-6">
                                    Annee-acad.
                                    <select class="form-control" name="id_annee" id="id_annee">
                                        <?php foreach($annee as $p): ?>
                                        <option value="<?=$p['id']?>"><?=$p['designation']?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    Cours
                                    <select class="form-control" name="id_cours" id="id_cours">
                                        <?php foreach($opt as $p): ?>
                                        <option value="<?=$p['id']?>"><?=$p['designation']?>-<?=$p['options']?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <!-- <div class="col-md-6">
                                    Motif
                                    <input type="text" class="form-control" name="motif" id="motif" value="" placeholder="">
                                </div> -->
                                
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id_cotation" id="id_cotation" />
                            <input type="hidden" name="operation" id="operation" />
                            <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </form>  
                    </div>
                </div>
</div>

<script>
    $(document).ready(function(){
        $('#add_cotation').click(function(){
            $('#cotationModal').modal('show');
            $('#cotation_form')[0].reset();
            $('.modal-title').text("Cotation du cours");
            $('#action').val("Add");
            $('#operation').val("Add");
        });
    var dataTable = $('.cotation_data').DataTable({
        "processing":true,
        "serverSide":true,
        "order":[],
        "ajax":{
            url:"fetch/fetch_cotation.php",
            type:"POST"
        },
        "columnDefs":[
            {
                // "targets":[0, 2, 3],
                "targets":[0, 4, 5],
                "orderable":false,
            },
        ],
        "bDestroy":true

    });
    $(document).on('submit','#cotation_form',function(event){
        event.preventDefault();
        var motif = $('#motif').val();
        var id_annee = $('#id_annee').val();
        var id_etudiant = $('#id_etudiant').val();
        var id_promotion = $('#id_promotion').val();

        // if( && motif != '' )
        // {
            $.ajax({
                url:"insert/insert_cotation.php",
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
    $(document).on('submit', '#cotation_form', function(event){
        event.preventDefault();
        var motif = $('#motif').val();
        var id_annee = $('#id_annee').val();
        var id_etudiant = $('#id_etudiant').val();
        var id_promotion = $('#id_promotion').val();
        
       
            $.ajax({
                url:"insert/insert_cotation.php",
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
     
    });
    $(document).on('click', '.update', function(){
        var id_cotation = $(this).attr("id");
        $.ajax({
            url:"fetch/cotation_fetch_single.php",
            method:"POST",
            data:{id_cotation:id_cotation},
            dataType:"json",
            success:function(data)
            {
                $('#cotationModal').modal('show');
                $('#date_passassion_cours').val(data.date_passassion_cours);
                $('#motif').val(data.motif);
                $('#id_annee').val(data.annee);
                $('#id_etudiant').val(data.noms);
                $('#id_promotion').val(data.prom);
                $('.modal-title').text("Editer les infos de l'cotation");
                $('#id_cotation').val(id_cotation);
                $('#action').val("Edit");
                $('#operation').val("Edit");
            }
        })
    });
   
});

</script>