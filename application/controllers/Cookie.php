<?php


defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * @author Hendrix
 */
class Cookie extends CI_Controller  {

    public function index() {


        if ($_GET['acao'] == 'del'){
            
            
            $lista_isbns = unserialize( $_COOKIE['lista_isbns']);
            $isbn = $_GET['isbn'];
            
            if (array_key_exists($isbn, $lista_isbns)){
                
                if ($lista_isbns[$isbn] > 1){
                    $lista_isbns[$isbn]--;    
                }else {
                    unset($lista_isbns[$isbn]);
                }  
            } 
            //pd ($lista_isbns);
            set_cookie("lista_isbns", serialize($lista_isbns), (time() + (3 * 24 * 3600)));
            header('Location: Carrinho');
            
        }
        else {
            
            //se vir um GET com um isbn adiciona ao Cookie pra depois carregar as paginas
            if (isset($_GET['isbn']) && !empty($_GET['isbn'])){
                //echo ($_GET['teste']);
                
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
               header('Location: Carrinho');
            }
            
        }
        
        
    }

}
