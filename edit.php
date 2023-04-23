<html>
        <head>
                <title>Editing...</title>
        </head>

        <body>
<?php

            $file=fopen('login.txt','r');
            $name = fgets($file);
            $username = fgets($file);
            $phonenumber = fgets($file);
            $email = fgets($file);
            $password = fgets($file);
            fclose($file);

                if (strlen($_POST["name"]) != 0) echo"hi";//$name=$_POST["name"]."\n";
                if (strlen($_POST["number"]) != 0)
                    {
                        if (!is_numeric($_POST["number"]) && !(strlen($_POST["number"]) == 10))
                            {
                                echo "Enter valid Phone No.<br><a href=\"Account.php\">Try editing again</a>";
                                exit(1);
                            }
                        $number=$_POST["number"]."\n";
                    }
                if (strlen($_POST["email"]) != 0)$email=$_POST["email"]."\n";
                if (strlen($_POST["password"]) != 0)$password=$_POST["password"]."\n";
                $file = fopen('login.txt', 'w');

                fputs($file, $name);
                fputs($file, $username);
                fputs($file, $number);
                fputs($file, $email);
                fputs($file, $password);
                echo "Edit is Successfull!" ;
                fclose($file) ;
?>
        </body>
</html>