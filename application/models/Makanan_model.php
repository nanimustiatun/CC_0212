<?php

class Makanan_model extends CI_Model{
    function get(){
        return $this->db->get('makanan')->result_array();
    }
    function save($data){
        $this->db->insert('makanan',$data);
    }
    function del($id_ma){
        $this->db->where('id_ma',$id_ma)->delete('makanan');
    }
    function update($id_ma,$data){
        $this->db->where('id_ma',$id_ma)->update('makanan',$data);
    }
    function find($id_ma){
        return $this->db->where('id_ma',$id_ma)->get('makanan')->row_array();
    }
}
