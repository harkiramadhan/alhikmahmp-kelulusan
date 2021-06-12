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

        $this->load->view('dashboard', $var);
    }

    function export($siswaid){
        ob_clean();
        $var['siswa'] = $this->AuthModel->getSiswaById($siswaid);
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
        $mpdf->showWatermarkImage = true;
        $mpdf->watermarkImgBehind = true;
        $mpdf->WriteHTML(
            '<watermarkimage src='.base_url('assets/img/bg-pdf.jpg').' alpha="1" size="210,297" position="0,0" />'
        );

        $html = $this->load->view('export', $var, TRUE);
        $mpdf->WriteHTML($html);
        $mpdf->Output("Laporan Kelulusan".$var['siswa']->nama.".pdf", "I");
        ob_end_flush();
    }
}