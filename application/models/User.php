<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Erik
 */
class application_model_User {
    //put your code here
    protected $_name;
    protected $_email;
    protected $_joined;
    protected $_userid;
 
    public function __set($name, $value);
    public function __get($name);
 
    public function setName($text);
    public function getName();
    
    public function setEmail($address);
    public function getEmail();
    
    public function setLocationid($location);
    public function getLocationid();
    
    public function setUserid($user);
    public function getUserid();
 
    public function setJoined($ts);
    public function getJoined();
 
    
}
