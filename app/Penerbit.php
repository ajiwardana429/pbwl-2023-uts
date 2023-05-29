<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Penerbit extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tbl_penerbit";
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
        $nama_penerbit = $_POST['nama_penerbit'];
        $tahun_terbit = $_POST['tahun_terbit'];

        $sql = "INSERT INTO tbl_penerbit (nama_penerbit, tahun_terbit) VALUES (:nama_penerbit, :tahun_terbit)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_penerbit", $nama_penerbit);
        $stmt->bindParam(":tahun_terbit", $tahun_terbit);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tbl_penerbit WHERE id_penerbit=:id_penerbit";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_penerbit", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }


    public function update()
    {
        $nama_penerbit = $_POST['nama_penerbit'];
        $tahun_terbit = $_POST['tahun_terbit'];
        $id_penerbit = $_POST['id_penerbit'];

        $sql = "UPDATE tbl_penerbit SET nama_penerbit=:nama_penerbit, tahun_terbit=:tahun_terbit WHERE id_penerbit=:id_penerbit";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_penerbit", $nama_penerbit);
        $stmt->bindParam(":tahun_terbit", $tahun_terbit);
        $stmt->bindParam(":id_penerbit", $id_penerbit);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tbl_penerbit WHERE id_penerbit=:id_penerbit";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_penerbit", $id);
        $stmt->execute();

    }

}