<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 *
 * @author Hendrix
 */
class Login extends CI_Controller  {

    public function index() {

        if(isset($_POST['submit']) && $_POST['submit'] == 'login'){

            if(trim($_POST['email']) == Null){
                redirect('Home');
            }
            $cliente = new Cliente();
            $cliente = $this->clientefactory->getByEmail($_POST['email']);
            if($cliente == false){
                $this->session->sess_destroy();
            }else{
            $this->session->set_userdata('logado', TRUE);
            $this->session->set_userdata('clienteID', $cliente->getCustID());
            $this->session->set_userdata('clienteFname', $cliente->getFname());
            $this->session->set_userdata('clienteLname', $cliente->getLname());
            $this->session->set_userdata('clienteEmail', $cliente->getEmail());
            }
            redirect('Home');
        }elseif(isset($_POST['submit']) && $_POST['submit'] == 'cadastrar'){
            $data['titulo'] = 'Cadastre-se na Livrando';
            $this->load->view('header', $data);
            
            $this->load->view('cadastraCliente');
            
            $data['categorias'] =  $this->livrofactory->getCategorias();
            $this->load->view('caixadeNavegacao', $data);
            
            $this->load->view('footer');
            
        }elseif(isset($_POST['submit']) && $_POST['submit'] == 'Submit'){
            $data['titulo'] = 'Cadastre-se na Livrando';
            $this->load->view('header', $data);
            
            $this->load->view('cadastraCliente');
            
            $data['categorias'] =  $this->livrofactory->getCategorias();
            $this->load->view('caixadeNavegacao', $data);
            
            $this->load->view('footer');
            
        }else{
            $data['titulo'] = 'Cadastre-se na Livrando';
            $this->load->view('header', $data);
            
            $this->load->view('login');
            
            $data['categorias'] =  $this->livrofactory->getCategorias();
            $this->load->view('caixadeNavegacao', $data);
            
            $this->load->view('footer');
            
        }
    }
    
}
