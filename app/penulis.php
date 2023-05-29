<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Penulis extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tbl_penulis";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $nama_penulis = $_POST['nama_penulis'];
        $alamat = $_POST['alamat'];

        $sql = "INSERT INTO tbl_penulis (nama_penulis, alamat) VALUES (:nama_penulis, :alamat)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_penulis", $nama_penulis);
        $stmt->bindParam(":alamat", $alamat);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tbl_penulis WHERE id_penulis=:id_penulis";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_penulis", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_penulis = $_POST['nama_penulis'];
        $alamat = $_POST['alamat'];
        $id_penulis = $_POST['id_penulis'];

        $sql = "UPDATE tbl_penulis SET nama_penulis=:nama_penulis, alamat=:alamat WHERE id_penulis=:id_penulis";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_penulis", $nama_penulis);
        $stmt->bindParam(":alamat", $alamat);
        $stmt->bindParam(":id_penulis", $id_penulis);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tbl_penulis WHERE id_penulis=:id_penulis";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_penulis", $id);
        $stmt->execute();

    }

}