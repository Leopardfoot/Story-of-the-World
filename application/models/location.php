<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of location
 *
 * @author Erik
 */
class application_model_location {
    //put your code here
    protected $_doors; // array of location ids.
    protected $_name;
    protected $_description;
    protected $_locationid;
 
    public function __set($name, $value);
    public function __get($name);
    
 
    public function setDoors(array $door);
    public function getDoors();
    
    public function setDescription($text);
    public function getDescription();
    
    public function setLocationid($location);
    public function getLocationid();
   
 
    public function setName($locname);
    public function getName();
 
}
