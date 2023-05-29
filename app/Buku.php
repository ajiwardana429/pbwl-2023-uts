<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Buku extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tbl_buku";
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
        $nama_buku = $_POST['nama_buku'];
        $penulis = $_POST['penulis'];

        $sql = "INSERT INTO tbl_buku (nama_buku, penulis) VALUES (:nama_buku, :penulis)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_buku", $nama_buku);
        $stmt->bindParam(":penulis", $penulis);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tbl_buku WHERE id_buku=:id_buku";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_buku", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_buku = $_POST['nama_buku'];
        $penulis = $_POST['penulis'];
        $id_buku = $_POST['id_buku'];

        $sql = "UPDATE tbl_buku SET nama_buku=:nama_buku, penulis=:penulis WHERE id_buku=:id_buku";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_buku", $nama_buku);
        $stmt->bindParam(":penulis", $penulis);
        $stmt->bindParam(":id_buku", $id_buku);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tbl_buku WHERE id_buku=:id_buku";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_buku", $id);
        $stmt->execute();

    }

}