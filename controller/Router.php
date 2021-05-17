<?php

require_once "controleurbook.php";
require_once "view/view.php";

class Routeur {
    private $ctrlBook;
    public function __construct() {
            
        $this->ctrlBook = new ControleurBook(); 
    
    }
    // Traite une requête entrante
    
    public function routerRequete() { 
        
    try {
    if (isset($_GET['action'])) {
        
    if ($_GET['action'] == 'book') {

        $this->ctrlBook->getBooks(); 
            
    } else if($_GET['action'] == 'addbook'){

        $this->ctrlBook->addbook(); 
    }
    else if($_GET['action'] == 'savebook'){
        $this->ctrlBook->savebook();
    }
    else if($_GET['action'] == 'update'){
        $this->ctrlBook->updateBook($_POST['oldnom']);
    }
    else if($_GET['action'] == 'getonerow'){
        $this->ctrlBook->getBook($_POST['nom_update']);
    }

    else if($_GET['action'] == 'delete'){
        $this->ctrlBook->deleteBook($_POST['nom_delete']);
    }
    else{

    throw new Exception("Action non valide");
    } 

}
    }
    catch (Exception $e) {
    $this->erreur($e->getMessage()); }
    }
     
    private function erreur($msgErreur) {

         $vue = new Vue("Erreur"); 
         
         $vue->generer(array('msgErreur' => $msgErreur));
    } }
     