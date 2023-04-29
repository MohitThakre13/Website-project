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
                chdir('nischayr');
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
?>
    </tbody>
    </div>
    </body>
</html>