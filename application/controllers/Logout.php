<?php


defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * @author Hendrix
 */
class Logout extends CI_Controller  {

    public function index() {

        $this->session->sess_destroy();
        redirect('Home');

    }

}
