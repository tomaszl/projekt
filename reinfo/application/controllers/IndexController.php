<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
      $Glowna = new Application_Model_DbTable_Glowna();
      $this->view->index = $Glowna->fetchAll();
    }
    public function onasAction()
    {
        $Onas = new Application_Model_DbTable_Onas();
        $this->view->onas = $Onas->fetchAll();
        //onas
    }

    public function wdrozeniaAction()
    {
        // wdrozenia
    }
    public function blogAction()
    {
     // blog
        $Blog = new Application_Model_DbTable_Blog();
        $this->view->blog = $Blog->fetchAll();
    }
    public function postAction()
    {
        $Blog = new Application_Model_DbTable_Blog();
      //  $this->view->blog = $Blog->fetchAll();
        
    }
    public function ofertaAction()
    
    {
        // oferta
    }
    public function kontaktAction()
    { 
        // kontakt
    }
    
    }
    


