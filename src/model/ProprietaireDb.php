<?php
 namespace src\model;
 use libs\system\Model;

 class ProprietaireDb extends Model
 {
    
    public function finAll(){
       
        return $this->entityManager->createQuery("SELECT p FROM Proprietaire p")->getResult();

    }

    public function insert($proprietaire){

        
        $this->entityManager->persist($proprietaire);
        $this->entityManager->flush();
    }
    public function editDb($id) {

        return $proprietaires = $this->entityManager->find("Proprietaire",$id);
     }

     public function modifierDb(){

        $this->entityManager->flush();
     }

     public function deleteDb($id){
        $proprietaires = $this->entityManager->find("Proprietaire",$id);
        $this->entityManager->remove($proprietaires);
        $this->entityManager->flush();
     }
 }
 ?>