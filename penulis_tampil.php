<?php

$penu = new App\Penulis;
$rows = $penu->tampil();

?>

<h2>Penulis</h2>

<a href="index.php?hal=penulis_input" class="btn">Tambah Penulis</a>

<table>
    <tr>
        <th>ID PENULIS</th>
        <th>NAMA PENULIS</th>
        <th>ALAMAT</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_penulis']; ?></td>
        <td><?php echo $row['nama_penulis']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
        <td><a href="index.php?hal=penulis_edit&id=<?php echo $row['id_penulis']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=penulis_delete&id=<?php echo $row['id_penulis']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
