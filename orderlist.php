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
 
            <a href="order.php">Back to order list</a>
 <?php 

$user="";
$file_tmp = fopen ("username.txt","r");
while (($m=fgetc($file_tmp)) != "\n") $user=$user.$m;
fclose($file_tmp);
chdir($user);

$completetotal=0;


 $name=ltrim($_POST['Order'],"Order ");
                $file = fopen($name, "r");
                echo "<form>"; 
                while (!feof($file)) {
                    $product = fgets($file);
                    if ($product == "$\n"){


                        //printing total first
                        echo "<td></td>
                        <td></td>
                        <td>Grand Total =</td>
                        <td>$completetotal</td>
                        </tr>";
                        $address = fgets($file);
                        echo "  <br><table><tr><td><ins>Address for delivery :</ins></td><td></td><td>$address</td></tr>";
                        $date = fgets($file);
                        echo "<tr><td><ins>Date of delivery :</ins></td><td></td><td>$date</td></tr></table><br><br><br>";
                        $method = fgets($file);
                        echo "<tr><td><ins>Method of payment :</ins></td><td></td><td>&nbsp $method</td></tr></table><br><br><br>";
                    }
                    $eachprice = fgets($file);
                    $quantity = fgets($file);
                    $eachprice = rtrim($eachprice, "\n");
                    $quantity = rtrim($quantity, "\n");
                    $product = rtrim($product, "\n");
                    $total = (int)$eachprice * (int)$quantity;
                    $completetotal=$completetotal+$total;
                    
                    if ($total != 0) {
                        echo "<tr style=\"height: 100px;\">
                <td>$product</td>
                <td>$quantity</td>
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