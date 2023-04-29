<html>

<head>
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

    <form action="checkout.php" method="post">
        
<?php   

        $user="";
        $file_tmp = fopen ("username.txt","r");
        while (($m=fgetc($file_tmp)) != "\n") $user=$user.$m;
        fclose($file_tmp);
        chdir($user);

        //changing cartcount
        $cartcount_prev = fopen ("cartcount.txt","r");
        $cartcount = fopen("cartcount1.txt","w");
        $count=0;
        while (!feof($cartcount_prev)){
                $name = fgets($cartcount_prev);
                $price = fgets($cartcount_prev);
                $quantity = fgets($cartcount_prev);
                $name=rtrim($name,"\n");
                $price=rtrim($price,"\n");
                $quantity=rtrim($quantity,"\n");
                if (strlen($price) != "0"){
                $count++;

                if ($_POST[$count] != $quantity ){
                fputs($cartcount,$name."\n");
                fputs($cartcount,$price."\n");
                fputs($cartcount,$_POST[$count]."\n");
                }
                else if($_POST[$count] == "0");
                else{
                    fputs($cartcount,$name."\n");
                    fputs($cartcount,$price."\n");
                    fputs($cartcount,$quantity."\n");
                }}
                
                
        
        }
        fclose($cartcount);
        fclose($cartcount_prev);
        unlink('cartcount.txt');
        rename('cartcount1.txt','cartcount.txt');
        





        //
        
        if(!isset($_POST["next"]) && !isset($_POST["payment"])) echo "<p><label for=\"payid\">Choose your payment method :</label></p>
        <p><input type=\"radio\" name=\"payid\" value=\"UPI\" id=\"payid\"/>UPI payment</p>
        <p><input type=\"radio\" name=\"payid\" value=\"COD\" checked id=\"payid\"/>COD</p>
        <p><input type=\"submit\" name=\"next\" value=\"Next\"></p>";
        else
        {
            if (!isset($_POST["payment"])){
            if ($_POST["payid"] == "UPI")
            echo "<br><br><p><label for=\"upiid\">Enter UPI ID :</label>
                <input type=\"email\" name=\"upi\" required id=\"upiid\" placeholder=\"text@bank\"/></p>";
            echo
            "<br><br><label for=\"Addressid\">Enter Delivery Address :</label><br>
            <textarea name=\"Address\" required id=\"Addressid\" rows=\"10\" cols=\"40\" placeholder=\"Doorstep service will be provided :)\"></textarea><br>
            <p><input type=\"submit\" name=\"payment\" value=\"Place your order\"/></p>";
            }
        }

        if (isset($_POST["payment"]))
            {   
                $handle=opendir('./');
                $m=readdir($handle);
                $m=readdir($handle);
                $count=0;
                while (($m=readdir($handle)) != false) $count++;
                closedir($handle);
                $count=$count-1;
                $file1 = fopen ('cartcount.txt','r');
                $file = fopen ($count,'w');
                while (!feof($file1))
                    {
                        $m=fgets($file1);
                        fputs($file,$m);
                    }
                fputs($file,"$\n");
                fputs($file,$_POST["Address"]);
                fclose($file);
                fclose($file1);
                echo "Congo your order is placed !!";
                echo "<meta http-equiv = \"refresh\" content = \"3; url = 'home.html'\"/>";
                exit(1);


            }

?>

    </form>

    <?php
     if (!isset($_POST["payment"])){
    $file=fopen('cart.txt','r') ;
    $test=fgets($file);
    fclose($file);
    if(strlen($test) < 1)
    {
        echo "<h1 style=\"text-align:center; margin:45vh ; \">CART IS EMPTY</h1>" ;
        exit(1) ;
    }
}
    
    ?>

<?php
     if (!isset($_POST["payment"])){
    echo "<div style=\"margin-top:50px ;\" >
        <table class=\"table\" style=\"width:100%\">
            <thead>
                <tr>

                    <th scope=\"col\">Product</th>
                    <th scope=\"col\">Quantity</th>
                    <th scope=\"col\">Each Price</th>
                    <th scope=\"col\">Total Price</th>
                </tr>
            </thead>
            <tbody style=\"text-align: center;\">";
     }
    ?>
<?php
             if (!isset($_POST["payment"])){
            $file = fopen("cartcount.txt", "r");
                echo "<form action=\"checkout.php\" method=\"post\">"; 
                while (!feof($file)) {
                    $product = fgets($file);
                    $eachprice = fgets($file);
                    $quantity = fgets($file);
                    $eachprice = rtrim($eachprice, "\n");
                    $quantity = rtrim($quantity, "\n");
                    $product = rtrim($product, "\n");
                    $total = (int)$eachprice * (int)$quantity;
                    if ($total != 0) {
                        echo "<tr style=\"height: 100px;\">
                <td>$product</td>
                <td><input type=\"number\" class=\"quantity\" name=\"$product\" value=\"$quantity\"></td>
                <td>$eachprice</td>
                <td>$total</td>
              </tr>";
                    }
                }
                echo "</form>" ;
                echo "</tbody>";
            }


                ?>