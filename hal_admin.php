<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hal_admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('mymodel');

        if($this->session->userdata('status') != "login"){
            redirect(base_url());
        }
    }

    public function index()
    {
        $dataProject = $this->mymodel->getData("project");
            
        $data = array(
            "dataMu" => $dataProject
        );
    
        $this->load->view("Home", $data);
	}

	public function baca_form(){
        $this->load->view('form_tambah');
    }  

    public function tambah_data(){
        $dataInputan = array(
            'NamaBarang' => $this->input->post('NamaBarang'),
            'JenisBarang' => $this->input->post('JenisBarang'),
            'Volume' => $this->input->post('Volume'),
            'Harga' => $this->input->post('Harga'),
            'Stok' => $this->input->post('Stok'),
        );

        $this->mymodel->masukkan('project', $dataInputan);
        redirect(base_url()."index.php/hal_admin/");
    }
    
    public function hapus_data($penunjuk){
        $dataPenunjuk = array(
            'Nomor' => $penunjuk
        );
        $this->mymodel->hapus('project', $dataPenunjuk);
        redirect(base_url()."index.php/hal_admin/");
    }

    public function ambil_dataWhere($penunjuk){
        $dataPenunjuk = array(
            'Nomor' => $penunjuk
        );
        $dataProject = $this->mymodel->getData_khusus("project", $dataPenunjuk);
        $data = array(
            "dataMu" => $dataProject
        );

        $this->load->view("form_edit", $data);
    }
    
    public function update_data(){
        $dataInputan = array(
            'NamaBarang' => $this->input->post('NamaBarang'),
            'JenisBarang' => $this->input->post('JenisBarang'),
            'Volume' => $this->input->post('Volume'),
            'Harga' => $this->input->post('Harga'),
            'Stok' => $this->input->post('Stok'),
        );

        $dataPenunjuk = array(
            'Nomor' => $this->input->post('Nomor')
        );
        $dataProject = $this->mymodel->perbarui("project", $dataInputan, $dataPenunjuk);
        redirect(base_url()."index.php/hal_admin/");
    }

    public function form_daftarAPI(){
        $this->load->view('form_daftarAPI');
    }  

    public function aksi_daftarAPI(){
        $dataInputan = array(
            'Nama' => $this->input->post('Nama'),
            'Auth' => $this->input->post('kode'),
        );

        $this->mymodel->masukkan('user_api', $dataInputan);
        redirect(base_url()."index.php/hal_admin/");
    }
}
