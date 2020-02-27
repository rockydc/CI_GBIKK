<?php


class Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
         //menjalankan fungsi construct

        // $this->load->database(); 
        //melakukan load database di kelas mahasiswa, jadi berlaku untuk semua method
        $this->load->helper(array('form','url'));
        $this->load->model('News_model');   
        $this->load->model('Event_model');
        $this->load->model('Warta_model');
        $this->load->model('Doa_model');
        $this->load->model('m_login');
        $this->load->model('Rekap_model');
        $this->load->library('form_validation');
    
    }
    
    public function index() {
     
      
        $this->load->view('admin/login');

    }
    public function aksi_login(){
        $username = $this->input->post('username',true);
        $password = $this->input->post('password',true);
        $where = array (
            'username' => $username,
            'password' => $password
        );

        $cek = $this->m_login->cek_login("admin",$where)->num_rows();
        if($cek > 0) {
            $data_session = array(
                'nama'=> $username,
                'status' => 'login'

            );
            $this->session->set_userdata($data_session);
            redirect('admin/dashboard');
        }else{
            $this->session->set_flashdata('flash','salah');
     
            redirect('admin/');
        }

    }

    function logout(){
		$this->session->sess_destroy();
		redirect('admin/');
	}
    public function dashboard() {
        $data['judul']= 'Admin Kasih Karunia';
        $this->load->view('templates/header_admin',$data);
        $this->load->view('admin/index');
        $this->load->view('templates/footer_admin');
    }
    public function doa() {

        $data['doa']= $this->Doa_model->getdoa();
        $data['judul'] = 'Doa Jemaat GBI Kasih Karunia';
        
        $this->load->view('templates/header_admin',$data);
        $this->load->view('admin/doa');
        $this->load->view('templates/footer_admin');
    }
    public function event(){
        $data['event']= $this->Event_model->getAllEvent();
        $data['judul']= 'Admin Kasih Karunia Event';
        // $data['detail']=  $this->Event_model->getEventById($id_event);

        $this->load->model('Event_model');
        
        

        $this->load->view('templates/header_admin',$data);
        $this->load->view('admin/upcoming');
        $this->load->view('templates/footer_admin');
        
        }
    public function tambahEvent(){
            
            
            $this->Event_model->tambahEvent();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('admin/event');
        }
    public function hapusEvent($id_event){

            $this->Event_model->hapusEvent($id_event);
            $this->session->set_flashdata('flash', 'dihapus');
            redirect('admin/event');
            
        }

    public function detail_event($id_event){


            
            
        }

    
    public function video_news(){
        

        $data['judul']= 'Admin Kasih Karunia News';
        $this->load->view('templates/header_admin',$data);
        $this->load->view('admin/news');
        $this->load->view('templates/footer_admin');

    } 

    public function insertVideo(){

        $this->News_model->tambahVideo();
        $this->session->set_flashdata('flash','Diupdate');
        redirect('admin/video_news');

    }
        
        
    public function warta(){
        

        $data['judul']= 'Admin Kasih Karunia News';
        
        $this->load->view('templates/header_admin',$data);
        $this->load->view('admin/warta');
        $this->load->view('templates/footer_admin');

    } 
    public function uploadwarta()
    {   
        $data = [
            'tanggal'=>$this->input->post('tanggal'),
            'nama_file' => $_FILES['warta']['name']

        ];
        $this->db->insert('warta',$data);
        $this->Warta_model->save();
        $this->session->set_flashdata('flash','Diupdate');
        redirect('admin/warta');

    }

    public function tambahrekap(){
        $data = [
            "jumlah" => $this->input->post('jumlah',true),
            "tanggal" => $this->input->post('tanggal'),
            "ibadah" => $this->input->post('ibadah',true)

        ];
        $this->db->insert('jemaat', $data);
        redirect('admin/rekapJemaat');

    }
    
 
    public function rekapJemaat() {
       
        
     
        $data['rekap']= $this->Rekap_model->getRekap();
        $data['judul']= 'Admin Kasih Karunia Rekap Jemaat';
        // $data['detail']=  $this->Event_model->getEventById($id_event);

        
        

        $this->load->view('templates/header_admin',$data);
        $this->load->view('admin/rekap_jemaat',$data);
        $this->load->view('templates/footer_admin');
        
    }

    }
    
    
