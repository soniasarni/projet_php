<?php
require_once "../../entities/User.php";

@$email=$_GET['email'];
@$pwd=$_GET['pwd'];
@$action=$_GET['action'];
echo $action.$pwd.$email;

$message="";

    if(empty($message)){
     global $con;}
$sql="select * from user WHERE email=? and password=? limit 1";

$req=$con->prepare($sql);
$req->setFetchMode(PDO::FETCH_OBJ);
$req->execute(array($email,md5($pwd)));
$tab=$req->fetchAll(PDO::FETCH_OBJ);
//var_dump( $tab);
if(count($tab)<1){ 
  $message="<li>login ou password incorrect</li>";
   header("location:../../views/users/login.php?message=$message");
    }
     elseif(count($tab)>0){
    //  var_dump( $tab);
       foreach ($tab as $user){
        // echo $id=$user->id;
        //   $role= $user->role;
        //   echo$role."AAAAAAAAAAA";
        //   echo$nom=$user->nom;
        //   echo$prenom=$user->prenom;
        //   echo$email=$user->email;
        //   echo $password= md5($user->password);
        // $password= $user->password;
        // $password==md5($pass);
        // echo $pass;
        //   echo$tel=$user->tel;
        //   echo$photo=$user->photo;
        //   echo$date=$user->date_creation;
        session_start();
        $role=$user->role;
        $_SESSION["id"] = $user->id;
        $_SESSION["email"] =$user->email;
        $_SESSION["role"] = $user->role;
        $_SESSION["nom"] = $user->nom;
        $_SESSION["prenom"] = $user->prenom;
        $_SESSION["password"] = $user->password;
        $_SESSION["tel"] = $user->tel;
        $_SESSION["photo"] = $user->photo;
        $_SESSION["date"] = $user->date_creation;
   
        if($role == "admin")
        {
            header('Location:dashboardadmin.php');
        }
        else
        {
            header('Location:dashboardclient.php');
        }
        }}
//           // $user->nom;
//           // $user->prenom;
//           // $user->email;
//           // $user->password;
//           // $user->tel;
//           // $user->photo;
//           // $user->date_creation;
          
      
//         
//           else {
//             $message="<li>welcome client</li>";
//             header('Location:dashboarclient.php');
//           }
//         }
//       }
      
      // $_SESSION['ma_session']=
      // session_start();
       //$_SESSION["nomPrenomRole"]=$tab[0].['role']." ".$tab[0].['nom']." ".$tab[0].['prenom'];
        //header('Location:dashboardadmin.php?message=$message');}

        // $role=$row['role'];
        // echo"hi!!!!!!!".$role; 
        // session_start();  // on démarre la session
        // echo"hi!!!!!!!".$role; 
        // $_SESSION["id"] = $row['id'];
        // $_SESSION["email"] = $row['email'];
        // $_SESSION["role"] = $row['role'];
        // $_SESSION["nom"] = $row['nom'];
        // $_SESSION["prenom"] = $row['prenom'];
        
      
       

      //  }//}
  //   ;
  // }
//  if($tab =1){ 
//    $message="<li>login existe déja</li>";
//    header('Location:dashboardadmin.php');
// }
//    else{
//     header('Location:index.php');

//    }
    //     {
    //         header('Location:dashboardadmin.php');
    //     }
    //     else
    //     {
    //         header('Location:dashboardclient.php');
    //     }
    // }
// }
// else
// header('Location:signin.php');
 //}
//}
?>





