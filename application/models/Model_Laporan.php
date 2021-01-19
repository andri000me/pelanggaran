<?php

class Model_Laporan extends CI_Model{

    public function getAlllap()
   {
      $query = "SELECT `tb_pelanggaran`.*, `tb_siswa`.`kelas`, tb_siswa.nama_siswa
      FROM `tb_pelanggaran` JOIN `tb_siswa`
      ON `tb_pelanggaran`.`nisn` = `tb_siswa`.`nisn`";
      return $this->db->query($query)->result_array();
   }

    public function insert($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function delete($id)
   {
      $this->db->delete('tb_jenis_pelanggaran', ['id_jenis_pelanggaran' => $id]);
   }

  public function detail($id_pelanggaran)
   {
        $query = "SELECT `tb_detail_pelanggaran`.*, `tb_jenis_pelanggaran`.`jenis_pelanggaran`, tb_jenis_pelanggaran.bobot_nilai, tb_pelanggaran.total_p_pelanggaran, tb_pelanggaran.keterangan, tb_pelanggaran.sanksi
        FROM `tb_detail_pelanggaran` JOIN `tb_jenis_pelanggaran`
        ON `tb_detail_pelanggaran`.`id_jenis_pelanggaran` = `tb_jenis_pelanggaran`.`id_jenis_pelanggaran` join tb_pelanggaran on tb_detail_pelanggaran.id_pelanggaran = tb_pelanggaran.id_pelanggaran where tb_detail_pelanggaran.id_pelanggaran='$id_pelanggaran'";
        return $this->db->query($query)->result_array();
   }

    public function identitas($id_pelanggaran)
   {
        $query = "SELECT `tb_pelanggaran`.*, `tb_siswa`.`nama_siswa`, tb_siswa.kelas
        FROM `tb_pelanggaran` JOIN `tb_siswa`
        ON `tb_pelanggaran`.`nisn` = `tb_siswa`.`nisn` where tb_pelanggaran.id_pelanggaran='$id_pelanggaran'";
        return $this->db->query($query)->row_array();
   }

   public function getpelringan()
   {
        $query = "SELECT `tb_pelanggaran`.*, `tb_siswa`.`nama_siswa`, tb_siswa.kelas
        FROM `tb_pelanggaran` JOIN `tb_siswa`
        ON `tb_pelanggaran`.`nisn` = `tb_siswa`.`nisn` where tb_pelanggaran.keterangan='pelanggaran ringan'";
        return $this->db->query($query)->result_array();
   }

   public function getpelsedang()
   {
        $query = "SELECT `tb_pelanggaran`.*, `tb_siswa`.`nama_siswa`, tb_siswa.kelas
        FROM `tb_pelanggaran` JOIN `tb_siswa`
        ON `tb_pelanggaran`.`nisn` = `tb_siswa`.`nisn` where tb_pelanggaran.keterangan='pelanggaran sedang'";
        return $this->db->query($query)->result_array();
   }

   public function getpelberat()
   {
        $query = "SELECT `tb_pelanggaran`.*, `tb_siswa`.`nama_siswa`, tb_siswa.kelas
        FROM `tb_pelanggaran` JOIN `tb_siswa`
        ON `tb_pelanggaran`.`nisn` = `tb_siswa`.`nisn` where tb_pelanggaran.keterangan='pelanggaran berat'";
        return $this->db->query($query)->result_array();
   }
}