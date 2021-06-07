<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hal_utama extends CI_Controller {

	public function index()
	{
        $this->load->model('mymodel');
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
        $this->load->model('mymodel');
        $dataInputan = array(
            'Alat' => $this->input->post('Alat'),
            'Fungsi' => $this->input->post('Fungsi'),
        );

        $this->mymodel->masukkan('project', $dataInputan);
        redirect(base_url(), 'refresh');
    }
    
    public function hapus_data($penunjuk){
        $dataPenunjuk = array(
            'Nomor' => $penunjuk
        );

        $this->load->model('mymodel');
        $this->mymodel->hapus('project', $dataPenunjuk);
        redirect(base_url(), 'refresh');
    }

    public function ambil_dataWhere($penunjuk){
        $dataPenunjuk = array(
            'Nomor' => $penunjuk
        );
        
        $this->load->model('mymodel');
        $dataProject = $this->mymodel->getData_khusus("project", $dataPenunjuk);
        $data = array(
            "dataMu" => $dataProject
        );

        $this->load->view("form_edit", $data);
    }
    
    public function update_data(){
        $dataInputan = array(
            'Alat' => $this->input->post('Alat'),
            'Fungsi' => $this->input->post('Fungsi'),
        );

        $dataPenunjuk = array(
            'Nomor' => $this->input->post('Nomor')
        );
        $this->load->model('mymodel');
        $dataProject = $this->mymodel->perbarui("project", $dataInputan, $dataPenunjuk);
        redirect(base_url(), 'refresh');
    }
    // public function fungsi($param){
	// 	// echo "Hello World".$param;
	// 	$this->load->view('Home');
	// }

	// public function param($nama){
	// // 	echo "Selamat Datang kepada ".$nama;
	// $data2 = array(
	// 	'nama' => $nama
	// );
	// $this->load->view('Home', $data2);
	// }
}
