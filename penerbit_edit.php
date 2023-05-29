<?php

$id = $_GET['id'];
$pen = new App\Penerbit();

$row = $pen->edit($id);
?>

<h2>Edit Penerbit</h2>

<form action="penerbit_proses.php" method="post">
    <input type="hidden" name="id_penerbit" value="<?php echo $row['id_penerbit']; ?>">
    <table>
        <tr>
            <td>Nama Penerbit</td>
            <td><input type="text" name="nama_penerbit" value="<?php echo $row['nama_penerbit']; ?>"></td>
        </tr>
        <tr>
            <td>Tahun Terbit</td>
            <td><input type="text" name="tahun_terbit" value="<?php echo $row['tahun_terbit']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>