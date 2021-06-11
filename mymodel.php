<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mymodel extends CI_Model {
    // public function getData($tabel){
    //     $mydata = $this->db->query("SELECT * FROM ".$tabel);
    //     return $mydata->result_array();
    // }

    // quey builder, pake:
    public function getData($tabel){
        $zn = $this->db->get($tabel);
        return $zn->result_array();
    }

    public function masukkan($tabel, $data){
        $zn = $this->db->insert($tabel, $data);
        return $zn;
    }

    public function hapus($tabel, $where){
        $zn = $this->db->delete($tabel, $where);
        return $zn;
    }

    public function perbarui($tabel, $data, $where){
        $zn = $this->db->update($tabel, $data, $where);
        return $zn;
    }

    public function getData_khusus($tabel, $where){
        // $this->db->order_by('Nomor', 'DESC');
        $zn = $this->db->get_where($tabel, $where);
        return $zn->result_array();
    }
}
