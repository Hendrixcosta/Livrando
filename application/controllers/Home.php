<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author Hendrix
 */
class Home extends CI_Controller  {
    //put your code here

    
    public function index() {
        $this->load->view('header');
        
        $this->load->helper('js');
        $this->data['js'] = load_js(array('script.js'));
        
        
        $this->load->view('home', $this->data);
        
        
        $this->load->view('footer');
    }



}
