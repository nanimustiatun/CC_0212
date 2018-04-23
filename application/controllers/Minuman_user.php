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
class Minuman_user extends CI_Controller{
    function index(){
        $this->load->model('Minuman_model');
        $minuman = $this->Minuman_model->get();
        $this->load->view('tampilan',['content' => $this->load->view('minuman_userlist',['minuman' => $minuman],true)]);
    }
}
