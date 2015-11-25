<?php


defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * @author Hendrix
 */
class Home extends CI_Controller  {

    public function index() {

        
        $data['titulo'] = 'Livrando Bookstore';
        $this->load->view('header', $data);

        $this->load->library('livrofactory');
        $data = array('livros' => $this->livrofactory->getRandon());
        $this->load->view('exibirlivros', $data);
        
        //coloquei as duas funcionalidades na mesma pagina PHP        
        //$this->load->view('caixadeBusca');

        $data['categorias'] =  $this->livrofactory->getCategorias();
        $this->load->view('caixadeNavegacao', $data);
        
        $this->load->view('footer');

    }

}
