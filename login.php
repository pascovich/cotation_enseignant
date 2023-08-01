<?php 
  include 'partials/connect.php';

  if (isset($_POST['noms']) && isset($_POST['matricule'])) {

      $noms = htmlspecialchars($_POST['noms']);
      $matricule = htmlspecialchars($_POST['matricule']);

      $requete = $db->prepare("SELECT * FROM auth_etudiant_view WHERE noms=:noms and matricule=:matricule");
      $requete->execute(array(
      'noms' => $noms,
      'matricule' => $matricule
      ));
      $res = $requete->fetchAll(PDO::FETCH_OBJ);
       if ($res) {
        $user->con($res[0]->id);
        header('location:index.php');
       }else{
             $errors="matricule ou noms invalide";
        }
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

    <title>COTATION SYSTEM - LOGIN</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row" style="backgroun-img:url('');">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                
                            </div> -->
                            <div class="col-lg-6 mx-auto">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome dear!</h1>
                                    </div>
                                    <?php 
                                        if (isset($errors)):?>
                                            <div class="alert alert-danger">
                                            <p><?=$errors?></p>
                                            </div>
                                        
                                        
                                        <?php endif; ?>
                                    <form method="post" class="user">
                                        <div class="form-group">
                                            <input type="text" name="noms" class="form-control form-control-user"
                                                
                                                placeholder="Enter your full name...">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="matricule" class="form-control form-control-user"
                                                
                                                placeholder="Enter your matricule...">
                                        </div>
                                        <!-- <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div> -->
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        
                                        <input type="submit" name="login" value="Login" class="btn btn-primary btn-user btn-block">
                                        <hr>
                                       <!--  <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> -->
                                    </form>
                                    <!-- <hr> -->
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Details sur le system!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>