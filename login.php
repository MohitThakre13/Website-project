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

                    fclose($file);
                    $file = fopen('userinfo.txt', 'w');

                    fputs($file, $name);
                    fputs($file, $username);
                    fputs($file, $phonenumber);
                    fputs($file, $email);
                    fputs($file, $password);
                    fclose($file);
                    echo "<meta http-equiv=\"refresh\" content=\"0; url='home.html'\"/>";
                    exit(1);
                } else {
                    echo "Invalid Password!<br>";
                    exit(1);
                }
            } else {
                echo "Invalid Username or Email!<br>";
                exit(1);
            }
        }
        fclose($file);
    }
    ?>
</body>

</html>