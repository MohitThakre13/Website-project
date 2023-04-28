<html>

<body>
    <?php
    $file = fopen ('userinfo.txt','w');
    fputs($file, "Nishchay Rajput"."\n");
    fputs($file, "cs1001"."\n");
    fputs($file, "9770552424"."\n");
    fputs($file, "mahajanshubham@gmail.com"."\n");
    fputs($file, "123456"."\n");
    fclose ($file);

    ?>



</body>

</html>