<?php

// entites
class Book{

        // attrs 

      private  $name ;
      private  $auteur ;
      private  $annee ;
      private  $id_book;

      // actions methods 

        // const 


        public function __construct($name ,  $auteur ,$annee  ){

                $this->name = $name;
                $this->auteur = $auteur ;
                $this->annee = $annee ;
               

        }


        // get an set 

     
        public function getName(  ){

           return  $this->name ;
       
           

    }


    public function getAuteur(  ){

        return  $this->auteur  ;
      
        

 }


 public function getAnnee(  ){

   
    return  $this->annee;
    

}

 public function getId_book(){
        return $this->id_book;
 }

}

