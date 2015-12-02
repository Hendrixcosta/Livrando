<?php


defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * @author Hendrix
 */
class Navegar extends CI_Controller  {

    public function index() {

        
        
        if (isset($_GET['isbn'])){
                
            $data['titulo'] = 'Livrando Bookstore';
            $this->load->view('header', $data);
    
            
            $data = array('livro' => $this->livrofactory->getLivroIsbn($_GET['isbn']));
            $data['categorias'] =  $this->livrofactory->getCategorias();
            
            
           // pd($data);
            
            $this->load->view('navegar', $data);
            //$this->load->view('caixadeNavegacao', $data);
            $this->load->view('footer');
                
        }else {
            echo "nenhum livro selecionado!<br>";
            echo "<a href='https://com222-hendrixcosta.c9.io/Navegar?isbn=0596005601'>TEntar<\a>";
        }
        
        

    }

}
