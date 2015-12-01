<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Clientefactory {

    private $_ci;

    function __construct() {
        $this->_ci = & get_instance();
    }


     public function getAll (){
        $query =  $this->_ci->db->query("SELECT * FROM bookcustomers GROUP BY (cust_ID);");
        if ($query->num_rows() > 0) {
            $clientes = array();
            foreach ($query->result() as $row) {
                $clientes[] = $this->createObjectFromData($row);
            }
            return $clientes;
        }
        return false;
    }   

   public function getByEmail ($email){
        $query =  $this->_ci->db->query("SELECT * FROM bookcustomers WHERE email like \"%".$email."%\";");
        if ($query->num_rows() > 0) {
            return $this->createObjectFromData($query->row());
        }
        return false;        
    }    
    
   public function getLivroTitle ($title){
        $query =  $this->_ci->db->query("SELECT * FROM bookdescriptions a JOIN bookauthorsbooks b ON a.ISBN = b.ISBN JOIN bookauthors c ON b.AuthorID = c.AuthorID JOIN bookcategoriesbooks d ON d.ISBN=a.ISBN JOIN bookcategories e ON d.CategoryID=e.CategoryID WHERE a.title like \"%".$title."%\";");
        if ($query->num_rows() > 0) {
            return $this->createObjectFromData($query->row());
        }
        return false;        
    }    

    public function buscaporPalavra ($palavra_buscada){
        $query =  $this->_ci->db->query("SELECT * FROM bookdescriptions a JOIN bookauthorsbooks b ON a.ISBN = b.ISBN JOIN bookauthors c ON b.AuthorID = c.AuthorID JOIN bookcategoriesbooks d ON d.ISBN=a.ISBN JOIN bookcategories e ON d.CategoryID=e.CategoryID WHERE title like \"%".$palavra_buscada."%\" GROUP BY (a.ISBN);");
        if ($query->num_rows() > 0) {
            $livros = array();
            foreach ($query->result() as $row) {
                $livros[] = $this->createObjectFromData($row);
            }
            return $livros;
        }
        return false;
    }   

    public function buscaporCategoria ($palavra_buscada){
        $query =  $this->_ci->db->query("SELECT * FROM bookdescriptions a JOIN bookauthorsbooks b ON a.ISBN = b.ISBN JOIN bookauthors c ON b.AuthorID = c.AuthorID JOIN bookcategoriesbooks d ON d.ISBN=a.ISBN JOIN bookcategories e ON d.CategoryID=e.CategoryID WHERE e.CategoryName like \"%".$palavra_buscada."%\" GROUP BY (a.ISBN);");
        if ($query->num_rows() > 0) {
            $livros = array();
            foreach ($query->result() as $row) {
                $livros[] = $this->createObjectFromData($row);
            }
            return $livros;
        }
        return false;
    }   

    public function getCategorias (){
        $query =  $this->_ci->db->query("SELECT DISTINCT c.CategoryName FROM bookdescriptions a INNER JOIN bookcategoriesbooks b ON a.ISBN = b.ISBN INNER JOIN bookcategories c on b.CategoryID = c.CategoryID ORDER BY c.CategoryName ;");
        $categorias = array();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row){
                $categorias[] = $row->CategoryName;
            }
            return $categorias;
        }
        return false;        
    }
    
    public function createObjectFromData($row) {
        //Cria um novo objeto piso com os dados da consulta
        $cliente = new Cliente();
        $cliente->setCustID($row->custID);
        $cliente->setFname($row->fname);
        $cliente->setLname($row->lname);
        $cliente->setEmail($row->email);
        $cliente->setStreet($row->street);
        $cliente->setCity($row->city);
        $cliente->setState($row->state);
        $cliente->setZip($row->zip);
        return $cliente;
    }

}