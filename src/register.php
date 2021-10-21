<!doctype html>
<html lang="en">

 <body>
  
   


 </body>

    <head>
        <title>Register</title>
        <meta name="content-type"; charset="UTF-8">
    </head>
    <body> 
        <div class="content" align="center"> 
        <div class="header"> <h1>Register Page</h1> </div> 
        <div class="middle">
            <form id="signform" action="registeraction.php" method="post"> 
                <table border="0"> 
                    <tr> 
                        <td>User name ：</td> 
                        <td> <input type="text" id="name" name="username" required="required" value="<?php echo isset($_COOKIE[""]) ? $_COOKIE[""] : ""; ?>"> </td> 
                    </tr> 
                    <tr> 
                        <td>E-mail ：</td> 
                        <td><input type="email" id="email" name="email"></td> 
                    </tr> 
                    <tr> 
                        <td>Password ：</td> 
                        <td><input type="password" id="password" name="password"></td> 
                    </tr> 

                    <tr> 
                        <td colspan="2" align="center" style="color:red;font-size:10px;"> <!--提示信息--> 
                        <?php
                            $err = isset($_GET["err"]) ? $_GET["err"] : "";
                            switch ($err) {
                                case 1:
                                    echo "用户名已经存在！";
                                    break;
                            } 
                        ?> 
                        </td>
                    </tr> 
                    <tr> 
                        <td colspan="2" align="center"> 
                            <input type="submit" id="signin" name="signin" value="Signin"> 
                        </td> 
                    </tr> 
                    <tr> 
                        <td colspan="2" align="center"> 已有账号，快去<a href="login.php">登陆</a>吧</td>
                    </tr> 
                </table> 
            </form> 
        </div> 
    </body>
</html>
