<?php 

class Doa_model extends CI_model{

    public function tambahdoa(){
        $data = [

            "nama"=> $this->input->post('nama', true),
            "email" => $this->input->post('email',true),
            "no_wa" => $this->input->post('no_wa',true),
            "isi_doa"=> $this->input->post("isi_doa")


        ];
        $this->db->insert('doa',$data);
    }

    public function getdoa(){
        $this->db->order_by('id_doa');
        return $this->db->get('doa')->result_array();
    }
}