<?php

$buk = new App\Buku;
$rows = $buk->tampil();

?>

<h2>Buku</h2>

<a href="index.php?hal=buku_input" class="btn">Tambah Buku</a>

<table>
    <tr>
        <th>ID BUKU</th>
        <th>NAMA BUKU</th>
        <th>PENULIS</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_buku']; ?></td>
        <td><?php echo $row['nama_buku']; ?></td>
        <td><?php echo $row['penulis']; ?></td>
        <td><a href="index.php?hal=buku_edit&id=<?php echo $row['id_buku']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=buku_delete&id=<?php echo $row['id_buku']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
