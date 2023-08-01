<?php

include 'database/connect.php';
?>
<?php

$requette=$db->prepare("SELECT * FROM annee");
$requette->execute();
$magasin=$requette->fetchAll();

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

    <title>COTATION - ETUDIANT</title>

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
                                <li class="breadcrumb-item active" aria-current="page">Etudiant</li>
                            </ol>
                        </nav>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-2">
                        <div class="card-header py-3 row">

                            <h6 class="m-0 font-weight-bold text-primary col-md-10">Etudiant data</h6>
                            <button type="button" id="add_etudiant" data-toggle="modal" data-target="#etudiantModal" class="btn btn-primary" align="rigth" class=" col-md-2">Ajouter</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered etudiant_data" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                             <th>#</th>
                                            <th>Avatar</th>
                                            <th>Nom complet</th>
                                            <th>Sexe</th>
                                            <th>Etat-civil</th>
                                            <th>Adresse</th>
                                            <th>Matricule</th>
                                            <th>E-mail</th>
                                            <th>Telephone</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>#</th>
                                            <th>Avatar</th>
                                            <th>Nom complet</th>
                                            <th>Sexe</th>
                                            <th>Etat-civil</th>
                                            <th>Adresse</th>
                                            <th>Matricule</th>
                                            <th>E-mail</th>
                                            <th>Telephone</th>
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

<div class="modal fade bs-example-modal-lg" id="etudiantModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                    <form action="" method="POST" id="etudiant_form" enctype="multipart/form-data" autocomplete="on">

                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Informations de l'etudiant</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    Noms
                                    <input type="text" class="form-control" name="noms" id="noms" value="" placeholder="">
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    Sexe
                                    <select class="form-control" name="sexe" id="sexe">
                                        <option value="m">masculin</option>
                                        <option value="feminin">feminin</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    Etat-civil
                                    <select class="form-control" name="etat_civil" id="etat_civil">
                                        <option value="Celibataire">Celibataire</option>
                                        <option value="Marie">Marie</option>
                                        <option value="Divorce">Divorce</option>
                                        <option value="veuf(ve)">veuf(ve)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    Adresse
                                    <input type="text" class="form-control" name="adresse" id="adresse" value="" placeholder="">
                                </div>
                                <div class="col-md-6">
                                    Telephone
                                    <input type="text" class="form-control" name="telephone" id="telephone" value="" placeholder="">
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    E-mail
                                    <input type="mail" class="form-control" name="email" id="email" value="" placeholder="">
                                </div>
                                <div class="col-md-6" >
                                    Choisir un avatar
                                    <input type="file" name="photo" id="photo" class="form-control" value="">
                                   
                                </div>
                                 <span id="etudiant_uploaded_image" ></span>
                               
                               
                            </div>
                            

                           
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id_etudiant" id="id_etudiant" />
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
        $('#add_etudiant').click(function(){
            $('#etudiantModal').modal('show');
            $('#etudiant_form')[0].reset();
            $('.modal-title').text("Enregistrement de l'etudiant");
            $('#action').val("Add");
            $('#operation').val("Add");
        });
    var dataTable = $('.etudiant_data').DataTable({
        "processing":true,
        "serverSide":true,
        "order":[],
        "ajax":{
            url:"fetch/fetch_etudiant.php",
            type:"POST"
        },
        "columnDefs":[
            {
                // "targets":[0, 2, 3],
                "targets":[0, 8, 9],
                "orderable":false,
            },
        ],
        "bDestroy":true

    });
    $(document).on('submit', '#etudiant_form', function(event){
        event.preventDefault();
        var noms = $('#noms').val();
        var sexe = $('#sexe').val();
        var etat_civil = $('#etat_civil').val();
        var telephone = $('#telephone').val();
        var email = $('#email').val();
        var adresse = $('#adresse').val();
        var extension = $('#photo').val().split('.').pop().toLowerCase();
        if(extension != '')
        {
            if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
            {
                alert("Invalid Image File");
                $('#photo').val('');
                return false;
            }
        }
        if(noms !='' && sexe !='' && etat_civil !='' && telephone !='' && email !='' && adresse !='')
        {
            $.ajax({
                url:"insert/insert_etudiant.php",
                method:'POST',
                data:new FormData(this),
                contentType:false,
                processData:false,
                success:function(data)
                {
                    
                        alert(data);
                        $('#etudiant_form')[0].reset();
                        $('#etudiantModal').modal('hide');
                        dataTable.ajax.reload();
                        
                }
            });
        }
        else
        {
                       
            alert("Both Fields are Required");
            // $('#EtudiantModal').modal('hide');
        }
    });
    $(document).on('click', '.update', function(){
        var id_etudiant = $(this).attr("id");
        $.ajax({
            url:"fetch/etudiant_fetch_single.php",
            method:"POST",
            data:{id_etudiant:id_etudiant},
            dataType:"json",
            success:function(data)
            {
                $('#etudiantModal').modal('show');
                $('#noms').val(data.noms);
                $('#sexe').val(data.sexe);
                $('#etat_civil').val(data.etat_civil);
                $('#adresse').val(data.adresse);
                $('#email').val(data.email);
                $('#telephone').val(data.telephone);
                $('.modal-title').text("Editer les infos de etudiant");
                $('#id_etudiant').val(id_etudiant);
                $('#etudiant_uploaded_image').html(data.photo);
                $('#action').val("Edit");
                $('#operation').val("Edit");
            }
        })
    });
    // $(document).on('click', '.delete', function(){
    //     var id_etudiant = $(this).attr("id");
    //     if(confirm("Es-tu sure de vouloir supprimer cet utilisateur?"))
    //     {
    //         $.ajax({
    //             url:"etudiant_delete.php",
    //             method:"POST",
    //             data:{id_etudiant:id_etudiant},
    //             success:function(data)
    //             {
    //                 alert(data);
    //                 dataTable.ajax.reload();
    //             }
    //         });
    //     }
    //     else
    //     {
    //         return false;   
    //     }
    // });
});

</script>