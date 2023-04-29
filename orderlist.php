<html>
        <head>
                <title>Order List</titile>
        </head>

        <body>
                <form>
<?php
                 $user="";
                 $file_tmp = fopen ("username.txt","r");
                 while (($m=fgetc($file_tmp)) != "\n") $user=$user.$m;
                 fclose($file_tmp);
                 chdir($user);
         
                $m=readdir();
?>
                </form>
        </body>
</html>