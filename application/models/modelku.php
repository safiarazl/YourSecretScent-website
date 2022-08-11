<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelku extends CI_Model {
    //query builder
    public function getData($tabel) {
        $dapat = $this->db->get($tabel);
        return $dapat->result_array();
    }
    public function createData($tabel, $data) {
        $dapat = $this->db->insert($tabel, $data);
        return $dapat;
    }
    public function deleteData($tabel, $where) {
        $dapat = $this->db->delete($tabel, $where);
        return $dapat;
    }
    public function updateData($tabel, $data, $where) {
        $dapat = $this->db->update($tabel, $data, $where);
        return $dapat;
    }
    public function getWhere($tabel, $where) {
        $dapat = $this->db->get_where($tabel, $where);
        return $dapat->result_array();
    }
}