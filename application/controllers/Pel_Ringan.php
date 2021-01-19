<?php
class Pel_Ringan extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('Model_Laporan');
        // $this->load->model('Model_User');
        // if($this->session->username == null){
        //     redirect("ANROC_Auth");
        // }
    }
    function index(){

        $data['title']="Data Pelanggaran Siswa Kategori Ringan";
        $data['pelringan'] = $this->Model_Laporan->getpelringan();
        $this->load->view("Header",$data);
        $this->load->view("Menu",$data);
        $this->load->view("Pelanggaran/Pel_Ringan",$data);
        $this->load->view("footer",$data);
    
    }

    function Form_User(){

        $data['title']="Tambah User";
        $this->load->view("Header",$data);
        $this->load->view("Menu",$data);
        $this->load->view("User/Add_User",$data);
        $this->load->view("footer",$data);
    
    }

    function Add_User(){

        $username = $this->input->post('username');
        $pass = $this->input->post('pass');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $level = $this->input->post('level');
        $data = [
                'username' => $username,
                'password' => $pass,
                'nama' => $nama_lengkap,
                'level' => $level
            ];
        $this->Model_User->insert($data, 'tb_user');

        $this->session->set_flashdata('flash', 'Ditambah');
        
        redirect('User');
    
    }

    public function Hapus_User($id)
   {
      $this->Model_User->delete($id);
      $this->session->set_flashdata('flash', 'DiHapus');
      redirect('User');
   }

   public function Edit_User($id_user)
   {
      $data['title'] = 'Edit';
      $data['user'] = $this->Model_User->getuserById($id_user);
      $this->form_validation->set_rules('username', 'username', 'required');
      $this->form_validation->set_rules('password', 'password', 'required');
      $this->form_validation->set_rules('nama', 'nama', 'required');
      $this->form_validation->set_rules('level', 'level', 'required');

      if ($this->form_validation->run() == false) {
         $this->load->view("Header",$data);
         $this->load->view("Menu",$data);
         $this->load->view("User/Edit_User",$data);
         $this->load->view("footer",$data);
      } else {
         $this->Model_User->Update_User();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('User');
      }
   }
    
}

?>