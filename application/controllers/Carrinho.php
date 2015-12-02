<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Carrinho extends CI_Controller {
    
    
    public function index() {
        
            $data['titulo'] = 'Carrinho de compras';
            $this->load->view('header', $data);
            
            $this->load->library('livrofactory');
            $data['categorias'] =  $this->livrofactory->getCategorias();
            
            
            //se vir um GET com um isbn adiciona ao Cookie pra depois carregar as paginas
            if (isset($_GET['isbn']) && !empty($_GET['isbn'])){
                echo ($_GET['teste']);
                if (isset($_COOKIE['lista_isbns'])){
                    $isbn = $_GET['isbn'];
                    $lista_isbns = unserialize( $_COOKIE['lista_isbns']);
                    
                    if (array_key_exists($isbn, $lista_isbns)){
                        $lista_isbns[$isbn]++;
                    }else{
                        $lista_isbns[$isbn] = 1;
                         echo "nao  achou";
                    }
                    
                   
                    set_cookie("lista_isbns", serialize($lista_isbns), (time() + (3 * 24 * 3600)));
                    //echo "Adicionado!";
                }else {
                    $isbn = $_GET['isbn'];
                    $lista_isbns = array();
                    $lista_isbns[$isbn] = 1;
                    set_cookie("lista_isbns", serialize($lista_isbns), (time() + (3 * 24 * 3600)));
                    // echo "Criado e Adicionado!";
                }
               // header('Location: https://com222-hendrixcosta.c9.io/Gambi/');
            }
            
            
           
             
            if (isset($_COOKIE['lista_isbns']) && !empty($_COOKIE['lista_isbns'])){
                
                $lista_isbns = unserialize($_COOKIE['lista_isbns']);
                $data['livros'] = array();
                foreach (array_keys($lista_isbns) as $isbn){
                    
                   $data ["livros"][] = $this->livrofactory->getLivroIsbn($isbn);
                }
                $data['quantidade'] = "Você tem ". count($lista_isbns). " Livros no carrinho";
                //pd($data);pd($lista_isbns);
                //$this->load->view('carrinho', $data);
            }else {
                $data['quantidade'] = "Você nao tem nenhum livro no carrinho!";
                //$data ["livros"][]="";
                $this->load->view('carrinho', $data);
            }
            
           
            //$this->load->view('caixadeNavegacao', $data);
            
            
            $this->load->view('footer');
            
        
    }

   
    public function add ($isbn){
        if (isset($_COOKIE['lista_isbns'])){
            
            $lista_isbns = unserialize( $_COOKIE['lista_isbns']);
            
            if (array_key_exists($isbn, $lista_isbns)){
                $lista_isbns[$isbn]++;
            }else{
                $lista_isbns[$isbn] = 1;
                 echo "nao  achou";
            }
            
           
            set_cookie("lista_isbns", serialize($lista_isbns), (time() + (3 * 24 * 3600)));
            echo "Adicionado!";
        }else {
            $lista_isbns = array();
            $lista_isbns[$isbn] = 1;
            set_cookie("lista_isbns", serialize($lista_isbns), (time() + (3 * 24 * 3600)));
             echo "Criado e Adicionado!";
        }
        
        
    }
    
    public function del ($isbn){
        if (isset($_COOKIE['lista_isbns'])){
            
            $lista_isbns = unserialize( $_COOKIE['lista_isbns']);
            
            if (array_key_exists($isbn, $lista_isbns)){
                
                if ($lista_isbns[$isbn] > 1){
                    $lista_isbns[$isbn]--;    
                }else {
                    unset($lista_isbns[$isbn]);
                }
                
                
                echo "livro removido!";
            }
            set_cookie("lista_isbns", serialize($lista_isbns), (time() + (3 * 24 * 3600)));
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
