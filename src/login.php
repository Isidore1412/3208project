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
                        <td> <input type="text" id="name" name="username" required="required" value="<?php echo isset($_COOKIE[""]) ? $_COOKIE[""] : ""; ?>"> </td> 
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
                                    echo "用户名或密码错误！";
                                    break;

                                case 2:
                                    echo "用户名或密码不能为空！";
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
                        <td colspan="2" align="center"> 还没有账号，快去<a href="register.php">注册</a>吧</td>
                    </tr> 
                </table> 
            </form> 
        </div> 
    </body>
</html>     
