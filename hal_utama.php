<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hal_utama extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('mymodel');
    }

	public function index()
    {
        $this->load->view("form_login");
	}

    public function aksi_login()
    {
        $Username = $this->input->post('Username');
        $Password = md5($this->input->post('Password'));

        $dataPenunjuk = array(
            'Username' => $Username,
            'Password' => $Password,
        );
        
        // $dataProject = $this->mymodel->getData_khusus("dUser", $dataPenunjuk);
        // var_dump($dataProject);

        $cek = count($this->mymodel->getData_khusus("dUser", $dataPenunjuk));
        // echo $cek;

        if ($cek > 0){
            $data_session = array(
                'nama' => $Username,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);

            redirect(base_url()."index.php/hal_admin");
        }
        else{
            redirect(base_url());
        }
	}

    public function daftar(){
        $this->load->view("form_daftar");
    }

    public function aksi_daftar(){
        $dataInputan = array(
            'Username' => $this->input->post('Username'),
            'password' => md5($this->input->post('Password')),
        );

        $this->mymodel->masukkan('dUser', $dataInputan);
        redirect(base_url(), 'refresh');
    }
    public function logout(){
       $this->session->sess_destroy();
       redirect(base_url());
    }
}
	

    
