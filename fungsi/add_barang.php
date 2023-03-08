<?php

include_once("../inc/config.php");
$nama_barang = $_POST['nama_barang'];
$harga_barang = $_POST['harga_barang'];
$stok_barang = $_POST['stok_barang'];
$status_barang = $_POST['status_barang'];

$result = mysqli_query($connection, "INSERT INTO barang(nama_barang,harga_barang,stok_barang,status_barang) VALUES('$nama_barang','$harga_barang','$stok_barang','$status_barang')");
if($result){
    echo "Berhasil";
}else{
    echo "Gagal";
}

?>