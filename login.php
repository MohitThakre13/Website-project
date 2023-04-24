<html>

<head>
    <title>Login
         </title>
         <style>
            *{
    margin:0px ;
}

#navigationbar{
    background-color: black;
    display:flex;
    justify-content: right;
    height: 50px;
    align-items: center;
    position:sticky;
    top:0px; 
    z-index: 100;
    
}

#navigationbar ul{
    margin-right: 30px;
    color:white ;
    display:flex; 
    list-style: none;
    
}
#navigationbar ul li{
    margin: 0px 10px;
    border:2px solid white ;
    padding: 3px;
    border-radius:19px ;
}
#navigationbar ul li a{
    padding: 13px;
    text-decoration: none;
    color:white ; 
}
         </style>
</head>

<body>
<nav id="navigationbar">
        <ul id="Menubars">
            <li><a href="home.html">HOME</a></li>
            <li><a href="cart.php">CART</a></li>
            <li><a href="order.php">ORDER LIST</a></li>
            <li><a href="account.php">ACCOUNT</a></li>
        </ul>
    </nav>
    <h1>Login</h1>
    <form action="login.php" method="post">
        <input type="text" required name="usernameoremail" placeholder="Username or Email"><br>
        <input type="password" required name="password" placeholder="password"><br>
        <input type="submit" value="login" name="login">
    </form>
    <a href=#>forgot password </a><br>

    <?php
    if (isset($_POST["login"])) {
        $file = fopen('All_userinfo.txt', 'r');
        while (!feof($file)) {
            $name = fgets($file);
            $username = fgets($file);
            $phonenumber = fgets($file);
            $email = fgets($file);
            $password = fgets($file);
            if($_POST["usernameoremail"]."\n" == $username ||  $_POST["usernameoremail"]."\n" == $email)
            {
                if($_POST["password"]."\n" == $password)
                {
                    echo "Login Successfull!" ;
                   
                    fclose($file);
                    $file = fopen('login.txt', 'w');

                    fputs($file, $name);
                    fputs($file, $username);
                    fputs($file, $phonenumber);
                    fputs($file, $email);
                    fputs($file, $password);
                    fclose($file);
                    echo "<meta http-equiv=\"refresh\" content=\"0; url='home.html'\"/>" ;
                    exit(1);
                }
                else
                {
                    echo "Invalid Password!<br>" ;
                    exit(1);
                }
            }
            else
            {
                echo "Invalid Username or Email!<br>" ;
                exit(1);
            }

        }
        fclose($file);
    }
    ?>
</body>

</html>