<?php
class Pelanggaran extends CI_Controller{
    
    function __construct(){
        parent:: __construct();
        $this->load->model('Model_Pelanggaran');
        $this->load->model('Model_Siswa');
        // if($this->session->username == null){
        //     redirect("ANROC_Auth");
        // }
    }
    function index(){
        $data['title']="Pelanggaran";
        $data['pelanggaran'] = $this->Model_Pelanggaran->getAllpel();
       
        $data['siswa'] = $this->Model_Siswa->getAllsiswa();
        $this->load->view("Header",$data);
        $this->load->view("Menu",$data);
        $this->load->view("Pelanggaran/List_Pel",$data);
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

   public function Proses_Pel()
   {
    
    $nama_siswa = $this->input->post('nama_siswa');
    $bobot_nilai = $this->input->post('bobot_nilai');
    $langgar = $this->input->post('langgar');
    $kode = $this->input->post('kode');
    $total = 0;

    // $cek = $this->db->query("SELECT * FROM tb_pelanggaran where nisn='".$this->input->post('nama_siswa')."'")->num_rows();

    // if($cek<=0){
         for($i=0;$i<count($langgar);$i++){
            $checkbox = $langgar[$i];
            $nilai = $bobot_nilai[$i];

            $this->Model_Pelanggaran->savedetail($kode,$checkbox,$nilai);

            $total+=$nilai; 
            
            }

            if($total<=35){
                $ket = "pelanggaran ringan";
                $sanksi = "peringatan ke-1";
            } else if($total >= 36 and $total <=55 ){
                $ket = "pelanggaran ringan";
                $sanksi = "peringatan ke-2";
             }else if($total >=56 and $total <=75 ){
                $ket = "pelanggaran sedang";
                $sanksi = "panggilan orang tua ke-1";
             }else if($total >=76 and $total <=95 ){
                $ket = "pelanggaran sedang";
                $sanksi = "panggilan orang tua ke-2";
             }else if($total >=96 and $total <=150 ){
                $ket = "pelanggaran sedang";
                $sanksi = "panggilan orang tua ke-3";
             }else if($total >=151 and $total <=249 ){
                $ket = "pelanggaran berat";
                $sanksi = "skorsing";
             }else{
                $ket = "pelanggaran berat";
                $sanksi = "dikembalikan keorang tua";
             }

           
        $this->Model_Pelanggaran->simpel($kode,$nama_siswa,$total,$ket,$sanksi);

        $this->session->set_flashdata('flash', 'Ditambah');
        
        redirect('Lap_Pel');

    // }

   }
   
}
?>