<?php


defined('BASEPATH') OR exit('No direct script access allowed');
/*
 *
 * @author Hendrix
 */
class SearchBrowse extends CI_Controller  {
    public function index() {
            
        $data=array();
    
        if (isset($_GET['palavra_buscada']) && !empty($_GET['palavra_buscada'])){
            
            if (isset($_GET['tipo']) && $_GET['tipo'] == "categoria" ){
                
                $data['titulo'] = 'Busca por '.$_GET['palavra_buscada'];
                $this->load->view('header', $data);
                
                $data ['livros']= $this->livrofactory->buscaporCategoria($_GET['palavra_buscada']);
                

                $data['categorias'] =  $this->livrofactory->getCategorias();
                //$this->load->view('caixadeNavegacao', $data);
                
                $this->load->view('livros_view', $data);

                $this->load->view('footer');
            }
            elseif(isset($_GET['tipo']) && $_GET['tipo'] =="palavra"){
                $data['titulo'] = 'Busca por '.$_GET['palavra_buscada'];
                $this->load->view('header', $data);

                if ($_GET['palavra_buscada']==""){
                    $data['livros']=$this->livrofactory->buscaporPalavra("web");
                }else {
                    $data ['livros']= $this->livrofactory->buscaporPalavra($_GET['palavra_buscada']);
                }
                
                

                $data['categorias'] =  $this->livrofactory->getCategorias();
                $this->load->view('livros_view', $data);
                //$this->load->view('caixadeNavegacao', $data);

                $this->load->view('footer');
            }
        }
        else{
                $data['titulo'] = 'Livro não encontrado';
                $this->load->view('header', $data);

                $data ['livros']= "";
               

                $data['categorias'] =  $this->livrofactory->getCategorias();
                //$this->load->view('caixadeNavegacao', $data);
                 $this->load->view('livros_view', $data);

                $this->load->view('footer');
            }
    }
}



