<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Livrofactory {

    private $_ci;

    function __construct() {
        //When the class is constructed get an instance of codeigniter so we can access it locally
        $this->_ci = & get_instance();
        
    }
    
    
    public function sauda() {
        echo "ola!";
        
    }
    
    
     public function getRandon() {
         $query =  $this->_ci->db->query("SELECT * FROM bookdescriptions a JOIN bookauthorsbooks b ON a.ISBN = b.ISBN JOIN bookauthors c ON b.AuthorID = c.AuthorID JOIN bookcategoriesbooks d ON d.ISBN=a.ISBN JOIN bookcategories e ON d.CategoryID=e.CategoryID GROUP BY (a.ISBN) ORDER BY RAND() LIMIT 3;");
            
            //Check if any results were returned
            if ($query->num_rows() > 0) {
                //Create an array to store pisos
                $livros = array();
                //Loop through each row returned from the query
                foreach ($query->result() as $row) {
                    //Pass the row data to our local function which creates a new piso object with the data provided and add it to the pisos array
                   $livros[] = $this->createObjectFromData($row);
                   //pd($row);
                }
                //Return the pisos array
                return $livros;
            }
            return false;
            
     }   
     
     
     public function getAll (){
          $query =  $this->_ci->db->query("SELECT * FROM bookdescriptions a JOIN bookauthorsbooks b ON a.ISBN = b.ISBN JOIN bookauthors c ON b.AuthorID = c.AuthorID JOIN bookcategoriesbooks d ON d.ISBN=a.ISBN JOIN bookcategories e ON d.CategoryID=e.CategoryID GROUP BY (a.ISBN);");
            
            //Check if any results were returned
            if ($query->num_rows() > 0) {
                //Create an array to store pisos
                $livros = array();
                //Loop through each row returned from the query
                foreach ($query->result() as $row) {
                    //Pass the row data to our local function which creates a new piso object with the data provided and add it to the pisos array
                   $livros[] = $this->createObjectFromData($row);
                   //pd($row);
                }
                //Return the pisos array
                return $livros;
            }
            return false;
     }
         
         
       
    
    
    public function getLivro ($isbn){
        $query =  $this->_ci->db->query("SELECT * FROM bookdescriptions a JOIN bookauthorsbooks b ON a.ISBN = b.ISBN JOIN bookauthors c ON b.AuthorID = c.AuthorID JOIN bookcategoriesbooks d ON d.ISBN=a.ISBN JOIN bookcategories e ON d.CategoryID=e.CategoryID WHERE a.ISBN=" . $isbn. " ;");
            
            //$query =  $this->_ci->db->query("select *  from bookdescriptions where ISBN = 0321350316;");
            
            //Check if any results were returned
            if ($query->num_rows() > 0) {
                //Pass the data to our local function to create an object for us and return this new object
                return $this->createObjectFromData($query->row());
            }
            return false;        
    }
    
    public function createObjectFromData($row) {
        //Cria um novo objeto piso com os dados da consulta
        $livro = new Livro();
        $livro->setISBN($row->ISBN);
        $livro->setTitle($row->title);
        $livro->setDescription($row->description);
        $livro->setPrice($row->price);
        $livro->setPublisher($row->publisher);
        $livro->setPubdate($row->pubdate);
        $livro->setEdition($row->edition);
        $livro->setPages($row->pages);
        $livro->setCategoryName($row->CategoryName);
        $livro->setStrFName($row->nameF);
        $livro->setStrLName($row->nameL);
        return $livro;
    }
    



    
}