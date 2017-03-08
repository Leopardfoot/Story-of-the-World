<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TestController
 *
 * @author Erik
 */
class TestController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $location = new application_model_location();

        $location->setDescription("This is the description.");

        $location->setName("Here");

        $this->view->location = $location;
    }


}