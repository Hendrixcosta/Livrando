<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente_model
 *
 * @author Hendrix
 */
class Cliente  extends CI_Model {

    private $custID;
    private $fname;
    private $lname;
    private $email;
    private $street;
    private $city;
    private $state;
    private $zip;

    function getCustID() {
        return $this->custID;
    }

    function getFname() {
        return $this->fname;
    }

    function getLname() {
        return $this->lname;
    }

    function getEmail() {
        return $this->email;
    }

    function getStreet() {
        return $this->street;
    }

    function getCity() {
        return $this->city;
    }

    function getState() {
        return $this->state;
    }

    function getZip() {
        return $this->zip;
    }

    function setCustID($custID) {
        $this->custID = $custID;
    }

    function setFname($fname) {
        $this->fname = $fname;
    }

    function setLname($lname) {
        $this->lname = $lname;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setStreet($street) {
        $this->street = $street;
    }

    function setCity($city) {
        $this->city = $city;
    }

    function setState($state) {
        $this->state = $state;
    }

    function setZip($zip) {
        $this->zip = $zip;
    }

        //put your code here

}
