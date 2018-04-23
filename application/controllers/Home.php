<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Home_model', 'm');
    }

    function index() {
        $home = $this->m->get();
        $this->load->view('tampilan', ['content' => $this->load->view('home_list', ['home' => $home
                    ], true)
        ]);
    }

    function form() {
        $this->load->view('tampilan', ['content' => $this->load->view('home_form', '', true)
        ]);
    }


}
