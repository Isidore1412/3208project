<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
        <meta name="content-type"; charset="UTF-8">
    </head>
    <body> 
        <div class="content" align="center"> 
        <div class="header"> <h1>Login Page</h1> </div> 
        <div class="middle">
            <form id="loginform" action="loginaction.php" method="post"> 
                <table border="0"> 
                    <tr> 
                        <td>User name ：</td> 
                        <td> <input type="text" id="name" name="username" required="required"> </td> 
                    </tr> 
                    <tr> 
                        <td>Password ：</td> 
                        <td><input type="password" id="password" name="password" required="required"></td> 
                    </tr> 

                    <tr> 
                        <td colspan="2" align="center" style="color:red;font-size:10px;">
                        <?php
                            $err = isset($_GET["err"]) ? $_GET["err"] : "";
                            switch ($err) {
                                case 1:
                                    echo "Wrong username or password!";
                                    break;
                                case 2:
                                    echo "User name or password cannot be empty!";
                                    break;
                            } 
                        ?> 
                        </td>
                    </tr> 
                    <tr> 
                        <td colspan="2" align="center"> 
                            <input type="submit" id="login" name="login" value="Login"> 
                        </td> 
                    </tr> 
                    <tr> 
                        <td colspan="2" align="center"> Don't have an account yet, go to <a href="register.php">register</a>!</td>
                    </tr> 
                </table> 
            </form> 
        </div> 
    </body>
</html>     
