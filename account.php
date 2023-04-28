<html>

<head>
    <title>Account Details</title>
    <link rel="stylesheet" href="account.css">

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
    <?php
    $file = fopen('userinfo.txt', 'r');
    $name = fgets($file);
    $username = fgets($file);
    $phonenumber = fgets($file);
    $email = fgets($file);
    $password = fgets($file);
    fclose($file);
    if (strlen($name) == 0) echo "<meta http-equiv = \"refresh\" content=\"0; url='login.php'\"/>";
    else {

        echo "<h1>Hello $username </h1> ";

        echo "<form method=\"post\" action=\"edit.php\">
        <p><label>Name : </label>
        <input type=\"text\" name=\"name\" placeholder=\"$name\"></p>
        <p>Username : $username (can't be changed !)</p>
        <p><label>Phone No. : </label>
        <input type=\"text\" name=\"number\" placeholder=\"$phonenumber\"></p>
        <p><label>Email : </label>
        <input type=\"email\" name=\"email\" placeholder=\"$email\"></p>
        <p><label>Password : </label>
        <input type=\"password\" name=\"password\" placeholder=\"Enter your new password\"></p>
        <p><label>Confirm Password : </label>
        <input type=\"password\" name=\"confirm_password\" placeholder=\"Confirm your new password\" size=\"22\"></p>
        <input type=\"submit\" value=\"Edit\" name=\"edit\">
        &nbsp&nbsp<input type=\"submit\" name=\"log_out\" value=\"log out\">
        </form>";
    }
    ?>
    <!--            <form action="account.php">
                &nbsp&nbsp<input type="submit" name="log out" value="log out">
            </form>-->
    <?php
    /*  if (isset($_GET["log out"])){
                $file=fopen("userinfo.txt","w");
                fclose($file);
                echo "<meta http-equiv = \"refresh\" content=\"0; url='home.html'\"/>";
            }*/
    ?>
</body>

</html>