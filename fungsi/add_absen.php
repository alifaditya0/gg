<?php

include_once("../inc/config.php");
$id_users = $_POST['id_users'];
$jam_masuk = $_POST['jam_masuk'];
$jam_keluar = $_POST['jam_keluar'];
$tanggal = $_POST['tanggal'];
$status_absen = $_POST['status_absen'];

$result = mysqli_query($connection, "INSERT INTO absen(id_users,jam_masuk,jam_keluar,tanggal,status_absen) VALUES('$id_users','$jam_masuk','$jam_keluar','$tanggal','$status_absen')");




if($result){
    echo 'Query executed successfully.';
    header("location: ../index.php");
}else{
    echo "Gagal";
}

?>