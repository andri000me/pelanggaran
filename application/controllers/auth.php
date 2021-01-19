<?php

class auth extends CI_Controller
{
   public function index()
   {
       if (!$this->session->userdata('username')) {
         
         $data = [
            'title' => 'Login'
         ];
         $this->load->view('login_templates/Header', $data);
         $this->load->view('Auth/login', $data);
         $this->load->view('login_templates/Footer');
      }else{
         redirect('beranda');
      }
   }

   public function login()
   {
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $user = $this->db->get_where('tb_user', ['username' => $username])->row_array();
      
       if ($user) {
         if ($user['password'] == $password) {
            $data = [
               'username' => $user['username'],
               'password' => $user['password'],
               'level' => $user['level']
            ];
            $this->session->set_userdata($data);
             $this->session->set_flashdata('flash', 'Login Berhasil');
            redirect('beranda');
         } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
            redirect('auth');
         }
      } else {
         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login gagal, periksa kemali username/password</div>');
         redirect('auth');
      }      
   }

   public function logout()
   {
      $this->session->unset_userdata('username');
      $this->session->unset_userdata('level');
      $this->session->unset_userdata('password');

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
      redirect('auth');
   }
}
