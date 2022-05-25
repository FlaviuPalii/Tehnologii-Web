<?php
session_start();
$_SESSION['errors'] = false;
$_SESSION['conUser'] = '';
echo "<script>document.location='../homepage.php';</script>";
?>