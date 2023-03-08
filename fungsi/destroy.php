<?php

session_start();

$_SESSION['id']='';
$_SESSION['nama']='';
$_SESSION['email']='';
$_SESSION['gender']='';
$_SESSION['birthday']='';
$_SESSION['telpon']='';

unset($_SESSION['id']);
unset($_SESSION['nama']);
unset($_SESSION['email']);
unset($_SESSION['gender']);
unset($_SESSION['birthday']);
unset($_SESSION['telpon']);

session_unset();
session_destroy();
header('Location: ../login.php');

?>