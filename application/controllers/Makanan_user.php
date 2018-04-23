<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dosen
 *
 * @author STMIK-I
 */
class Makanan_user extends CI_Controller{
    function index(){
        $this->load->model('Makanan_model');
        $makanan = $this->Makanan_model->get();
        $this->load->view('tampilan',['content' => $this->load->view('makanan_userlist',['makanan' => $makanan],true)]);
    }
}
