<?php 

class News_model extends CI_model {

    public function lihatVideo() {
        $this->db->order_by('id_video');
        return $this->db->get('video_news')->result_array();

    }

    public function tambahVideo(){
        $data = [
                "tanggal" => $this->input->post('tanggal'),
                "detail_video" => $this->input->post('detail_video',true)

        ];
        $this->db->where('id_video',1);
        $this->db->update('video_news', $data);

    }

    
}