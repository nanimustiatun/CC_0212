<?php

class Minuman extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Minuman_model', 'm');
    }

    function index() {
        $minuman = $this->m->get();
        $this->load->view('template', ['content' => $this->load->view('minuman_list', ['minuman' => $minuman
                    ], true)
        ]);
    }

    function form() {
        $this->load->view('template', ['content' => $this->load->view('minuman_form', '', true)
        ]);
    }

    function save() {
        $config['upload_path'] = './foto_minuman/';
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
            redirect('minuman');
    }
    }
    function del($id_mi){
        $r = $this->m->find($id_mi);
        $f = './foto_minuman/'.$r['foto'];
        unlink($f);
        $this->m->del($id_mi);
        redirect('minuman');
    }
    function edit($id_mi){
       $this->load->view('template', ['content' => $this->load->view('minuman_form',['data' => $this->m->find($id_mi)], true)
        ]);
    }
    function update(){
        $id_mi = $this->input->post('id_mi');
        $data = $this->input->post('');
        $this->m->update('$id_mi',$data);
        redirect('minuman');
    }

}
