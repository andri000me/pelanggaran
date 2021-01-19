<?php
    class Siswa extends CI_Controller{
        function __construct(){
            parent:: __construct();
             $this->load->model('Model_Siswa');
            // if($this->session->username == null){
            //     redirect("ANROC_Auth");
            // }
        }
        function index(){
            $data['title']="Data Siswa";
            $data['siswa'] = $this->Model_Siswa->getAllsiswa();
            $this->load->view("Header",$data);
            $this->load->view("Menu",$data);
            $this->load->view("Siswa/List_Siswa",$data);
            $this->load->view("footer",$data);
        }

        function Form_Siswa(){

            $data['title']="Tambah Siswa";
            $this->load->view("Header",$data);
            $this->load->view("Menu",$data);
            $this->load->view("Siswa/Add_Siswa",$data);
            $this->load->view("footer",$data);
    
        }

        function Add_Siswa(){

        $nisn = $this->input->post('nisn');
        $nama_siswa = $this->input->post('nama_siswa');
        $kelas = $this->input->post('kelas');
        $jk = $this->input->post('jk');
        $alamat = $this->input->post('alamat');
        $tempat = $this->input->post('tempat_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $nama_ayah = $this->input->post('nama_ayah');
        $nama_ibu = $this->input->post('nama_ibu');
        $no_tlp = $this->input->post('no_tlp');
        $data = [
                'nisn' => $nisn,
                'nama_siswa' => $nama_siswa,
                'kelas' => $kelas,
                'jk' => $jk,
                'alamat' => $alamat,
                'tempat_lahir' => $tempat,
                'tgl_lahir' => $tgl_lahir,
                'nama_ayah' => $nama_ayah,
                'nama_ibu' => $nama_ibu,
                'no_telp' => $no_tlp,
                'status' => 'aktif'
            ];
        $this->Model_Siswa->insert($data, 'tb_siswa');

        $this->session->set_flashdata('flash', 'Ditambah');
        
        redirect('Siswa');
    
    }

     public function Hapus_Siswa($id)
   {
      $this->Model_Siswa->delete($id);
      $this->session->set_flashdata('flash', 'DiHapus');
      redirect('Siswa');
   }

    public function Edit_Siswa($nisn)
   {
      $data['title'] = 'Edit';
      $data['siswa'] = $this->Model_Siswa->getuserById($nisn);
      $this->form_validation->set_rules('nisn', 'nisn', 'required');
      $this->form_validation->set_rules('nama_siswa', 'nama_siswa', 'required');
      $this->form_validation->set_rules('kelas', 'kelas', 'required');
      $this->form_validation->set_rules('jk', 'jk', 'required');
      $this->form_validation->set_rules('alamat', 'alamat', 'required');
      $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required');
      $this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required');
      $this->form_validation->set_rules('tgl_lahir', 'tanggal_lahir', 'required');
      $this->form_validation->set_rules('nama_ayah', 'nama_ayah', 'required');
      $this->form_validation->set_rules('nama_ibu', 'nama_ibu', 'required');
      $this->form_validation->set_rules('no_telp', 'no_telp', 'required');
      $this->form_validation->set_rules('status', 'status', 'required');

      if ($this->form_validation->run() == false) {
         $this->load->view("Header",$data);
         $this->load->view("Menu",$data);
         $this->load->view("Siswa/Edit_Siswa",$data);
         $this->load->view("footer",$data);
      } else {
         $this->Model_Siswa->Update_Siswa();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('Siswa');
      }
   }

}