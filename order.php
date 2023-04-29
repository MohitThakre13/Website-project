<html>
        <head>
                <title>Order List</title>
                <link rel="stylesheet" href="cart.css">
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

                <form method="post" action="orderlist.php">
<?php
                $user="";
                 $file_tmp = fopen ("username.txt","r");
                 while (($m=fgetc($file_tmp)) != "\n") $user=$user.$m;
                 fclose($file_tmp);
                 chdir($user);
                 
         
                $handle=opendir('./');
                $count=0;
                while (false !== ($entry = readdir($handle))) {
                    $count++;
                }
                $count=$count-4;
                if ($count == 0)
                        {
                                echo "<br><br>No order placed till now ,hurry up !!
                                <meta http-equiv=\"refresh\" content=\"3; url='homecart.php'\"/>";
                                exit(1);
                        }
                while ($count != 0){
                    echo "<input type=\"submit\" name=\"Order\" value=\"Order $count\"><br>";
                    $count--;
                }
                closedir($handle);
?>
                </form>
        </body>
</html>