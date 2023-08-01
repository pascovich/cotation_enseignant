<?php

include 'database/connect.php';
?>
<?php

$requette=$db->prepare("SELECT * FROM promotion_option_view");
$requette->execute();
$opt=$requette->fetchAll();

$requette1=$db->prepare("SELECT * FROM etudiant");
$requette1->execute();
$et=$requette1->fetchAll();


$requette2=$db->prepare("SELECT * FROM annee");
$requette2->execute();
$annee=$requette2->fetchAll();



// if (empty($_SESSION['user'])) {
//   header('location:login.php');
// }

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>COTATION - INSCRIPTION</title>

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
                                <li class="breadcrumb-item active" aria-current="page">Inscription</li>
                            </ol>
                        </nav>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-2">
                        <div class="card-header py-3 row">

                            <h6 class="m-0 font-weight-bold text-primary col-md-10">Inscription data</h6>
                            <button type="button" id="add_inscription" data-toggle="modal" data-target="#inscriptionModal" class="btn btn-primary" align="rigth" class=" col-md-2">Inscrire</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered inscription_data" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date inscription</th>
                                            <th>Annee Acad.</th>
                                            <th>Promotion & Option</th>
                                            <th>Etudiant</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Date inscription</th>
                                            <th>Annee Acad.</th>
                                            <th>Promotion & Option</th>
                                            <th>Etudiant</th>
                                            <th>Actions</th>
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

<div class="modal fade bs-example-modal-lg" id="inscriptionModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                    <form action="" method="POST" id="inscription_form" enctype="multipart/form-data" autocomplete="on">

                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Informations de L'inscription</h4>
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
                                    Promotion
                                    <select class="form-control" name="id_promotion" id="id_promotion">
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
                            <div class="row">
                                
                                 <div class="col-md-6">
                                    Motif
                                    <input type="text" class="form-control" name="motif" id="motif" value="" placeholder="">
                                </div>
                                <div class="col-md-6">
                                    Etudiant
                                    <select class="form-control" name="id_etudiant" id="id_etudiant">
                                        <?php foreach($et as $p): ?>
                                        <option value="<?=$p['id']?>"><?=$p['noms']?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id_inscription" id="id_inscription" />
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
        $('#add_inscription').click(function(){
            $('#inscriptionModal').modal('show');
            $('#inscription_form')[0].reset();
            $('.modal-title').text("Enregistrement de l'affection du cours");
            $('#action').val("Add");
            $('#operation').val("Add");
        });

        var dataTable = $('.inscription_data').DataTable({
        "processing":true,
        "serverSide":true,
        "order":[],
        "ajax":{
            url:"fetch/fetch_inscription.php",
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
    // $(document).on('submit', '#inscription_form', function(event){
    //     event.preventDefault();
    //     var motif = $('#motif').val();
    //     var id_annee = $('#id_annee').val();
    //     var id_etudiant = $('#id_etudiant').val();
    //     var id_promotion = $('#id_promotion').val();
        
    //     if( && motif != '' && id_annee != '' && id_etudiant != '' && id_promotion != '')
    //     {
    //         $.ajax({
    //             url:"insert/insert_inscription.php",
    //             method:'POST',
    //             data:new FormData(this),
    //             contentType:false,
    //             processData:false,
    //             success:function(data)
    //             {
                    
    //                     alert(data);
    //                     $('#inscription_form')[0].reset();
    //                     $('#inscriptionModal').modal('hide');
    //                     dataTable.ajax.reload();
                        
    //             }
    //         });
    //     }
    //     else
    //     {
                       
    //         alert("Both Fields are Required");
    //         // $('#EtudiantModal').modal('hide');
    //     }
    // });
 
   
});

</script>