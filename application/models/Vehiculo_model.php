<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehiculo_model extends CI_Model {

    public function __construct() {
        parent::__construct(); // Muy importante para que cargue $this->db correctamente
    }

    public function get_all() {
        return $this->db->get('vehiculos')->result();
    }

    public function get($id) {
        return $this->db->get_where('vehiculos', ['id' => $id])->row();
    }

    public function insert($data) {
        return $this->db->insert('vehiculos', $data);
    }

    public function update($id, $data) {
        return $this->db->where('id', $id)->update('vehiculos', $data);
    }

    public function delete($id) {
        return $this->db->delete('vehiculos', ['id' => $id]);
    }

    public function exists_by_placa($placa) {
        return $this->db->where('placa', $placa)->count_all_results('vehiculos') > 0;
    }
}
