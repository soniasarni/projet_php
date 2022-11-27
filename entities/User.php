<?php

include("../../DAO/Config.php");
class User{
private $id;
private $nom;
private $prenom;
private $email;
private $password;
private $tel;
private $photo;

 public function __construct2($nom,$prenom,$email,$password,$tel){
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
    $this->password = $password;
    $this->tel = $tel;
  
   
 }public function __construct($nom,$prenom,$email,$password,$tel,$photo,$date_creation,$role){
   $this->nom = $nom;
   $this->prenom = $prenom;
   $this->email = $email;
   $this->password = $password;
   $this->tel = $tel;
   $this->photo = $photo;
   $this->date_creation = $date_creation;
   $this->role = $role;}
 public function __construct1($email,$password){
    
    $this->email = $email;
    $this->password = $password;
    
  
   
 }






/**
 * Get the value of nom
 */ 
public function getNom()
{
return $this->nom;
}

/**
 * Set the value of nom
 *
 * @return  self
 */ 
public function setNom($nom)
{
$this->nom = $nom;

return $this;
}

/**
 * Get the value of prenom
 */ 
public function getPrenom()
{
return $this->prenom;
}

/**
 * Set the value of prenom
 *
 * @return  self
 */ 
public function setPrenom($prenom)
{
$this->prenom = $prenom;

return $this;
}

/**
 * Get the value of email
 */ 
public function getEmail()
{
return $this->email;
}

/**
 * Set the value of email
 *
 * @return  self
 */ 
public function setEmail($email)
{
$this->email = $email;

return $this;
}

/**
 * Get the value of password
 */ 
public function getPassword()
{
return $this->password;
}

/**
 * Set the value of password
 *
 * @return  self
 */ 
public function setPassword($password)
{
$this->password = $password;

return $this;
}

/**
 * Get the value of tel
 */ 
public function getTel()
{
return $this->tel;
}

/**
 * Set the value of tel
 *
 * @return  self
 */ 
public function setTel($tel)
{
$this->tel = $tel;

return $this;
}

/**
 * Get the value of photo
 */ 
public function getPhoto()
{
return $this->photo;
}

/**
 * Set the value of photo
 *
 * @return  self
 */ 
public function setPhoto($photo)
{
$this->photo = $photo;

return $this;
}

/**
 * Get the value of id
 */ 
public function getId()
{
return $this->id;
}

/**
 * Set the value of id
 *
 * @return  self
 */ 
public function setId($id)
{
$this->id = $id;

return $this;
}
}
?>