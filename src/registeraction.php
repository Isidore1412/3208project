<?php
    $username = $_POST['username'];
    $password = $_POST['password'];   
    $email =$_POST['email'];

    $conn  =  "host=postgres port=5432 dbname=myphp user=root password=root123" ; 
    $db = pg_connect($conn);

    $sql_select =<<<EOF
    SELECT "username" FROM "user" WHERE "username" = '$username'";
    EOF;
    $ret = pg_query($db, $sql_select);
    $row = pg_fetch_array($ret); 
    
    if ($username == $row['username']) { 
        header("Location:register.php?err=1");
    } else { 
    $sql_insert =<<<EOF
        INSERT INTO "user"("username","email","password") 
        VALUES('$username','$password','$email');
    EOF;
        pg_query($db, $sql_insert);
    } 
    pg_close($conn);
    

?>
