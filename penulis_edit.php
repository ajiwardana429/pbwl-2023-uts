<?php

$id = $_GET['id'];
$penu = new App\Penulis();

$row = $penu->edit($id);
?>

<h2>Edit Penulis</h2>

<form action="penulis_proses.php" method="post">
    <input type="hidden" name="id_penulis" value="<?php echo $row['id_penulis']; ?>">
    <table>
        <tr>
            <td>Nama Penulis</td>
            <td><input type="text" name="nama_penulis" value="<?php echo $row['nama_penulis']; ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $row['alamat']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>