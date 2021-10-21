<!DOCTYPE html>
<html>
    <head>
        <title><?php echo "Welcome to the buuking website";?></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <!--php
            $conn  =  "host=postgres port=5432 dbname=myphp user=root password=root123" ; 
            $db = pg_connect($conn);
            $sql1 = "SELECT * FROM USER";
            $row = pg_fetch_array(pg_query($db, $sql1));
            if(!$row){
                $sql =<<<EOF
                    CREATE TABLE USER
                    (USERNAME TEXT PRIMARY KEY NOT NULL,
                    EMAIL CHAR(50) NOT NULL,
                    PASSWORD CHAR(16) NOT NULL);
                EOF;
                $ret = pg_query($db, $sql);
                pg_close($db);
            }   else{
                pg_close($db);
            }        
            
        -->
        <a href="register.php"> Signin</a>
        <a href="login.php"> Login</a>

        <a href="booking.php">Book Bio-lib Site</a>
    </body>
    
</html>

