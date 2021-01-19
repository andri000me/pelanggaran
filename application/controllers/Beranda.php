<?php
    class Beranda extends CI_Controller{
        function __construct(){
            parent:: __construct();
            //if($this->session->username == null){
                //redirect("ANROC_Auth");
            //}
        }
        function index(){
            if (!$this->session->userdata('username')) {
                redirect('auth/login');
            }else{
                $data['title']="Sistem Pelanggaran Sekolah";
                $this->load->view("Header",$data);
                $this->load->view("Menu",$data);
                $this->load->view("Dashboard",$data);
                $this->load->view("footer",$data);
            }
        }
    }
?>