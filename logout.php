<?php
session_start();

if(isset($_POST['logout'])) 
{
   session_destroy();
   unset($_SESSION['usuario']);
   header('Location: login.php');
}

?>