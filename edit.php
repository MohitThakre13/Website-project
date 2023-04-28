<html>

<head>
    <title>Editing...</title>
</head>

<body>
    <?php
    if (isset($_POST["log_out"])) {
        $file = fopen("login.txt", "w");
        fclose($file);
        $file = fopen("cart.txt", "w");
        $file1 = fopen("cartcount.txt", "w");
        fclose($file1);
        fclose($file);
        echo "<meta http-equiv = \"refresh\" content=\"0; url='login.php'\"/>";
    } else {
        $file = fopen('login.txt', 'r');
        $name = fgets($file);
        $username = fgets($file);
        $phonenumber = fgets($file);
        $email = fgets($file);
        $password = fgets($file);
        fclose($file);

        if (strlen($_POST["name"]) != 0) 
        {$name = $_POST["name"]."\n";}
        if (strlen($_POST["number"]) != 0) {
            if (!is_numeric($_POST["number"]) || !(strlen($_POST["number"]) == 10)) {
                echo "Enter valid Phone No.<br>";
                exit(1);
            }
            $number = $_POST["number"] . "\n";
        }
        if (strlen($_POST["email"]) != 0) $email = $_POST["email"] . "\n";
        if (strlen($_POST["password"]) != 0) $password = $_POST["password"] . "\n";
        $file = fopen('login.txt', 'w');

        fputs($file, $name);
        fputs($file, $username);
        fputs($file, $phonenumber);
        fputs($file, $email);
        fputs($file, $password);
        echo "Edit is Successfull!<br>";
        fclose($file);
    }
    $t = tempnam("", "temp.txt");
    $file = fopen('userinfo.txt', 'r');
    while (!feof($file)) {
        $name1 = fgets($file);
        $username1 = fgets($file);
        $phonenumber1 = fgets($file);
        $email1 = fgets($file);
        $password1 = fgets($file);
        if ($username == $username1) {
            $file2 = fopen('temp.txt', 'a');

            fputs($file2, $name);
            fputs($file2, $username);
            fputs($file2, $phonenumber);
            fputs($file2, $email);
            fputs($file2, $password);
            fclose($file2);
        } else {
            $file2 = fopen('temp.txt', 'a');

            fputs($file2, $name1);
            fputs($file2, $username1);
            fputs($file2, $phonenumber1);
            fputs($file2, $email1);
            fputs($file2, $password1);
            fclose($file2);
        }
    }
    fclose($file);
    unlink('userinfo.txt');
    rename('temp.txt', 'userinfo.txt');
    ?>
    <form action="Account.php">
        <input type="submit" value="Back to Account Details">
    </form>
</body>

</html>