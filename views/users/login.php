<?PHP
include_once("../../header.html")

?>
<title>login</title>
<h2 align="center">page login</h2>


        <div class=container>
            <h4>Authentification</h4>
            <form method="POST" action="">

                <div>
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="login">
                </div>
                <div>
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="pass"" >
                </div>
                <div>
                    <button class="btn btn-primary" id="btn" type="submit" value="save" name="action">submit</button>
                </div>
        
        </div>
       <?php 
       @$email=$_POST['login'];
       @$pwd=$_POST['pass'];
       @$action=$_POST['action'];
       $message="";
       if(isset($action)){
       if(empty($email))$message="<li>email ou password invalide111!</li>";
       if(empty($pwd))$message.="<li> password invalide111!</li>";?>
    <div id="message"><?php echo $message ?></div> <?php } ?>
     <?php if(isset($action) && empty($message)){
         header("location:../../repository/User/signin.php?email=$email&pwd=$pwd&action=$action");
         
        }?>
        </form>
          <?php
               @$message=$_GET['message'];  ?>
               <div id="message"><?php echo @$message?></div> 
            <div align="center"><a href="ajoutUser.php">S'inscrire</a></div>
            </body>

</html>