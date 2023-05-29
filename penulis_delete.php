<?php

$id = $_GET['id'];

$penu = new App\Penulis();
$rows = $penu->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=penulis_tampil">Kembali</a>
</div>