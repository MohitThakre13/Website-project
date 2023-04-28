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
            <li><a href="home.html">HOME</a></li>
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
            <label alt="Passord" placeholder="Passord"></label>

            <input type="password" required name="confirm_password">
            <label alt="Confirm Password" placeholder="Confirm Password"></label>

            <input type="submit" value="signup" name="signup">
        </form>
    </div>
    <?php
    if (isset($_POST["signup"])) {
        if ($_POST["password"] != $_POST["confirm_password"]) {
            echo "Password not matched!<br>";
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
                    echo "Username Already Exist!";
                    exit(1);
                } elseif ($_POST["email"]."\n" == $email) {
                    echo "Email Already in use!";
                    exit(1);
                } elseif ($_POST["number"]."\n" == $phonenumber) {
                    echo "Phone number already in use!";
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
            echo "Signup Successfull";

            fclose($file);
        }
    }


    ?>
</body>

</html>