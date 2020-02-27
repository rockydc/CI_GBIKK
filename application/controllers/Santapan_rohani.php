<?php


class Santapan_rohani extends CI_Controller {
    public function index() {
        $data['judul']= 'Santapan Rohani';
        $this->load->view('santapan_rohani/kesaksian',$data);
        $this->load->view('santapan_rohani/saat_teduh');
        $this->load->view('santapan_rohani/tips');
        $this->load->view('templates/footer');
    }
}