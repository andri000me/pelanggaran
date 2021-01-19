<?php

class Model_Siswa extends CI_Model{

    public function getAllsiswa()
   {
      $query = "SELECT * from tb_siswa";
      return $this->db->query($query)->result_array();
   }

    public function insert($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function delete($id)
   {
      $this->db->delete('tb_siswa', ['nisn' => $id]);
   }

  public function getuserById($nisn)
   {
      return $this->db->get_where('tb_siswa', ['nisn' => $nisn])->row_array();
   }

    public function Update_Siswa()
   {
      $nisn = $this->input->post('nisn');
      $nama_siswa = $this->input->post('nama_siswa');
      $kelas = $this->input->post('kelas');
      $jk = $this->input->post('jk');
      $alamat = $this->input->post('alamat');
      $tempat_lahir = $this->input->post('tempat_lahir');
      $tgl_lahir = $this->input->post('tgl_lahir');
      $nama_ayah = $this->input->post('nama_ayah');
      $nama_ibu = $this->input->post('nama_ibu');
      $no_telp = $this->input->post('no_telp');
      $status = $this->input->post('status');

       $data = [
        'nisn' => $nisn,
        'nama_siswa' => $nama_siswa,
        'kelas' => $kelas,
        'jk' => $jk,
        'alamat' => $alamat,
        'tempat_lahir' => $tempat_lahir,
        'tgl_lahir' => $tgl_lahir,
        'nama_ayah' => $nama_ayah,
        'nama_ibu' => $nama_ibu,
        'no_telp' => $no_telp,
        'status' => $status
      ];

      $this->db->update('tb_siswa', $data, ['nisn' => $this->input->post('nisn')]);
   }


}