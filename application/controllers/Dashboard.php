<?php
class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('AuthModel');

        if($this->session->userdata('masuk') != TRUE){
            redirect('login', 'refresh');
        }
    }

    function index(){
        $siswaid = $this->session->userdata('siswaid');

        $var['siswa'] = $this->AuthModel->getSiswaById($siswaid);

        $this->load->view('dashboard');
    }
}