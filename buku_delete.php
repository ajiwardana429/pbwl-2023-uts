<?php

$id = $_GET['id'];

$buk = new App\Buku();
$rows = $buk->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=buku_tampil">Kembali</a>
</div>