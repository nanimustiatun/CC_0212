<?php

class Makanan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Makanan_model', 'm');
    }

    function index() {
        $makanan = $this->m->get();
        $this->load->view('template', ['content' => $this->load->view('makanan_list', ['makanan' => $makanan
                    ], true)
        ]);
    }

    function form() {
        $this->load->view('template', ['content' => $this->load->view('makanan_form', '', true)
        ]);
    }

    function save() {
        $config['upload_path'] = './foto_makanan/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|rar|zip';
        $config['max_size'] = '10000';
        $this->load->library('upload',$config);
        
        if(!$this->upload->do_upload('foto')){
            echo '<pre>';
            print_r($this->upload->display_errors());
        }else{
            $data = $this->upload->data();
            $_POST['foto'] = $data['file_name'];
            $this->m->save($this->input->post());
            redirect('makanan');
    }
    }
    function del($id_ma){
        $r = $this->m->find($id_ma);
        $f = './foto_makanan/'.$r['foto'];
        unlink($f);
        $this->m->del($id_ma);
        redirect('makanan');
    }
    function edit($id_ma){
       $this->load->view('template', ['content' => $this->load->view('makanan_form',['data' => $this->m->find($id_ma)], true)
        ]);
    }
    function update(){
        $id_ma = $this->input->post('id_ma');
        $data = $this->input->post();
        $this->m->update($id_ma,$data);
        redirect('makanan');
    }

}
