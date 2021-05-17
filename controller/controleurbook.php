<?php
// importer les deux classes model entity et DAO
require_once "model/book.php";
require_once "model/bookDao.php";
require_once 'view/view.php';


class ControleurBook {


    private $book , $bookDao;

    public function __construct() { 
    
   
        $this->bookDao = new BookDAO();
    }


    // action get all 
    public function getBooks() {
        $books = $this->bookDao->getAll(); 
        
        $vue = new Vue("book"); 
        
        $vue->generer(array('books' => $books));
    } 


        // action get all 
    public function addbook() {
        //$book = $this->book = new Book($_POST['name'], $_POST["auteur"] , $_POST["annee"]) ;
        
        $vue = new Vue("addbook"); 
        
        $vue->generer(array('toto' => 'hello lsi 2021'));
    } 


    public function savebook() {
            $book = $this->book = new Book($_POST['name'], $_POST['auteur'] , $_POST['annee']) ;
            
            //$vue = new Vue("addbook"); 

            $this->bookDao->save($book);
            
            // redirection vers  getBooks
    } 

    //si $_GET['ACTION'] = update , cet methode est appellee
    public function updateBook($nom){
        $this->bookDao->update($nom);
    }

    public function getBook($name){
        $row=$this->book=$this->bookDao->getonerow($name);
        $vue = new Vue("update");       
        $vue->generer(array('row' => $row));
    }

   
    public function deleteBook($nom){
        $this->bookDao->supprimer($nom);
    }

}

?>