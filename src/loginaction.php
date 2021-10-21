<?php

$username = $_POST['username'];
$password = $_POST['password']; 

if (!empty($username) && !empty($password)) { 
    $conn  =  "host=postgres port=5432 dbname=myphp user=root password=root123" ; 
    $db = pg_connect($conn); 
    
    $sql_select =<<<EOF
        SELECT "username","password" FROM "user" 
        WHERE "username" = '$username' AND "password" = '$password';
    EOF;
    $data = pg_query($db, $sql_select);
    $login_check = pg_num_rows($data); 
    if ($login_check > 0) 
    { 
        header("Location:index.php");    
    } else{
        echo "Wrong!";
    }
    pg_close($db);
}
?>
