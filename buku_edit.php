<?php

$id = $_GET['id'];
$buk = new App\Buku();

$row = $buk->edit($id);
?>

<h2>Edit Buku</h2>

<form action="buku_proses.php" method="post">
    <input type="hidden" name="id_buku" value="<?php echo $row['id_buku']; ?>">
    <table>
        <tr>
            <td>Nama Buku</td>
            <td><input type="text" name="nama_buku" value="<?php echo $row['nama_buku']; ?>"></td>
        </tr>
        <tr>
            <td>Penulis</td>
            <td><input type="text" name="penulis" value="<?php echo $row['penulis']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>