<?php
   class ketnoi{ 
   private    $servername = "localhost";
   private  $username = "root";
   private   $password = "";
   private  $dbname = "vuthibacdk12cntt2";
protected $conn="";
    //B1: Create connetion
    function __construct(){
    $this->conn = mysqli_connect( $this->servername,  $this->username,  $this->password,  $this->dbname);
    //check connection
    
    if (! $this->conn) {
        die("connection failer" . mysqli_connect_error());
    }
}}
    ?>