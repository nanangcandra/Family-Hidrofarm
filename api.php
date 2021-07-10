<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class api extends CI_Controller {
        
        public function __construct(){
            parent::__construct();
            $this->load->model('mymodel');
        }

        public function index()
        {
            $aksesClient = $this->input->get('kode');
            $dataPenunjuk = array(
                'Auth' => $aksesClient
            );

            $cek = count($this->mymodel->getData_khusus("user_api", $dataPenunjuk));
            
            if ($cek > 0){
                // A11201912181
                $dataProject = $this->mymodel->getData("project");
                // $dataBarang = $this->mymodel->getData("barang");

                $data = array(
                    "dataMu" => $dataProject
                    // "dataBarang" => $dataBarang
                );

                echo json_encode($data);
            }
            else{
                echo "Anda tidak punya akses";
            }
        }
    }
?>