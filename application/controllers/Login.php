<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('AuthModel');
    }

    function index(){
        if($this->session->userdata('masuk') == TRUE){
            redirect('dashboard', 'refresh');
        }else{
            $this->load->view('login');
        }
    }

    function action(){
        $nisn = $this->input->post('nisn', TRUE);
        $password = $this->input->post('password', TRUE);

        $check = $this->AuthModel->check($nisn, $password);

        if($check->num_rows() > 0){
            $data = $check->row_array();
            $this->session->set_userdata('masuk', TRUE);
            $this->session->set_userdata('siswaid', $data['id']);
            $this->session->set_userdata('nama', $data['nama']);

            redirect('dashboard', 'refresh');
        }else{
            $this->session->set_flashdata("err", 'NISN Atau Password Salah !');
            redirect($_SERVER['HTTP_REFERER'], 'refresh');
        }
        
    }
}