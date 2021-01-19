<?php
class Jenis_Pelanggaran extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('Model_Jenis');
        // if($this->session->username == null){
        //     redirect("ANROC_Auth");
        // }
    }
    function index(){
        $data['title']="Jenis Pelanggaran";
        $data['jenis'] = $this->Model_Jenis->getAlljenis();
        $this->load->view("Header",$data);
        $this->load->view("Menu",$data);
        $this->load->view("Jenis/List_Jenis",$data);
        $this->load->view("footer",$data);
    }
    
    function Form_Jenis(){

        $data['title']="Tambah Jenis Pelanggaran";
        $this->load->view("Header",$data);
        $this->load->view("Menu",$data);
        $this->load->view("Jenis/Add_Jenis",$data);
        $this->load->view("footer",$data);
    
    }

    function Add_Jenis(){

        $jenis_pelanggaran = $this->input->post('jenis_pelanggaran');
        $bobot_nilai = $this->input->post('bobot_nilai');
      
        $data = [
                'jenis_pelanggaran' => $jenis_pelanggaran,
                'bobot_nilai' => $bobot_nilai
            ];
        $this->Model_Jenis->insert($data, 'tb_jenis_pelanggaran');

        $this->session->set_flashdata('flash', 'Ditambah');
        
        redirect('Jenis_Pelanggaran');
    
    }

    public function Hapus_Jenis($id)
   {
      $this->Model_Jenis->delete($id);
      $this->session->set_flashdata('flash', 'DiHapus');
      redirect('Jenis_Pelanggaran');
   }

   public function Edit_Jenis($id_jenis)
   {
      $data['title'] = 'Edit';
      $data['jenis'] = $this->Model_Jenis->getuserById($id_jenis);
      $this->form_validation->set_rules('jenis_pelanggaran', 'jenis_pelanggaran', 'required');
      $this->form_validation->set_rules('bobot_nilai', 'bobot_nilai', 'required');

      if ($this->form_validation->run() == false) {
         $this->load->view("Header",$data);
         $this->load->view("Menu",$data);
         $this->load->view("Jenis/Edit_Jenis",$data);
         $this->load->view("footer",$data);
      } else {
         $this->Model_Jenis->Update_Jenis();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('Jenis_Pelanggaran');
      }
   }
   
}
?>