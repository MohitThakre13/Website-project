<html>

<head>
    <title>
        SIGN UP

    </title>
    <link rel="stylesheet" href="signup.css">

</head>

<body>
    <nav id="navigationbar">
        <ul id="Menubars">
            <li><a href="homecart.php">HOME</a></li>
            <li><a href="cart.php">CART</a></li>
            <li><a href="order.php">ORDER LIST</a></li>
            <li><a href="account.php">ACCOUNT</a></li>
        </ul>
    </nav>
    <div class="signup">
        <h1> SIGN UP </h1>

        <form action="signup.php" method="post">

            <input type="text" required name="name">
            <label alt="Name" placeholder="Name"></label>

            <input type="text" required name="username">
            <label alt="Username" placeholder="Username"></label>

            <input type="number" required name="number">
            <label alt="Number" placeholder="Number"></label>

            <input type="email" required name="email">
            <label alt="Email" placeholder="Email"></label>

            <input type="password" required name="password">
            <label alt="Password" placeholder="Password"></label>

            <input type="password" required name="confirm_password">
            <label alt="Confirm Password" placeholder="Confirm Password"></label>

            <input type="submit" value="signup" name="signup" style="height:25px; width:80px; margin-left:-4px ;">
            <a style="margin-left:20% ;" href="login.php">Already have an account</a>
        </form>
    </div>
    <?php
    if (isset($_POST["signup"])) {
        if ($_POST["password"] != $_POST["confirm_password"]) {
            echo "<h2>Password not matched!</h2><br>";
            exit(1);
        } else if (!is_numeric($_POST["number"]) || !(strlen($_POST["number"]) == 10)) echo "Enter valid Phone No.<br>";
        else {
            $file = fopen('userinfo.txt', 'r');
            while (!feof($file)) {
                $name = fgets($file);
                $username = fgets($file);
                $phonenumber = fgets($file);
                $email = fgets($file);
                $password = fgets($file);

                if ($_POST["username"]."\n" == $username) {
                    echo "<h2>Username Already Exist!</h2>";
                    exit(1);
                } elseif ($_POST["email"]."\n" == $email) {
                    echo "<h2>Email Already in use!</h2>";
                    exit(1);
                } elseif ($_POST["number"]."\n" == $phonenumber) {
                    echo "<h2>Phone number already in use!</h2>";
                    exit(1);
                }
            }
            fclose($file);

            $file = fopen('userinfo.txt', 'a');

            fputs($file, $_POST["name"]."\n");
            fputs($file, $_POST["username"]."\n");
            fputs($file, $_POST["number"]."\n");
            fputs($file, $_POST["email"]."\n");
            fputs($file, $_POST["password"]."\n");
            echo '<h2>Signup Successfull</h2>';
            header( "refresh:3; url=login.php" ); 


            fclose($file);
            mkdir($_POST["username"]);
            chdir($_POST["username"]);
            $file = fopen ('cart.txt','w');
            fclose ($file);
            $file = fopen ('cartcount.txt','w');
            fclose ($file);
        }
    }


    ?>
</body>

</html>