<?php
$conn  =  "host=postgres port=5432 dbname=myphp user=root password=root123" ; 
$db = pg_connect($conn);
if (!$db) 
    echo "连接失败！！！！！/r/n";
else 
    echo "连接成功！！！！！/r/n";
    pg_close($db);
?>  
