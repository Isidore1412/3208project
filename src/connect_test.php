<?php
    $conn  =  "host=postgres port=5432 dbname=myphp user=root password=root123" ; 
    $db = pg_connect($conn);
    if (!$db) 
        echo "db can not connect";
    else 
        echo "db connect succeed!";

    $sql =<<<EOF
        CREATE TABLE USER
        (USERNAME TEXT PRIMARY KEY NOT NULL,
        EMAIL CHAR(50) NOT NULL,
        PASSWORD CHAR(16) NOT NULL);
    EOF;

    $ret = pg_query($db, $sql);
    
    if(!$ret){
        echo pg_last_error($db);
        pg_close($db);
    } else {
        echo "Records created successfully\n";
        pg_close($db);
    }
    

?>  

