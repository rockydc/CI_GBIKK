<?php

class Persembahan extends CI_Controller {
    public function index() {
        $data['judul']= 'Persembahan';
        // $this->load->view('persembahan/header',$data);
        $this->load->view('persembahan/persembahan',$data);
        $this->load->view('templates/footer');
    }
}