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
class Home extends CI_Controller  {
    //put your code here

    
    public function index() {
        
        $data = array();
        
        $data['titulo'] = "titulo1";
        
        //pd($data);
        
    $this->load->view('exibirlivros', $data);

    
    
    //And now to perform a simple query to make sure it's working
    


/*          $query =  $this->db->query("SELECT title, description FROM bookdescriptions;");
         $query =  $this->db->query("SELECT * FROM bookdescriptions;");
           foreach ($query->result() as $row)
        {
               // echo "description == ". $row->description. "<br>";
               //pd($row);
        
               
 
        }
    
        
     
*/



    }
    
    





}
