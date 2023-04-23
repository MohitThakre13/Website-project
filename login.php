<html>

<head>
    <title>Login </title>
</head>

<body>
    <h1>Login</h1>
    <form action="login.php" method="post">
        <input type="text" required name="usernameoremail" placeholder="Username or Email"><br>
        <input type="password" required name="password" placeholder="password"><br>
        <input type="submit" value="login" name="login">
    </form>
    <a href=#>forgot password </a>

    <?php
    if (isset($_POST["login"])) {
        $file = fopen('login.txt', 'r');
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
                    echo "<a href=\"home.html\">Continue Shopping</a>" ;
                }
                else
                {
                    echo "Invalid Password!" ;
                }
            }
            else
            {
                echo "Invalid Username or Email!" ;
            }

        }
    }
    ?>
</body>

</html>