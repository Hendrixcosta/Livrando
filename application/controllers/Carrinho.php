<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Carrinho extends CI_Controller {
    
    
    public function index() {
        
            $data['titulo'] = 'Carrinho de compras';
            $this->load->view('header', $data);
            
            $this->load->library('livrofactory');
            
            if (isset($_COOKIE['lista_isbns']) && !empty($_COOKIE['lista_isbns'])){
                
                $lista_isbns = unserialize($_COOKIE['lista_isbns']);
                $data['livros'] = array();
                foreach ($lista_isbns as $isbn){
                    $data ["livros"][] = $this->livrofactory->getLivroIsbn($isbn);
                }
                $data['quantidade'] = "Você tem ". count($lista_isbns). " Livros no carrinho";
                $this->load->view('carrinho', $data);
            }else {
                $data['quantidade'] = "Você nao tem nenhum livro no carrinho!";
                $this->load->view('carrinho', $data);
            }
            
            $data['categorias'] =  $this->livrofactory->getCategorias();
            $this->load->view('caixadeNavegacao', $data);
            
            
            $this->load->view('footer');
        
    }

   
    public function add ($isbn){
        if (isset($_COOKIE['lista_isbns'])){
            
            $lista_isbns = unserialize( $_COOKIE['lista_isbns']);
            $lista_isbns[] = $isbn;
            set_cookie("lista_isbns", serialize($lista_isbns), (time() + (3 * 24 * 3600)));
            echo "Adicionado!";
        }else {
            $lista_isbns = array();
            $lista_isbns[] = $isbn;
            set_cookie("lista_isbns", serialize($lista_isbns), (time() + (3 * 24 * 3600)));
             echo "Criado e Adicionado!";
        }
    }
    
    public function destroy (){
        delete_cookie("lista_isbns");
        echo "destruido";
    }
    
    
    public function ver (){  
        if ( isset($_COOKIE['lista_isbns'])){
            $data = unserialize($_COOKIE['lista_isbns']);
            echo "cookie definido como " . pd($data);
        }else {
             echo "cookie NAO definido " ;
        } 
    }
    
    

}
