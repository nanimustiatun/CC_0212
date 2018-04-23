<?php

class Minuman_model extends CI_Model{
    function get(){
        return $this->db->get('minuman')->result_array();
    }
    function save($data){
        $this->db->insert('minuman',$data);
    }
    function del($id_mi){
        $this->db->where('id_mi',$id_mi)->delete('minuman');
    }
    function update($id_mi,$data){
        $this->db->where('id_mi',$id_mi)->update('minuman',$data);
    }
    function find($id_mi){
        return $this->db->where('id_mi',$id_mi)->get('minuman')->row_array();
    }
}
