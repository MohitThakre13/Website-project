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
    <?php
    if (isset($_POST["clear"])) {
        $file = fopen("cart.txt", "w");
        $file1 = fopen("cartcount.txt", "w");
        fclose($file1);
        fclose($file);
        echo "<h1 style=\"text-align:center; margin:45vh ; \">CART IS EMPTY</h1>" ;
        exit(1) ;
    }
    $file=fopen('cart.txt','r') ;
    $test=fgets($file); 
    if(strlen($test) < 1)
    {
        echo "<h1 style=\"text-align:center; margin:45vh ; \">CART IS EMPTY</h1>" ;
    }
    
    ?>

    <div style="margin-top:50px ;" >
        <table class="table" style="width:100%">
            <thead>
                <tr>

                    <th scope="col">Product</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Each Price</th>
                    <th scope="col">Total Price</th>
                </tr>
            </thead>
            <tbody style="text-align: center;">
                <?php
                
                $cart = fopen("cart.txt", "r");
                while (!feof($cart)) {
                    $p1 = fgets($cart);
                    $p2 = fgets($cart);

                    $cartcount = fopen("cartcount.txt", "r");
                    $count = 0;
                    while (!feof($cartcount)) {
                        $p3 = fgets($cartcount);
                        $p4 = fgets($cartcount);
                        $p5 = fgets($cartcount);
                        if ($p3 == $p1) {
                            $count = $count + 1;
                            break;
                        }
                    }
                    fclose($cartcount);
                    if ($count == 1) {
                        continue;
                    } else {
                        $countproduct = 0;

                        $file = fopen("cart.txt", "r");
                        while (!feof($file)) {
                            $p6 = fgets($file);
                            $p7 = fgets($file);
                            if ($p6 == $p1) {
                                $countproduct = $countproduct + 1;
                            }
                        }

                        fclose($file);

                        $cartcount = fopen("cartcount.txt", "a");
                        fputs($cartcount, $p1);
                        fputs($cartcount, $p2);
                        fputs($cartcount, $countproduct . "\n");
                        fclose($cartcount);
                    }
                }
                fclose($cart);



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
                <td><input type=\"number\" class=\"quantity\" name=\" \" value=\"$quantity\"></td>
                <td>$eachprice</td>
                <td>$total</td>
              </tr>";
                    }
                }
                echo "</form>" ;


                ?>
            </tbody>






    </div>

    <form action="cart.php" method="post">
        <input type="submit" name="clear" value="Remove ALL"><br>
    </form>
    <form action="checkout.php" method="post">
    <input type="submit" name="checkout" value="checout"><br>
</body>

</html>