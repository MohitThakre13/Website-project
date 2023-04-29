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
    <style>

footer{
    display: flex;
    justify-content: center;
    box-sizing: border-box;
    /* border: 2px solid black; */
    width: 100vw;
    height: fit-content;
    position:relative;
    /* bottom: 0px; */
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
    align-items:center ;
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
    <br>
   

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