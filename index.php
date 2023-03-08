<?php
session_start();
if(!isset($_SESSION["email"])){
  echo "Access Denied";
  exit;
}

$id=$_SESSION["id"];
$nama=$_SESSION["nama"];
$email=$_SESSION["email"];
$gender=$_SESSION["gender"];

?>


  
   
<?php

require __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;
$date = date("H:i:s");
$now = Carbon::parse($date)->locale('id');
$now->settings(['formatFunction' => 'translatedFormat']);
$data = $now->format('h:i');

$dat = Carbon::now()->locale('id');
$dat->settings(['formatFunction' => 'translatedFormat']);
$datas = $dat->format('l, j F Y');
$user = $_SESSION['id_users'];
// var_dump($user);

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image" style=" background-image:css"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form action="fungsi/add_absen.php" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
            <!-- <label for="id_users" class="form-label">ID Users</label> -->
            <input type="hidden" class="form-control" name="id_users" id="id_users" placeholder="Masukkan ID users" value="28173812">
        </div>
         <div class="mb-3">
            <!-- <label for="jam_masuk" class="form-label">Jam Masuk</label> -->
            <input type="hidden" class="form-control" name="jam_masuk" id="jam_masuk" placeholder="Jam Masuk Anda" value="<?= $data?>">
        </div>
        <div class="mb-3">
             <!-- <label for="jam_keluar" class="form-label">Jam Keluar</label>  -->
             <input type="hidden" class="form-control" name="jam_keluar" id="jam_keluar" placeholder="Jam Keluar Anda">
        </div>
        <div class="mb-3">
            <!-- <label for="tanggal" class="form-label">Tanggal</label> -->
            <input type="hidden" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal Masuk Anda" value="<?= $datas?>">
        </div>
        <div class="mb-3">
            <label for="status_absen" class="form-label"></label>
            <select class="form-select" name="status_absen" aria-label="Default select example" hidden>
            <option>Apakah Kamu Sudah Absen?</option>
            <option  selected value="1">Sudah</option>
            <option value="2">Belum</option>
            
            </select>
        </div>
       
    </div>
    <h5 class="card-title"></h5>
    <p class="card-text">Silahkan Absen.</p>
    <button type="submit" class="btn btn-primary" name="submit" style="margin-bottom:150px;">Absen</button>
    <a href="../alif_ps/login.php" class="btn btn-primary" style="margin-bottom:150px;" name="submit">Logout</a>

  </div>
  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>