<?php
require_once "../../entities/User.php";

session_start();
// if ($_SESSION["email"] && $_SESSION["role"]=="client") {
   
// }
?>
<!DOCTYPE html>  
<html>
<head>
<meta charset="UTF-8">
<title>php_poo</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color:#EAF2F8 ;">
 <nav class="navbar navbar-expand-lg  navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="deconnexion.php">Deconnexion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" action="post"type="submit" name="readInfo"href="updateClient.php">TOTO</a>
        </li>
        <li class="nav-item" style="margin-left:700px">
        <a class="nav-link ">Bonjour <?php echo $_SESSION["prenom"] ." ".$_SESSION["nom"]?></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <div align= center style="margin-top:10%">
       <fieldset style="width:50%;background-color:#AED6F1 ;color:black ;padding-top:5%;;padding-bottom:5%">
        <form align=center method="POST">
            <h2>mettre à jour vos coordonnées</h2>
            <table align=center  >
        <tr><td><label for="nom"> </label></td><td><input type="hidden" name="id"value="<?php echo $_SESSION["id"]?>"></td></tr>
       <tr><td><label for="nom">Nom :</label></td><td><input type="text" name="nom"value="<?php echo $_SESSION["nom"]?>"style="width:100%;PADDING:2%"></td></tr>
        <tr><td><label for="nom">Prenom :</label></td><td><input type="text" value="<?php echo $_SESSION["prenom"]?>" name="prenom"style="width:100%;PADDING:2%"></td></tr>
        <tr><td><label for="nom">email:</label></td></td><td><input type="text" name="email" value="<?php echo $_SESSION["email"]?>"style="width:100%;PADDING:2%"></td></tr>
        <tr><td><label for="nom">password:</label></td></td><td><input type="text"name="password"placeholder="saisir le mot de pass"style="width:100%;PADDING:2%"></td></tr>
       <tr><td><label for="nom">tel :</label></td><td ><input type="text" name="tel"value="<?php echo $_SESSION["tel"]?>"style="width:100%;PADDING:2%"></td></tr>
        <tr><td><label for="nom">photo :</label></td><td><input type="text" name="photo" value="<?php echo $_SESSION["photo"]?>" style="width:100%;PADDING:2%"></td></tr>
        <tr><td><label for="nom"> </label></td><td><input type="hidden" name="role" value="<?php echo $_SESSION["role"]?>" style="width:100%;PADDING:2%"></td></tr>
      <tr><td><label for="nom"> </label></td><td><input type="hidden" name="date"value="<?php echo date("Y-m-d H:i:s")?>" style="width:100%;PADDING:2%"></td></tr>
        <tr> 

    <td colspan="2"><input type="submit" name="valider" value="updateUser"></td>
</tr>
    </table>
        </form>
    </fieldset>    
   
    </div>
    <?php @$retour=$_GET['retour'];?>
    <a href=<?php echo"$retour"?>>précédente</a>
<?php
@$valider=$_POST['valider'];
 @$prenom=$_POST["prenom"];
 @$id=$_POST['id'];
 @$nom=$_POST["nom"];
 @$email=$_POST["email"];
 @$pass=$_POST["password"];
 @$tel=$_POST["tel"];
 @$photo=$_POST["photo"];
 @$date=date("Y-m-d H:i:s");
 @$role="client";

 @$message="";
  if(!empty($valider)){
  
     if(empty($nom))$message.="<li>nom invalide!</li>";
     if(empty($prenom))$message.="<li>prenom invalide!</li>";
     if(empty($email))$message.="<li>email invalide!</li>";
    //  if(empty($password))$message="<li>password invalide!</li>";
     if(empty($tel))$message.="<li>tel invalide!</li>";
    
 if(empty($message)){
 //var_dump($con) ;
  try {
      GLOBAL $con;
      //var_dump($con) ;
      // set the PDO error mode to exception
      
    
      $sql = "UPDATE user SET nom=:nom,prenom=:prenom,email=:email,password=:pass,tel=:tel,photo=:photo WHERE id=:id";
     // echo"aaaaaa". @$prenom .@$id  .@$nom .@$email.@$pass.@$tel.@$photo.@$date."aaaaaa".@$role."BBBBBB";
      $stmt=$con->prepare($sql); 
      
      $stmt->bindValue('id',$id,PDO::PARAM_INT);
      $stmt->bindValue('nom',$nom,PDO::PARAM_STR);
      $stmt->bindValue('prenom',$prenom,PDO::PARAM_STR);
      $stmt->bindValue('email',$email,PDO::PARAM_STR);
      $stmt->bindValue('pass',md5($pass),PDO::PARAM_STR);
      $stmt->bindValue('photo',$photo,PDO::PARAM_STR);
      $stmt->bindValue('tel',$tel,PDO::PARAM_STR);
     
   
  
      // $stmt->bindValue(3,@$email);
      // $stmt->bindValue(4,@$pass);
      // $stmt->bindValue(5,@$tel);
      // $stmt->bindValue(6,@$photo);
      // $stmt->bindValue(7,@$date);
      // $stmt->bindValue(8,@$role);
      // $stmt->bindValue(9,@$id);
      return $stmt->execute();
     
      header('location:dashboardClient.php');
      echo " records UPDATED successfully";
     
     
      // echo a message to say the UPDATE succeeded
      
      
      
    } catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
    
    $con = null;}}
   
    ?> 

	



</body>
</html>
