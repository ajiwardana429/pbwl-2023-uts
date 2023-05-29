<?php

$id = $_GET['id'];

$pen = new App\Penerbit();
$rows = $pen->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=penerbit_tampil">Kembali</a>
</div>