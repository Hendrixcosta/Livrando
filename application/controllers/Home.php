<?php


defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * @author Hendrix
 */
class Home extends CI_Controller  {

    public function index() {

        
        $data['titulo'] = 'Livrando Bookstore';
        $this->load->view('header', $data);

        
        $data = array('livros' => $this->livrofactory->getRandon());
        $data['categorias'] =  $this->livrofactory->getCategorias();
        
        
        //pd($data);
        
        $this->load->view('livros_view', $data);
        //$this->load->view('caixadeNavegacao', $data);
        $this->load->view('footer');

    }

}
