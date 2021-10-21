<?php
$conn  =  "host=postgres port=5432 dbname=myphp user=root password=root123" ; 
$db = pg_connect($conn);
if (!$db) 
    echo "db can not connect";
else 
    echo "db connect succeed!";
    pg_close($db);
?>  
