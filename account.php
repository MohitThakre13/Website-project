<html>
    <head>
            <title>Account Details</title>
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
<?php
        $file=fopen('login.txt','r');
        $name = fgets($file);
        $username = fgets($file);
        $phonenumber = fgets($file);
        $email = fgets($file);
        $password = fgets($file);
        fclose($file);
        if (strlen($name)==0) echo "<meta http-equiv = \"refresh\" content=\"0; url='login.php'\"/>";
        else{

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
                $file=fopen("login.txt","w");
                fclose($file);
                echo "<meta http-equiv = \"refresh\" content=\"0; url='home.html'\"/>";
            }*/
?>
    </body>
</html>