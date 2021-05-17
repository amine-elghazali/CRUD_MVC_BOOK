<?php
require_once "book.php";

class BookDAO{

  private   $bdd ;
  
  public function __construct(){
    try
    {
    $this->bdd    = new PDO('mysql:host=localhost;dbname=gbook;charset=utf8', 'root', '');

    }catch(Exception $e) {
        die('Erreur : '.$e->getMessage()); }
        
  }

// save // mapping OR 
  public function save($book){

    $req = $this->bdd->prepare('INSERT INTO book(name, auteur, annee ,id_book) VALUES(:name, :auteur, :annee, :id_book)');
  
    $req->execute(array( 'name' => $book->getName(),
    'auteur' => $book->getAuteur(),
    'annee' => $book->getAnnee(),
    'id_book' => $book->getId_book()
    ));
    
    header('Location: http://localhost/phpFolder/MVC_FRAMEWORK/testlsi/index.php?action=book');

  }

  
  public function getAll(){

    $reponse  = $this->bdd->query('SELECT * FROM book');
    $arrayBooks =  array();
  
    while ($donnees = $reponse->fetch()) {
       
        array_push($arrayBooks, new Book ($donnees['name'], $donnees['auteur'] , $donnees['annee']));

   

  }

  return $arrayBooks;

  }

  
  // editbook 
  //----------------------------------METHODE POUR LA MODIFICATION----------------------------------//
  public function update($name){
    $req=$this->bdd->prepare("UPDATE book SET name=:newname,auteur=:author,annee=:an WHERE name=:oldname");

    $req->execute(array( 'newname' =>$_POST['name'],
    'author' => $_POST['auteur'],
    'an' => $_POST['annee'],
    'oldname'=>$name
    ));
    header('Location: http://localhost/phpFolder/MVC_FRAMEWORK/testlsi/index.php?action=book');
}
public function getonerow($nom){
  $req=$this->bdd->prepare("SELECT * FROM book WHERE name=:name");
  $req->execute(array('name'=>$nom));
  $row=$req->fetch(PDO::FETCH_ASSOC);
  return $row;
}

  // deletebook 


  
  public function supprimer($name){
    $req=$this->bdd->prepare("DELETE FROM book WHERE name=:name");
    
    $req->execute(array('name'=>$name));
    
    
    header('Location: http://localhost/phpFolder/MVC_FRAMEWORK/testlsi/index.php?action=book');
}
}
