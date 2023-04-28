<html>

<head>
    <link rel="stylesheet" href="login.css">
    <title>Login
    </title>

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
    <div class="loginbox">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <input type="text" required name="usernameoremail" placeholder="Username or Email"><br>
            <input type="password" required name="password" placeholder="password"><br>
            <div class="forgotandsubmit">
            <input type="submit" value="login" name="login">
        </form>
        <a href=#>forgot password </a><br>
        
    </div>
    <a style="margin-right:-15%; margin-top:-30%;" href=signup.php>Create an new account</a><br>
    </div>

    <?php
    if (isset($_POST["login"])) {
        $file = fopen('userinfo.txt', 'r');
        while (!feof($file)) {
            $name = fgets($file);
            $username = fgets($file);
            $phonenumber = fgets($file);
            $email = fgets($file);
            $password = fgets($file);
            if ($_POST["usernameoremail"]."\n" == $username ||  $_POST["usernameoremail"]."\n" == $email) {
                if ($_POST["password"]."\n" == $password) {
                    echo "Login Successfull!";

                    $file1 = fopen('login.txt', 'w');
                    
                    fputs($file1, $name);
                    fputs($file1, $username);
                    fputs($file1, $phonenumber);
                    fputs($file1, $email);
                    fputs($file1, $password);
                    fclose($file1);
                    echo '<h2>Login Successfull</h2>';
            header( "refresh:3; url=account.php" ); 
                    exit(1);
                } else {
                    echo "Invalid Credential!<br>";
                    
                }
            }
        }
 
        fclose($file);
    }
    ?>
</body>

</html>