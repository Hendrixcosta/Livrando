<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 *
 * @author Hendrix
 */
class ProductPage extends CI_Controller  {

    public function index() {
        $this->load->library("livrofactory");

        if (isset($_GET['isbn']) && !empty($_GET['isbn'])){
            $data = array("livros" => $this->livrofactory->getLivroIsbn($_GET['isbn']));
            $this->load->view('productPage', $data);
        }
        
        elseif(isset($_GET['title']) && !empty($_GET['title'])){

            $data['titulo'] = 'Livrando ' . $_GET['title'];
            $this->load->view('header', $data);
            
            $data = array("livros" => $this->livrofactory->getLivroTitle($_GET['title']));
            $this->load->view('productPage', $data);
            
            $data['categorias'] =  $this->livrofactory->getCategorias();
            $this->load->view('caixadeNavegacao', $data);
            
            $this->load->view('footer');
        }
        
        
        // getlivros > 0 retorna 1 livro especifico Ex.: getLivro("0321344758")
        // getlivros = o retorna array contendo todos livros
        // getlivros < 0 retorna 3 livros aleatorios
       

    
    
    
    





    }
}
