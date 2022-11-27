
<?php
     include_once("../../header.html");
     
     ?>
<div class=container>
    <h4 >créer mon compte USER</h4>
           <form method="POST"action="../../repository/User/UserDAO.php" enctype="multipart/form-data">
                <div>
                    <input type="hidden"  name="action">
                    <label for="exampleFormControlInput1" class="form-label">Nom</label>
                    <input type="text" class="form-control" required name="nom">
               </div>
                <div>
                    <label for="exampleFormControlInput1" class="form-label">Prénom</label>
                    <input type="text" class="form-control" required name="prenom">
               </div>
                <div>
                    <label for="exampleFormControlInput1" class="form-label">Tel</label>
                    <input type="number" class="form-control" required name="tel">
                </div>
                <div>
                    <label for="exampleFormControlInput1" class="form-label">photo</label>
                    <input type="text" class="form-control" required name="photo">
               </div>
                <div>
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
               </div>
                <div>
                    <label for="exampleFormControlInput1" class="form-label" >Password</label>
                    <input type="password" class="form-control" name="password">
               </div>
               <div>
                    <label for="exampleFormControlInput1" class="form-label" >verification pwd</label>
                    <input type="password" class="form-control" name="verif">
               </div>
               
                <div >
                   <button class="btn btn-primary" id ="btn" type="submit"value="save"name="action">Ajout</button>
               </div>
         </form>
     </div>
     <?php
if(!empty($message)){?>
<div id="message"><?php echo $message ?></div><?php }?>

     







