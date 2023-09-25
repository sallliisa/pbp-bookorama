<?php
// Nama     : M. Ghani Aryasuta
// NIM      : 24060121120026
// Isi Kode : Tugas 4 Praktikum PBP Lab D2

session_start();
if (!isset($_SESSION['username'])){
    unset($_SESSION['username']);
    session_destroy();
}
header('Location: login.php');
?>