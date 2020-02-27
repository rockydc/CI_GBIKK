<?php 

class Warta_model extends CI_model {

    public function getWarta(){
        
      $this->db->order_by('id_warta','DESC');
      return $this->db->get('warta','1')->result_array();
    }

    // public function upload(){
    //     $config['upload_path'] = './path/warta/';
    //     $config['allowed_types'] = 'pdf';
    //     $config['max_size']  = '2048';
    //     $config['remove_space'] = TRUE;
      
    //     $this->load->library('upload', $config); // Load konfigurasi uploadnya
    //     if($this->upload->do_upload('warta')){ // Lakukan upload dan Cek jika proses upload berhasil
    //       // Jika berhasil :
    //       $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
    //       return $return;
    //     }else{
    //       // Jika gagal :
    //       $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
    //       return $return;
    //     }
    //   }
    
  
    
      public function upload(){
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'pdf';
        $config['max_size']  = '8000';
        $config['remove_space'] = TRUE;

     
      
        $this->load->library('upload', $config); // Load konfigurasi uploadnya
        if($this->upload->do_upload('warta')){ // Lakukan upload dan Cek jika proses upload berhasil
          // Jika berhasil :
          $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
          return $return;
        }else{
          // Jika gagal :
          $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
          return $return;
        }
    
}


public function save(){
  $data = array(
    'tanggal'=>$this->input->post('tanggal'),
    'nama_file' => $_FILES['warta']['name']
 
  );


  $config['upload_path'] = './uploads/';
  $config['allowed_types'] = 'pdf';
  $config['max_size']  = '32000';
  $config['remove_space'] = TRUE;



  $this->load->library('upload', $config); // Load konfigurasi uploadnya
  if($this->upload->do_upload('warta')){ // Lakukan upload dan Cek jika proses upload berhasil
    // Jika berhasil :
    $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
    return $return;
  }else{
    // Jika gagal :
    $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
    return $return;
  }

  $this->db->insert('warta', $data);
}
}
