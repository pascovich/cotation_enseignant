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

    <title>ETUDIANT - COTATION</title>

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
                    <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Mon Compte</li>
                            </ol>
                        </nav>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-2">
                        <div class="card-header py-3 row">
                           <!--  <button type="button" name="update" id="1" class="btn btn-primary btn-xs update"><i class="fa fa-plus"> coter</button> -->
                            <h6 class="m-0 font-weight-bold text-primary col-md-10">Cotation data</h6>
                            <!-- <button type="button" id="add_cotation" data-toggle="modal" data-target="#cotationModal" class="btn btn-primary" align="rigth" class=" col-md-2">Coter</button> -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered cotation_data" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date Horaire</th>
                                            <th>Cours</th>
                                            <th>Enseignant</th>
                                            <th>Max</th>
                                            <th>Cote</th>
                                            <th>Mention</th>
                                            <th>Cotation</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Date Horaire</th>
                                            <th>Cours</th>
                                            <th>Enseignant</th>
                                            <th>Max</th>
                                            <th>Cote</th>
                                            <th>Mention</th>
                                            <th>Cotation</th>
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
                            <h4 class="modal-title" id="myLargeModalLabel">La Cotation est sur 5 par question</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>1. RESPECT DE LA CHARGE HORAIRE.</label>
                                    <input type="number" class="form-control" min="0" max="5" name="charge_horaire" id="charge_horaire">
                                </div>
                                 <div class="col-md-4">
                                   <label>2.DISTRIBUTION  ET LES OBJECTIFS DU COURS.</label> 
                                    <input type="number" class="form-control" min="0" max="5" name="distribution" id="distribution">
                                </div>
                                <div class="col-md-4">
                                     <label>3.PONCTUALITE.</label>
                                    <input type="number" class="form-control" min="0" max="5" name="ponctualite" id="ponctualite">
                                </div>
                                
                            </div>
                            <div class="row">
                                
                                 <div class="col-md-4">
                                    <label>4.CONTENU DU COURS ET LES OBJECTIFS INSTITUTIONNELS.</label> 
                                    <input type="number" class="form-control" min="0" max="5" name="contenu1" id="contenu1">
                                </div>
                                 <div class="col-md-4">
                                    <label>5.MAITRISE ET COMMUNICAT° DE MATIERE</label>
                                    <input type="number" class="form-control" min="0" max="5" name="maitrise1" id="maitrise1">
                                </div>
                                <div class="col-md-4">
                                    <label>6.LIEN ENTRE LE COURS ET LES TRAVAUX PRATIQUES</label>
                                    <input type="number" class="form-control" min="0" max="5" name="lien_cours_travaux" id="lien_cours_travaux">
                                </div>
                                
                            </div>
                            <div class="row">
                                
                                <div class="col-md-4">
                                    <label>7.COMMUNICATION DE LA BIBLIOGRAPHIQUE DU COURS.</label> 
                                    <input type="number" class="form-control" min="0" max="5" name="communication" id="communication">
                                </div>
                                 <div class="col-md-4">
                                    <label>8.CONTENU COURS EN Rpt AVEC LA PROFESSION</label>
                                    <input type="number" class="form-control" min="0" max="5" name="contenu2" id="contenu2">
                                </div>
                                <div class="col-md-4">
                                    <label>9. UTILISATION  DES  TIC   .</label>
                                    <input type="number" class="form-control" min="0" max="5" name="tic" id="tic">
                                </div>
                                
                            </div>
                             <div class="row">
                                
                                <div class="col-md-4">
                                    <label>10.SENS PEDAGOGIQUE ET METHODOLOGIE.</label> 
                                    <input type="number" class="form-control" min="0" max="5" name="peda" id="peda">
                                </div>
                                 <div class="col-md-4">
                                    <label>11.ORGANISATION DES INTERROGATIONS</label>
                                    <input type="number" class="form-control" min="0" max="5" name="interro" id="interro">
                                </div>
                                <div class="col-md-4">
                                    <label>12.CORRECTION D'INTERRO PENDANT LE COURS</label>
                                    <input type="number" class="form-control" min="0" max="5" name="correction_interro" id="correction_interro">
                                </div>
                                
                            </div>
                             <div class="row">
                                
                                 <div class="col-md-4">
                                    <label>13.L'EXAMEN COUVRE L'ENSEMBLE DE LA MATIERE</label> 
                                    <input type="number" class="form-control" min="0" max="5" name="examen" id="examen">
                                </div>
                                 <div class="col-md-4">
                                    <label>14.CORRECTION A TEMPS DE L'EXAMEN</label>
                                    <input type="number" class="form-control" min="0" max="5" name="correction_examen" id="correction_examen">
                                </div>
                                <div class="col-md-4">
                                    <label>15.SYLLABUS  POUR  LE  COURS</label>
                                    <input type="number" class="form-control" min="0" max="5" name="syllabus" id="syllabus">
                                </div>
                                
                            </div>
                             <div class="row">
                                
                                 <div class="col-md-4">
                                    <label>16.MAITRISE DE L'AUDITOIRE</label> 
                                    <input type="number" class="form-control" min="0" max="5" name="maitrise" id="maitrise">
                                </div>
                                 <div class="col-md-4">
                                    <label>17.SENS DE RESPONSABILITE</label>
                                    <input type="number" class="form-control" min="0" max="5" name="responsabilite" id="responsabilite">
                                </div>
                                <div class="col-md-4">
                                    <label>18.RELATIONS  COLLEGES</label>
                                    <input type="number" class="form-control" min="0" max="5" name="relation_collegue" id="relation_collegue">
                                </div>
                                
                            </div>
                             <div class="row">
                                
                                 <div class="col-md-6">
                                    <label>19.RELATIONS AVEC LES ETUDIANTS</label>
                                    <input type="number" class="form-control" min="0" max="5" name="relation_etudiant" id="relation_etudiant">
                                </div>
                                <div class="col-md-6">
                                    <label>20.DISPONIBILITE AUX CONTACTS</label>
                                    <input type="number" class="form-control" min="0" max="5" name="relation_contact" id="relation_contact">
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id_cours" id="id_cours" />
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
            url:"../fetch/fetch_compte_cotation.php",
            type:"POST"
        },
        "columnDefs":[
            {
                // "targets":[0, 2, 3],
                "targets":[0, 5, 6],
                "orderable":false,
            },
        ],
        "bDestroy":true

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