<html>
    <body>
        <?php
            $e="1234\n" ;
            $f=rtrim($e, "\n") ;
            echo "<p>" ;
            echo  $f*2;
            echo "</p>" ;
            
            $hello=5 ;

            if(isset($_POST["submit"])){$hello = $_POST["number"]; }
            echo $hello ;
            
             
        ?>

        <form aciton="test.php" method="post">
            <input type="number" name="number" value="<?php echo $hello; ?>">
            <input type="submit" name="submit" >
            
        </form>

       

    </body>
</html>