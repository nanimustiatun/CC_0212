<?php

class Login extends CI_Controller{
    function index(){
        $this->load->helper('captcha');
        $config =[
            'img_path' => './captcha/',
            'img_url' => base_url('captcha')
        ];
        $cap = create_captcha($config);
        $this->load->view('tampilan', ['content' => $this->load->view('login_form', ['cap' => $cap], true)
        ]);
//        $this->load->view('login_form',[
//                'cap' => $cap
//            ]);
    }
    function validasi(){
        if (strtolower($_POST['word']) !=  strtolower($_POST['captcha'])){
            $this->session->set_flashdata(['error' => 'captcha salah']);
            redirect('login');
        } else{
            unset($_POST['word']);
            unset($_POST['captcha']);
        }
        $_POST['password'] = md5($_POST['password']);
        $r = $this->db->where($this->input->post())->get('user')->row_array();
        if(count($r)>0){
            $this->session->set_userdata([
                'username' => $r['username'],
                'nama' => $r['nama']
            ]);
            redirect('makanan');
        }else{
            $this->session->set_flashdata(['error' => 'username/password salah']);
            redirect('login');
        }
    }
    function logout(){
        $this->session->unset_userdata([
                'username',
                'nama'
            ]);
            redirect('home');
    }
}
