<?php


defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * @author Hendrix
 */
class Checkout extends CI_Controller  {

    public function index() {

        
        $data['titulo'] = 'Livrando Bookstore';
        $this->load->view('header', $data);

        
        $this->load->view('checkout');        
        
        //pd($data);
        
        
        
        $this->load->view('footer');

    }

}
