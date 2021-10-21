<!DOCTYPE html>
<html>
    <head>
        <title><?php echo "Welcome to the buuking website";?></title>
        <meta charset="UTF-8">
    </head>
    <body>
    <?php
        $conn  =  "host=postgres port=5432 dbname=myphp user=root password=root123" ; 
        $db = pg_connect($conn);
        #if (!$db) 
            #echo "db can not connect";
        #else 
            #echo "db connect succeed!";

        $create_user =<<<EOF
            CREATE TABLE IF NOT EXISTS "user" (
            username TEXT PRIMARY KEY NOT NULL UNIQUE,
            email CHAR(50) NOT NULL,
            password CHAR(16) NOT NULL);
        EOF;

        $create_booking =<<<EOF
            CREATE TABLE IF NOT EXISTS "booking" (
            name TEXT PRIMARY KEY NOT NULL UNIQUE,
            student_num INT NOT NULL,
            email CHAR(50) NOT NULL,
            date DATE NOT NULL,
            seat_num INT NOT NULL);       
        EOF;

        $user = pg_query($db, $create_user);
        $booking = pg_query($db, $create_booking);

        pg_close($db);
        
    ?>  
        <a href="register.php"> Signin</a>
        <a href="login.php"> Login</a>
    </body>
    
</html>

