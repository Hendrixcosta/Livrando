<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Carrinho extends CI_Controller {
    
    
    public function index() {
        
            $data['titulo'] = 'Carrinho de compras';
            $this->load->view('header', $data);
            
            $this->load->library('livrofactory');
            $data['categorias'] =  $this->livrofactory->getCategorias();
            
            
           
            
            
           
             
            if (isset($_COOKIE['lista_isbns']) && !empty($_COOKIE['lista_isbns'])){
                
                $lista_isbns = unserialize($_COOKIE['lista_isbns']);
                $data['livros'] = array();
                foreach (array_keys($lista_isbns) as $isbn){
                    
                   $data ["livros"][] = $this->livrofactory->getLivroIsbn($isbn);
                }
                $count=0;
                foreach ($lista_isbns as $isbn){$count = $count + $isbn;}
                $data['quantidade'] = "Você tem ".$count . " Livros no carrinho";
                $data['lista_isbns'] = $lista_isbns;
                //pd($data);pd($lista_isbns);
                $this->load->view('carrinho', $data);
            }else {
                $data['quantidade'] = "Você nao tem nenhum livro no carrinho!";
                //$data ["livros"][]="";
                $this->load->view('carrinho', $data);
            }
            
           
            //$this->load->view('caixadeNavegacao', $data);
            
            
            $this->load->view('footer');
            
        
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
