
<?php
     include_once("../../header.html");
     require_once "../../entities/User.php";
?>
     <!DOCTYPE html>
     <html lang="en">
     <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>liste des utilisateurs</title>
     </head>
     <body>
             
     <h4>la liste des users</h4>
    <form>   
     <table class="table table-stipped">
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>tel</th>
                <th>role</th>
            </tr>
            <?php
           GLOBAL $con; 
              //var_dump($con) ;
  
             $sql = "select id,nom,prenom,email,tel,role from user";
             $stmt=$con->prepare($sql); 
             //comment recuperer les donnees?
             $stmt->setfetchMode(PDO::FETCH_OBJ);
             $stmt->execute();
             //var_dump($stmt);
             //RECUPERER LES DONNEES Fetch OU FetchAll
             $users=$stmt->fetchAll();
             $nbreUser=count($users);
             echo"Le nombre d'utilisateur est : $nbreUser";
            //var_dump($users);
            // return $user;
            
            
             foreach ($users as $u) { ?>
                <tr>
                    <td><?= $u->id ?></td>
                    <td><?= $u->nom?></td>
                    <td><?= $u->prenom ?></td>
                    <td><?= $u->email ?></td>
                    <td><?= $u->tel ?></td>
                    <td><?= $u->role ?></td>
                    <td><a href="DeleteUser.php?action=delete&id=<?= $u->id ?>" class="btn btn-danger">DELETE
                    <!-- <span class="glyphicon glyphicon-minus-sign"></span> -->
                </a></td>
               
                </tr>
            <?php };
            ?>
        </table>
        </form> 
        <a   href="dashboardadmin.php">précédente</a>
       <!-- <td><a href="?id=<?php echo ($u->id )?>" class="btn btn-primary">Edit
                    
                </a></td>  -->
     </body>

     </html>