<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of post
 *
 * @author Erik
 */
class application_model_post {
    //put your code here
    protected $_comment;
    protected $_created;
    protected $_locationid;
    protected $_userid;
    protected $_id;
 
    public function __set($name, $value);
    public function __get($name);
 
    public function setComment($text);
    public function getComment();
    
    public function setLocationid($location);
    public function getLocationid();
    
    public function setUserid($user);
    public function getUserid();
 
    public function setCreated($ts);
    public function getCreated();
 
    public function setId($id);
    public function getId();
}
