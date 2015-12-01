<?php


defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * @author Hendrix
 */
class Contato extends CI_Controller  {

    public function index() {
        $data['titulo'] = 'Contato';
        $this->load->view('header', $data);
        
        $this->load->view('contato');
        
        $this->load->library('livrofactory');
        $data['categorias'] =  $this->livrofactory->getCategorias();
        $this->load->view('caixadeNavegacao', $data);
        
        $this->load->view('footer');
    }
}
