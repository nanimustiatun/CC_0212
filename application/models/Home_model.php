<?php

class Home_model extends CI_Model{
    function get(){
        return $this->db->get('home')->result_array();
    }
}
