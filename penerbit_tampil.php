<?php

$pen = new App\Penerbit;
$rows = $pen->tampil();

?>

<h2>Penerbit</h2>

<a href="index.php?hal=penerbit_input" class="btn">Tambah Penerbit</a>

<table>
    <tr>
        <th>ID PENERBIT</th>
        <th>NAMA PENERBIT</th>
        <th>TAHUN TERBIT</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_penerbit']; ?></td>
        <td><?php echo $row['nama_penerbit']; ?></td>
        <td><?php echo $row['tahun_terbit']; ?></td>
        <td><a href="index.php?hal=penerbit_edit&id=<?php echo $row['id_penerbit']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=penerbit_delete&id=<?php echo $row['id_penerbit']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
