<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class LivroFactory_old {

   

    public function ola (){
        echo "ola";
    }

    public function getLivro($id = 0) {
        //Are we getting an individual piso or are we getting them all
        
        if ($id > 0) {
            //Getting an individual piso
            $query = $this->db->get_where("piso", array("id" => $id));
            
            //Check if any results were returned
            if ($query->num_rows() > 0) {
                //Pass the data to our local function to create an object for us and return this new object
                return $this->createObjectFromData($query->row());
            }
            return false;
        } else { 
            //Getting all the pisos
            /*
            $query = $this->_ci->db->select("*")->from("piso")->get();
            //Check if any results were returned
            if ($query->num_rows() > 0) {
                //Create an array to store pisos
                $pisos = array();
                //Loop through each row returned from the query
                foreach ($query->result() as $row) {
                    //Pass the row data to our local function which creates a new piso object with the data provided and add it to the pisos array
                    $pisos[] = $this->createObjectFromData($row);
                }
                //Return the pisos array
                return $pisos;
            }
            return false;
            */
        }
    }

    
}
