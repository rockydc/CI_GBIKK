<?php

class Event_model extends CI_model{

    public function getAllEvent(){

        $this->db->order_by('id_event');
        return $this->db->get('event')->result_array();

    }
    public function get3Event(){
        $this->db->order_by('id_event','DESC');
        return $this->db->get('event','3')->result_array();

    }


    public function tambahEvent()  {
        $data = [
            "judul" => $this->input->post('judul',true),
            "tanggal" => $this->input->post('tanggal'),
            "deskripsi" => $this->input->post('deskripsi',true)

        ];

        $this->db->insert('event', $data);
    }

    public function hapusEvent($id_event){
        $this->db->delete('event', ['id_event' => $id_event]);

    }

    public function getEventById($id_event){
        return $this->db->get_where('event', ['id_event' => $id_event])->row_array();
    }
}