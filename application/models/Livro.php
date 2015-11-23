<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Livro_model
 *
 * @author Hendrix
 */
class Livro extends CI_Model {
    private $ISBN;
    private $title;
    private $description;
    private $price;
    private $publisher;
    private $pubdate;
    private $edition;
    private $pages;
    private $categoryName;
    private $strFName;
    private $strLName;
    //put your code here
    
    
    
    function getISBN() {
        return $this->ISBN;
    }

    function getTitle() {
        return $this->title;
    }

    function getDescription() {
        return $this->description;
    }

    function getPrice() {
        return $this->price;
    }

    function getPublisher() {
        return $this->publisher;
    }

    function getPubdate() {
        return $this->pubdate;
    }

    function getEdition() {
        return $this->edition;
    }

    function getPages() {
        return $this->pages;
    }

    function getCategoryName() {
        return $this->categoryName;
    }

    function getStrFName() {
        return $this->strFName;
    }

    function getStrLName() {
        return $this->strLName;
    }

    function setISBN($ISBN) {
        $this->ISBN = $ISBN;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setPublisher($publisher) {
        $this->publisher = $publisher;
    }

    function setPubdate($pubdate) {
        $this->pubdate = $pubdate;
    }

    function setEdition($edition) {
        $this->edition = $edition;
    }

    function setPages($pages) {
        $this->pages = $pages;
    }

    function setCategoryName($categoryName) {
        $this->categoryName = $categoryName;
    }

    function setStrFName($strFName) {
        $this->strFName = $strFName;
    }

    function setStrLName($strLName) {
        $this->strLName = $strLName;
    }


}
