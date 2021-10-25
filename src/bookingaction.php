<?php
    $name = $_POST['name'];
    $student_num = $_POST['student_num'];   
    $email =$_POST['email'];
    $date =$_POST['date'];
    $seat_num =$_POST['seat_num'];

    $conn  =  "host=postgres port=5432 dbname=myphp user=root password=root123" ; 
    $db = pg_connect($conn);

    $sql_select =<<<EOF
        SELECT "name" FROM "booking" WHERE "name" = '$name';
    EOF;

    $data = pg_query($db, $sql_select);
    $booking_check = pg_num_rows($data); 
    
    if ($booking_check > 0) { 
        header("Location:booking.php?err=1");
    } else { 
        $sql_insert =<<<EOF
            INSERT INTO "booking" ("name","student_num","email","date","seat_num") 
            VALUES('$name','$student_num','$email','$date','$seat_num');
        EOF;
        pg_query($db, $sql_insert);
        echo("succeed!");
    } 
    pg_close($db);
?>
