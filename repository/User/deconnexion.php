<?php
SESSION_start();
session_destroy();
header("location:../../views/users/login.php");



?>