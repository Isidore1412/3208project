<?php
    $username = $_POST['username'];
    $password = $_POST['password'];   
    $email =$_POST['email'];

    $conn  =  "host=postgres port=5432 dbname=myphp user=root password=root123" ; 
    $db = pg_connect($conn);

    $sql_select =<<<EOF
        SELECT "username" FROM "user" WHERE "username" = '$username';
    EOF;
    $data = pg_query($db, $sql_select);
    $register_check = pg_num_rows($data); 
    
    if ($register_check > 0) { 
        header("Location:register.php?err=1");
    } else { 
        $sql_insert =<<<EOF
            INSERT INTO "user"("username","email","password") 
            VALUES('$username','$email','$password');
        EOF;
        pg_query($db, $sql_insert);
        header("Location:login.php"); 
    } 
    pg_close($db);
    

?>
