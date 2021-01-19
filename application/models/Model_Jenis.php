<?php

class Model_Jenis extends CI_Model{

    public function getAlljenis()
   {
      $query = "SELECT * from tb_jenis_pelanggaran";
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

  public function getuserById($id_jenis)
   {
      return $this->db->get_where('tb_jenis_pelanggaran', ['id_jenis_pelanggaran' => $id_jenis])->row_array();
   }

    public function Update_Jenis()
   {
      $jenis_pelanggaran = $this->input->post('jenis_pelanggaran');
      $bobot_nilai = $this->input->post('bobot_nilai');

      $data = [
        'jenis_pelanggaran' => $jenis_pelanggaran,
        'bobot_nilai' => $bobot_nilai
      ];

      $this->db->update('tb_jenis_pelanggaran', $data, ['id_jenis_pelanggaran' => $this->input->post('id_jenis')]);
   }

}