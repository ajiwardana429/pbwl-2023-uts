<?php

require_once "inc/Koneksi.php";
require_once "app/Buku.php";

$buk = new App\Buku();

if (isset($_POST['btn_simpan'])) {
    $buk->simpan();
    header("location:index.php?hal=buku_tampil");
}

if (isset($_POST['btn_update'])) {
    $buk->update();
    header("location:index.php?hal=buku_tampil");
}