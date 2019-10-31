<?php
$username = 'root';
$password = '';

try{  
$con = new PDO('mysql:host=localhost; dbname = IFClub', $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo 'Error: ' . $e->getMessage();
}