<?php 
require '../Config.php';
class userController{
public function getUser(){
    $sql="SELECT * FROM user";
    $db=config::getConnexion();
    try{
       $query=$db->prepare($sql);
         $query->execute();
        return $query->fetchAll();
    }
    catch (Exception $e){
        throw new Exception('Erreur: '.$e->getMessage());
    }
}
public function addUser($user){
    $sql="INSERT INTO user (email,pwd) VALUES (:email,:pwd)";
    $db=config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->bindValue(':email',$user->getEmail());
        $query->bindValue(':pwd',$user->getPwd());
        $query->execute();
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
public function updateUser($user,$id){
    try{
        $db=config::getConnexion();
        $query=$db->prepare('UPDATE user SET email=:email,pwd=:pwd WHERE id=:id');
  
    $query->bindValue(':id',$id);
    $query->bindValue(':email',$user->getEmail());
    $query->bindValue(':pwd',$user->getPwd());
    $query->execute();
    echo $query->rowCount();
    }   
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
public function deleteUser($id){
    try{
    $db=config::getConnexion();
    $query=$db->prepare('DELETE FROM user WHERE id=:id');
    $query->bindValue(':id',$id);
    $query->execute();
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}}
?>