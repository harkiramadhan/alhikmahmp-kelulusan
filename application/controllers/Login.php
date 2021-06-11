<?php
class Login extends CI_Controller{
    function index(){
        $this->load->view('login');
    }

    function action(){
        $nis = $this->input->post('nis', TRUE);
        $password = $this->input->post('password', TRUE);

        echo $nis;
        echo $password;
    }
}