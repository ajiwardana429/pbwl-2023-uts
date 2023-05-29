<?php

require_once "inc/Koneksi.php";
require_once "app/Penulis.php";

$penu = new App\Penulis();

if (isset($_POST['btn_simpan'])) {
    $penu->simpan();
    header("location:index.php?hal=penulis_tampil");
}

if (isset($_POST['btn_update'])) {
    $penu->update();
    header("location:index.php?hal=penulis_tampil");
}