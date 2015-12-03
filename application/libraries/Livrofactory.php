<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Livrofactory {

    private $_ci;

    function __construct() {
        $this->_ci = & get_instance();
    }

    public function getRandon() {
        $query =  $this->_ci->db->query("SELECT * FROM bookdescriptions a JOIN bookauthorsbooks b ON a.ISBN = b.ISBN JOIN bookauthors c ON b.AuthorID = c.AuthorID JOIN bookcategoriesbooks d ON d.ISBN=a.ISBN JOIN bookcategories e ON d.CategoryID=e.CategoryID GROUP BY (a.ISBN) ORDER BY RAND() LIMIT 3;");
        if ($query->num_rows() > 0) {
            $livros = array();
            foreach ($query->result() as $row) {
                $livros[] = $this->createObjectFromData($row);
            }
            return $livros;
        }
        return false;
    }   

     public function getAll (){
        $query =  $this->_ci->db->query("SELECT * FROM bookdescriptions a JOIN bookauthorsbooks b ON a.ISBN = b.ISBN JOIN bookauthors c ON b.AuthorID = c.AuthorID JOIN bookcategoriesbooks d ON d.ISBN=a.ISBN JOIN bookcategories e ON d.CategoryID=e.CategoryID GROUP BY (a.ISBN);");
        if ($query->num_rows() > 0) {
            $livros = array();
            foreach ($query->result() as $row) {
                $livros[] = $this->createObjectFromData($row);
            }
            return $livros;
        }
        return false;
    }   

   public function getLivroIsbn ($isbn){
        $query =  $this->_ci->db->query("SELECT * FROM bookdescriptions a JOIN bookauthorsbooks b ON a.ISBN = b.ISBN JOIN bookauthors c ON b.AuthorID = c.AuthorID JOIN bookcategoriesbooks d ON d.ISBN=a.ISBN JOIN bookcategories e ON d.CategoryID=e.CategoryID WHERE a.ISBN=" . $isbn. " ;");
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
        return  null;
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