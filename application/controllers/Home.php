<?php


class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
         //menjalankan fungsi construct

        // $this->load->database(); 
        //melakukan load database di kelas mahasiswa, jadi berlaku untuk semua method
           
        $this->load->model('News_model');
        $this->load->model('Event_model');
        $this->load->model('Doa_model');
        $this->load->model('Warta_model');
        $this->load->library('form_validation');
    
    }

    public function index() {
        $data['judul'] = 'GBI KASIH KARUNIA';
        $data['warta'] = $this->Warta_model->getWarta();
        $data['video'] = $this->News_model->lihatVideo();
        $data['event']= $this->Event_model->get3event();

        $this->load->view('templates/header_home',$data);
        $this->load->view('templates/navbar');
        $this->load->view('home/index',$data);
        $this->load->view('templates/footer');
    }

    public function tambahdoa() {

        $this->Doa_model->tambahdoa();
        redirect('');

    }

}