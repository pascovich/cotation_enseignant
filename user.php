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

    <title>COTATION - users</title>

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
                                <li class="breadcrumb-item active" aria-current="page">users</li>
                            </ol>
                        </nav>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-2">
                        <div class="card-header py-3 row">

                            <h6 class="m-0 font-weight-bold text-primary col-md-10">users data</h6>
                            <button type="button" id="add_users" data-toggle="modal" data-target="#usersModal" class="btn btn-primary" align="rigth" class=" col-md-2">Ajouter</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered users_data" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Avatar</th>
                                            <th>Username</th>
                                            <th>E-mail</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>#</th>
                                            <th>Avatar</th>
                                            <th>Username</th>
                                            <th>E-mail</th>
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
    <!-- Logout Modal-->
  
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

<div class="modal fade bs-example-modal-lg" id="usersModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                    <form action="" method="POST" id="users_form" enctype="multipart/form-data" autocomplete="on">

                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Informations du users</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                       <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    Username
                                    <input type="text" class="form-control" name="username" id="username" value="" placeholder="Entrer le username">
                                </div>
                                <div class="col-md-4">
                                    E-Mail
                                    <input type="mail" class="form-control" name="gmail" id="gmail" value="" placeholder="Entrer l'adresse e-mail">
                                </div>
                                <div class="col-md-4" >
                                    Choisir un avatar
                                    <input type="file" name="photo" id="photo" class="form-control" value="">
                                    <span id="user_uploaded_image"></span>
                                </div>
                                
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                    Password
                                    <input type="password" class="form-control" name="password" id="password" value="" placeholder="Entrer le password">
                                </div>
                                <div class="col-md-6">
                                    Password confirm
                                    <input type="password" class="form-control" name="password_confirm" id="password_confirm" value="" placeholder="Entrer le password pour confirmer">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id_users" id="id_users" />
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
        $('#add_users').click(function(){
            $('#usersModal').modal('show');
            $('#users_form')[0].reset();
            $('.modal-title').text("Enregistrement de l'usersemique");
            $('#action').val("Add");
            $('#operation').val("Add");
        });
    var dataTable = $('.users_data').DataTable({
        "processing":true,
        "serverSide":true,
        "order":[],
        "ajax":{
            url:"fetch/fetch_user.php",
            type:"POST"
        },
        "columnDefs":[
            {
                "targets":[0, 3, 4],
                // "targets":[0, 8, 9],
                "orderable":false,
            },
        ],
        "bDestroy":true

    });
    $(document).on('submit', '#users_form', function(event){
        event.preventDefault();
        var username = $('#username').val();
        var gmail = $('#gmail').val();
        var password = $('#password').val();
        var password_confirm = $('#password_confirm').val();
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
        
        if(username != '' && gmail !='' && password != '' && password_confirm != '')
        {
            $.ajax({
                url:"insert/insert_user.php",
                method:'POST',
                data:new FormData(this),
                contentType:false,
                processData:false,
                success:function(data)
                {
                    
                        alert(data);
                        $('#user_form')[0].reset();
                        $('#UserModal').modal('hide');
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
        var id_users = $(this).attr("id");
        $.ajax({
            url:"fetch/user_fetch_single.php",
            method:"POST",
            data:{id_users:id_users},
            dataType:"json",
            success:function(data)
            {
                $('#UserModal').modal('show');
                $('#username').val(data.username);
                $('#gmail').val(data.gmail);
                $('#password').val(data.password);
                $('.modal-title').text("Editer les infos de l'utilisateur");
                $('#id_users').val(id_users);
                $('#user_uploaded_image').html(data.photo);
                $('#action').val("Edit");
                $('#operation').val("Edit");
            }
        })
    });
    // $(document).on('click', '.delete', function(){
    //     var id_users = $(this).attr("id");
    //     if(confirm("Es-tu sure de vouloir supprimer cet utilisateur?"))
    //     {
    //         $.ajax({
    //             url:"users_delete.php",
    //             method:"POST",
    //             data:{id_users:id_users},
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