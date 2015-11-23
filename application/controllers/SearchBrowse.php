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
class SearchBrowse extends CI_Controller  {
    //put your code here

    
    public function index() {
        
         $this->load->library("livrofactory");
         $data=array();
         
        if (isset($_GET['tipo']) || !empty($_GET['tipo'])){
        
                if ($_GET['tipo'] == "busca"){
                    //echo "buscar pela palavra ".$_GET['palavra_buscada'] ;
                    
                    $data ['livros']= $this->livrofactory->buscaLivro($_GET['palavra_buscada']);
                    $this->load->view('exibirlivros', $data);
                    //pd($data);                    
                }
                if ($_GET['tipo'] == "navegacao"){
                    $data ['livros']= $this->livrofactory->buscaLivro($_GET['palavra_buscada']);
                    $this->load->view('exibirlivros', $data);
                }
        }
        
        
        
        
        
        

    }
    
    





}
