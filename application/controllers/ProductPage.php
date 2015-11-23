<?php


defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 *
 * @author Hendrix
 */
class ProductPage extends CI_Controller  {
    //put your code here

    
    public function index() {
        $this->load->library("livrofactory");
        
        
        if (isset($_GET['isbn'])|| !empty($_GET['isbn'])){
            
            
             $data = array("livros" => $this->livrofactory->getLivro($_GET['isbn']));
             
            $this->load->view('productPage', $data);
            
        }
        
        
        // getlivros > 0 retorna 1 livro especifico Ex.: getLivro("0321344758")
        // getlivros = o retorna array contendo todos livros
        // getlivros < 0 retorna 3 livros aleatorios
       

    
    
    
    





    }
}
