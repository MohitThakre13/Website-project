<html>

<head>
    <link rel="stylesheet" href="home.css">
    <style>
        
      
       .maincenter .paragraph span {
	display: block;
	opacity: 0;
	animation: reveal 0.5s forwards var(--d);
}
@keyframes reveal {
	from {
		transform: translateY(20px);
	}
	to {
		opacity: 1;
		transform: none;
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

    <div class="maincenter">
    <p class="paragraph">
      <span style="--d: .5s; font-size:30pt;">Welcome</span>
      <span style="--d: 1s;font-size:25pt;"><?php $file=fopen('login.txt', 'r'); $name=fgets($file); echo $name; ?></span>

    </p>
    </div>

    <div class="content">

        <div class="item">
            <div class="itemfront">

                <img src="https://rukminim1.flixcart.com/image/312/312/xif0q/mobile/y/l/p/-original-imaghxemc3wtcuhb.jpeg?q=70">
                <br>
                <p>
                    <b>IPHONE 14 PRO

                    </b>
                    <br>
                    <b>&#8377;1,19,999</b>
                </p>

            </div>
            <div class="itemback">

                <ul>
                    <li>128 GB ROM</li>
                    <li>15.49cm (6.1inch) Super Retina XDR Display</li>
                    <li>48MP + 12MP + 12MP | 12MP Front Camera</li>
                    <li>A16 Bionic Chip, 6 Core Processor Processor</li>
                </ul>


                <form action="homecart.php" method="post">
                    <input type="submit" name="IPHONE14PRO" class="submit" value="ADD TO CART">
                </form>

            </div>

        </div>
        <div class="item">
            <div class="itemfront">

                <img src="https://rukminim1.flixcart.com/image/312/312/xif0q/mobile/9/e/e/-original-imaghx9q5rvcdghy.jpeg?q=70">
                <br>
                <p>
                    <b>
                        IPHONE 14
                    </b>
                    <br>
                    <b>&#8377;71,999</b>
                </p>

            </div>
            <div class="itemback">
                <ul>
                    <li>128 GB ROM</li>
                    <li>15.49cm (6.1inch) Super Retina XDR Display</li>
                    <li>12MP + 12MP | 12MP Front Camera</li>
                    <li>A15 Bionic Chip, 6 Core Processor Processor</li>
                </ul>

                <form action="homecart.php" method="post">
                    <input type="submit" name="IPHONE14" class="submit" value="ADD TO CART">
                </form>

            </div>

        </div>
        <div class="item">

            <div class="itemfront">

                <img src="https://rukminim1.flixcart.com/image/312/312/l0igvww0/mobile/r/q/m/-original-imagca5ajerqpfjy.jpeg?q=70">
                <br>
                <p>
                    <b>
                        IPHONE 13

                    </b>
                    <br>
                    <b>&#8377;91,999</b>
                </p>

            </div>
            <div class="itemback">
                <ul>
                    <li>512 GB ROM</li>
                    <li>15.49 cm (6.1 inch) Super Retina XDR Display</li>
                    <li>12MP + 12MP | 12MP Front Camera</li>
                    <li>A15 Bionic Chip Processor</li>
                </ul>

                <form action="homecart.php" method="post">
                    <input type="submit" name="IPHONE13" class="submit" value="ADD TO CART">
                </form>


            </div>

        </div>
        <div class="item">

            <div class="itemfront">

                <img src="https://rukminim1.flixcart.com/image/312/312/ktketu80/mobile/a/i/l/iphone-13-mini-mlk93hn-a-apple-original-imag6vp6x67yypzk.jpeg?q=70">
                <br>
                <p>
                    <b>
                        IPHONE 13 MINI
                    </b>
                    <br>
                    <b>&#8377;61,999</b>
                </p>

            </div>
            <div class="itemback">
                <ul>
                    <li>128 GB ROM</li>
                    <li>13.72 cm (5.4 inch) Super Retina XDR Display</li>
                    <li>12MP + 12MP | 12MP Front Camera</li>
                    <li>A15 Bionic Chip Processor</li>
                </ul>

                <form action="homecart.php" method="post">
                    <input type="submit" name="IPHONE13MINI" class="submit" value="ADD TO CART">
                </form>


            </div>
        </div>
    </div>



    <div class="content">

        <div class="item">
            <div class="itemfront">

                <img src="https://rukminim1.flixcart.com/image/312/312/xif0q/mobile/s/j/p/-original-imagmg6gmq9kzq9j.jpeg?q=70">
                <br>
                <p>
                    <b>SAMSUNG GALAXY S23 </b><br>
                    <b>&#8377;79,999</b>
                </p>

            </div>
            <div class="itemback">

                <ul>
                    <li>8 GB RAM | 256 GB ROM</li>
                    <li>15.49 cm (6.1 inch) Full HD+ Display</li>
                    <li>50MP + 10MP + 12MP | 12MP Front Camera</li>
                    <li>3900 mAh Lithium Ion Battery</li>
                    <li>Qualcomm Snapdragon 8 Gen 2 Processor</li>
                </ul>

                <form action="homecart.php" method="post">
                    <input type="submit" name="GALAXYS23" class="submit" value="ADD TO CART">
                </form>

            </div>

        </div>
        <div class="item">
            <div class="itemfront">

                <img src="https://rukminim1.flixcart.com/image/312/312/xif0q/mobile/k/1/o/-original-imagmg6gz3bsgan7.jpeg?q=70">
                <br>
                <p>
                    <b>SAMSUNG GALAXY S23 ULTRA</b><br>
                    <b>&#8377;1,59,999</b>
                </p>

            </div>
            <div class="itemback">
                <ul>
                    <li>12 GB RAM | 1 TB ROM</li>
                    <li>17.27 cm (6.8 inch) Quad HD+ Display</li>
                    <li>200MP + 10MP + 12MP + 10MP | 12MP Front Camera</li>
                    <li>5000 mAh Lithium Ion Battery</li>
                    <li>Qualcomm Snapdragon 8 Gen 2 Processor</li>
                </ul>

                <form action="homecart.php" method="post">
                    <input type="submit" name="GALAXYS23ULTRA" class="submit" value="ADD TO CART">
                </form>


            </div>

        </div>
        <div class="item">

            <div class="itemfront">

                <img src="https://rukminim1.flixcart.com/image/312/312/xif0q/mobile/h/e/d/-original-imagh7nnemnbgtts.jpeg?q=70">
                <br>
                <p>
                    <b>SAMSUNG GALAXY Z FLIP 4</b><br>
                    <b>&#8377;94,999</b>
                </p>

            </div>
            <div class="itemback">
                <ul>
                    <li>8 GB RAM | 256 GB ROM</li>
                    <li>17.02 cm (6.7 inch) Full HD+ Displa</li>
                    <li>12MP + 12MP | 10MP Front Camera</li>
                    <li>3700 mAh Lithium Ion Battery</li>
                    <li>Qualcomm Snapdragon 8+ Gen 1 Processor</li>

                </ul>

                <form action="homecart.php" method="post">
                    <input type="submit" name="GALAXYZFLIP4" class="submit" value="ADD TO CART">
                </form>

            </div>

        </div>
        <div class="item">

            <div class="itemfront">

                <img src="https://rukminim1.flixcart.com/image/312/312/ksqeky80/mobile/x/7/1/galaxy-z-fold3-5g-sm-f926bzgdinu-samsung-original-imag68q6hpdwmngw.jpeg?q=70">
                <br>
                <p>
                    <b>SAMSUNG GALAXY Z FOLD 3</b><br>
                    <b>&#8377;1,49,999</b>
                </p>

            </div>
            <div class="itemback">
                <ul>
                    <li>12 GB RAM | 256 GB ROM</li>
                    <li>19.3 cm (7.6 inch) QXGA+ Display</li>
                    <li>12MP + 12MP + 12MP | 10MP Front Camera</li>
                    <li>4400 mAh Lithium-ion Battery</li>
                    <li>Qualcomm Snapdragon 888 Octa-Core Processor</li>
                </ul>

                <form action="homecart.php" method="post">
                    <input type="submit" name="GALAXYZFOLD3" class="submit" value="ADD TO CART">
                </form>

            </div>
        </div>
    </div>


    <?php

$user="";
$file_tmp = fopen ("username.txt","r");
while (($m=fgetc($file_tmp)) != "\n") $user=$user.$m;
fclose($file_tmp);
chdir($user);


    $file = fopen('cart.txt', 'a');
    if (isset($_POST["IPHONE14PRO"])) {
        fputs($file, "IPHONE 14 PRO\n");
        fputs($file, "119999\n");
        // fputs($file, "https://rukminim1.flixcart.com/image/312/312/xif0q/mobile/y/l/p/-original-imaghxemc3wtcuhb.jpeg?q=70\n");
    } elseif (isset($_POST["IPHONE14"])) {
        fputs($file, "IPHONE 14\n");
        fputs($file, "71999\n");
        // fputs($file, "https://rukminim1.flixcart.com/image/312/312/xif0q/mobile/9/e/e/-original-imaghx9q5rvcdghy.jpeg?q=70\n");
    } elseif (isset($_POST["IPHONE13"])) {
        fputs($file, "IPHONE 13\n");
        fputs($file, "91999\n");
        // fputs($file, "https://rukminim1.flixcart.com/image/312/312/l0igvww0/mobile/r/q/m/-original-imagca5ajerqpfjy.jpeg?q=70\n");
    } elseif (isset($_POST["IPHONE13MINI"])) {
        fputs($file, "IPHONE 13 MINI\n");
        fputs($file, "91999\n");
        // fputs($file, "https://rukminim1.flixcart.com/image/312/312/ktketu80/mobile/a/i/l/iphone-13-mini-mlk93hn-a-apple-original-imag6vp6x67yypzk.jpeg?q=70\n");
    } elseif (isset($_POST["GALAXYS23"])) {
        fputs($file, "GALAXY S23\n");
        fputs($file, "79999\n");
        // fputs($file, "https://rukminim1.flixcart.com/image/312/312/xif0q/mobile/s/j/p/-original-imagmg6gmq9kzq9j.jpeg?q=70\n");
    } elseif (isset($_POST["GALAXYS23ULTRA"])) {
        fputs($file, "GALAXY S23 ULTRA\n");
        fputs($file, "159999\n");
        // fputs($file, "https://rukminim1.flixcart.com/image/312/312/xif0q/mobile/k/1/o/-original-imagmg6gz3bsgan7.jpeg?q=70\n");
    } elseif (isset($_POST["GALAXYZFLIP4"])) {
        fputs($file, "GALAXY Z FLIP 4\n");
        fputs($file, "94999\n");
        // fputs($file, "https://rukminim1.flixcart.com/image/312/312/xif0q/mobile/h/e/d/-original-imagh7nnemnbgtts.jpeg?q=70\n");
    } elseif (isset($_POST["GALAXYZFOLD3"])) {
        fputs($file, "GALAXY Z FOLD 3\n");
        fputs($file, "149999\n");
        // fputs($file, "https://rukminim1.flixcart.com/image/312/312/ksqeky80/mobile/x/7/1/galaxy-z-fold3-5g-sm-f926bzgdinu-samsung-original-imag68q6hpdwmngw.jpeg?q=70\n");
    }


    fclose($file);



    ?>





</body>

</html>