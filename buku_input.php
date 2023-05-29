<h2>Tambah Buku</h2>

<form action="buku_proses.php" method="post">
    <table>
    <tr>
            <td>Id Buku</td>
            <td><input type="text" name="id_buku"></td>
        </tr>
        <tr>
            <td>Nama Buku</td>
            <td><input type="text" name="nama_buku"></td>
        </tr>
        <tr>
            <td>Penulis</td>
            <td><input type="text" name="penulis"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>

<a href="buku_tampil.php">Kembali</a>