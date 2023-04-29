<html>
        <head>
                <title>Order List</title>
        </head>

        <body>
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
                while ($count != 0){
                    echo "<input type=\"submit\" name=\"Order\" value=\"Order $count\"><br>";
                    $count--;
                }
                closedir($handle);
?>
                </form>
        </body>
</html>