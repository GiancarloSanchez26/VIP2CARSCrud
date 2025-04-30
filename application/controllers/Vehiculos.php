<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehiculos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Vehiculo_model');
        $this->load->helper('url');
    }

    
    public function index() {
        $data['vehiculos'] = $this->Vehiculo_model->get_all();
        $this->load->view('vehiculos/index', $data);
    }

    public function create() {
        $this->load->view('vehiculos/create');
    }

    public function store() {
        $data = $this->input->post();
        $this->Vehiculo_model->insert($data);
        redirect('vehiculos');
    }

    public function edit($id) {
        $data['vehiculo'] = $this->Vehiculo_model->get($id);
        $this->load->view('vehiculos/edit', $data);
    }

    public function update($id) {
        $data = $this->input->post();
        $this->Vehiculo_model->update($id, $data);
        redirect('vehiculos');
    }

    public function delete($id) {
        $this->Vehiculo_model->delete($id);
        redirect('vehiculos');
    }
}

?>