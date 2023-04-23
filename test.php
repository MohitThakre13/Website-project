<html>
    <body>
        <?php
           $file=fopen('All_userinfo.txt','w');
	   fputs($file,"mohit\nmohit1\n8767249195\nmohitthakre1@gmail.com\nmohit1\n");
	   fputs($file,"mohit\nmohit2\n8767249195\nmohitthakre2@gmail.com\nmohit1\n");
	   fputs($file,"mohit\nmohit3\n8767249195\nmohitthakre3@gmail.com\nmohit1\n");

	   fclose($file);
             
        ?>

       

    </body>
</html>
