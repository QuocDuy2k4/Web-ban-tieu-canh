<?php 
if(!isset($_SESSION)){
    session_start();
}
unset($_SESSion['user']);
session_destroy();
header('Location:index.php')
?>