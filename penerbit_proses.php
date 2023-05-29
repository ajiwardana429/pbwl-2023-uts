<?php

require_once "inc/Koneksi.php";
require_once "app/Penerbit.php";

$pen = new App\Penerbit();

if (isset($_POST['btn_simpan'])) {
    $pen->simpan();
    header("location:index.php?hal=penerbit_tampil");
}

if (isset($_POST['btn_update'])) {
    $pen->update();
    header("location:index.php?hal=penerbit_tampil");
}