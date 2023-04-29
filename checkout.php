<html>

<head>
    <link rel="stylesheet" href="cart.css">
    <style>

        footer{
            display: flex;
            justify-content: center;
            box-sizing: border-box;
            /* border: 2px solid black; */
            width: 100vw;
            height: fit-content;
            position:absolute;
            bottom: 5px;
        }
        #nishchay ,#mohit{
            /* border : 1px solid black ; */
            width: 25%;
            text-align: center;
            /* margin-right: 5%; */
            /* margin: 10px; */
            margin-right: 10px;
        }
        #copyright{
            align-items: center;
            width: 30%;
            /* border: 1px solid black; */
            margin-right: 10px;
            text-align: center;
        }
        .icons {
	display: flex;
	column-gap: 25px;
}
.icon {
	display: inline-flex;
	width: 60px;
	height: 60px;
	text-decoration: none;
	font-size: 26px;
	color: #fff;
	border-radius: 50%;
	outline: 2px solid #fff;
	transition-property: outline-offset, outline-color, background-color;
	transition-duration: 0.25s;
}
.icon:hover {
	outline-offset: 4px;
}
.icon i {
	margin: auto;
}
.icon:hover i {
	animation: shake 0.25s;
}
.icon--instagram:hover {
	background-image: radial-gradient(
		circle at 30% 107%,
		#fdf497 0%,
		#fdf497 5%,
		#fd5949 45%,
		#d6249f 60%,
		#285aeb 90%
	);
	outline-color: #a02d76;
}
.icon--github:hover {
	background-color: #6e5494;
	outline-color: #6e5494;
}
.icon--linkedin:hover {
	background-color: #0077b5;
	outline-color: #0077b5;
}
.icon--whatsapp:hover {
	background-color: #2ea44f;
	outline-color: #2ea44f;
}
@keyframes shake {
	10% {
		transform: rotate(15deg);
	}
	20% {
		transform: rotate(-15deg);
	}
	30% {
		transform: rotate(15deg);
	}
	40% {
		transform: rotate(-15deg);
	}
}
    </style>
</head>

<body>

    <nav id="navigationbar">
        <ul id="Menubars">
            <li><a href="homecart.php">HOME</a></li>
            <li><a href="cart.php">CART</a></li>
            <li><a href="order.php">ORDER LIST</a></li>
            <li><a href="account.php">ACCOUNT</a></li>
        </ul>
    </nav>

    <form action="checkout.php" method="post">
        
<?php   

        //user ki directory me hi kaam krna hai
        $user="";
        $file_tmp = fopen ("username.txt","r");
        while (($m=fgetc($file_tmp)) != "\n") $user=$user.$m;
        fclose($file_tmp);
        chdir($user);

        //


        if(isset($_POST['checkout'])){
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
        }



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
                fputs($file,$_POST["Address"]."\n");
                $m=date("d.m.Y");
                fputs($file,$m."\n");
                if (isset($_POST['upi'])) fputs($file,$_POST['upi']."\n");
                else fputs($file,"Cash On Delivery\n");
                fclose($file);
                fclose($file1);
                echo "Congo your order is placed !!";
                $file=fopen('cart.txt','w');
                fclose($file);
                $file=fopen('cartcount.txt','w');
                fclose($file);
                echo "<meta http-equiv = \"refresh\" content = \"3; url = 'homecart.php'\"/>";
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
                <td>$quantity</td>
                <td>$eachprice</td>
                <td>$total</td>
              </tr>";
                    }
                }
                echo "</form>" ;
                echo "</tbody>";
            }


                ?>
                <footer>
<div id="nishchay">   
            Nishchay Rajput
            <div class="icons" style="position: relative; left:20px">
                <a href="https://instagram.com/__nishchay__rajput__?igshid=YmMyMTA2M2Y=" class="icon icon--instagram">
                  <i class="ri-instagram-line"><img src="https://cdn-icons-png.flaticon.com/512/747/747393.png?w=740&t=st=1682778043~exp=1682778643~hmac=150e29528c52a2db53de8c2a1e0935a9c9810aa59acf910c29ed71280c2bf45c" style="height:20px; width:20px; margin-top: 4px;"></i>
                </a>
                <a href="https://github.com/NishchayRajput" class="icon icon--github">
                  <i class="ri-github-line"><img src="https://cdn-icons-png.flaticon.com/512/1051/1051326.png?w=740&t=st=1682778346~exp=1682778946~hmac=b56de488622701fd151e3c678def28b8a15850bb620f9319bf7637680d00dc1d" style="height:20px; width:20px; margin-top: 4px;"></i>
                </a>
                <a href="https://www.linkedin.com/in/nishchay-rajput-83969a264" class="icon icon--linkedin">
                  <i class="ri-linkedin-line"><img src="https://cdn-icons-png.flaticon.com/512/25/25325.png?w=740&t=st=1682778221~exp=1682778821~hmac=046049b1f256bac3a2ae50452f58619043b0ab8874f2581e0472a69ece767025" style="height:20px; width:20px; margin-top: 4px;"></i>
                </a>
                <a href="https://wa.me/9770552422" class="icon icon--whatsapp">
                  <i class="ri-whatsapp-line"><img src="https://cdn-icons-png.flaticon.com/512/154/154858.png?w=740&t=st=1682778255~exp=1682778855~hmac=22056307e43565a08e385095a52622e1ca3e9835c6818b6d2b0504c208da9edf" style="height:20px; width:20px; margin-top: 4px;"></i>
                </a>
              </div>
        </div>
        <div id="mohit">
            Mohit Thakre
            <div class="icons" style="position: relative; left:20px">
                <a href="https://instagram.com/mohit_thakre13?igshid=ZDdkNTZiNTM=" class="icon icon--instagram">
                  <i class="ri-instagram-line"><img src="https://cdn-icons-png.flaticon.com/512/747/747393.png?w=740&t=st=1682778043~exp=1682778643~hmac=150e29528c52a2db53de8c2a1e0935a9c9810aa59acf910c29ed71280c2bf45c" style="height:20px; width:20px; margin-top: 4px;"></i>
                </a>
                <a href="https://github.com/MohitThakre13" class="icon icon--github">
                  <i class="ri-github-line"><img src="https://cdn-icons-png.flaticon.com/512/1051/1051326.png?w=740&t=st=1682778346~exp=1682778946~hmac=b56de488622701fd151e3c678def28b8a15850bb620f9319bf7637680d00dc1d" style="height:20px; width:20px; margin-top: 4px;"></i>
                </a>
                <a href="https://www.linkedin.com/in/mohit-jitlal-thakre-362254253" class="icon icon--linkedin">
                  <i class="ri-linkedin-line"><img src="https://cdn-icons-png.flaticon.com/512/25/25325.png?w=740&t=st=1682778221~exp=1682778821~hmac=046049b1f256bac3a2ae50452f58619043b0ab8874f2581e0472a69ece767025" style="height:20px; width:20px; margin-top: 4px;"></i>
                </a>
                <a href="https://wa.me/8767249195" class="icon icon--whatsapp">
                  <i class="ri-whatsapp-line"><img src="https://cdn-icons-png.flaticon.com/512/154/154858.png?w=740&t=st=1682778255~exp=1682778855~hmac=22056307e43565a08e385095a52622e1ca3e9835c6818b6d2b0504c208da9edf" style="height:20px; width:20px; margin-top: 4px;"></i>
                </a>
              </div>
        </div>
        <div id="copyright">
            <p>Copyright  &#169; 29 April 2023 by Nishchay Rajput and Mohit Thakre</p>
        </div>
    </footer>

</body>
</html>