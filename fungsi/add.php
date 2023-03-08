<?php

include_once("../inc/config.php");
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];
$telpon = $_POST['telpon'];
$password = md5($_POST['password']);

$result = mysqli_query($connection, "INSERT INTO users(nama,gender,birthday,email,telpon,password) VALUES('$nama','$gender','$birthday','$email','$telpon','$password')");
if($result){
    header("location: ../login.php");
}else{
    echo "Gagal";
}

?>