<html>

<head>
    <title>
        SIGN UP
    </title>

</head>

<body>

    <h1> SIGN UP </h1>

    <form action="signup.php" method="post">

        <label>Name : </label>
        <input type="text" required name="name" placeholder="Enter your name"><br>
        <label>Username : </label>
        <input type="text" required name="username" placeholder="Enter your username"><br>
        <label>Phone No. : </label>
        <input type="text" required name="number" placeholder="Enter your Phone number"><br>
        <label>Email : </label>
        <input type="email" required name="email" placeholder="Enter your email"><br>
        <label>Password : </label>
        <input type="password" required name="password" placeholder="Enter your password"><br>
        <label>Confirm Password : </label>
        <input type="password" required name="confirm_password" placeholder="Confirm Your password"><br>
        <input type="submit" value="signup" name="signup">
    </form>

    <?php
    if (isset($_POST["signup"])) {
        if ($_POST["password"] != $_POST["confirm_password"]) {
            echo "Password not matched!<br>";
            exit(1);
        }
        else if (!is_numeric($_POST["number"]) || !(strlen($_POST["number"]) == 10)) echo "Enter valid Phone No.<br>";
        else{
        $file = fopen('userinfo.txt', 'r');
        while (!feof($file)) {
            $name = fgets($file);
            $username = fgets($file);
            $phonenumber = fgets($file);
            $email = fgets($file);
            $password = fgets($file);

            if ($_POST["username"] . "\n" == $username) {
                echo "Username Already Exist!";
                exit(1);
            } elseif ($_POST["email"] . "\n" == $email) {
                echo "Email Already in use!";
                exit(1);
            } elseif ($_POST["number"] . "\n" == $phonenumber) {
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
        echo "Signup Successfull" ;
        fclose($file) ;
        }
    }


    ?>
</body>
</html>