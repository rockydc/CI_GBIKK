<?php

class Rekap_model extends CI_model{

    public function getRekap(){

        $this->db->order_by('id');
        return $this->db->get('jemaat')->result_array();

    }

}
