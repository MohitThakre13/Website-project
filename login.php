<html>

<head>
    <link rel="stylesheet" href="login.css">
    <title>Login
    </title>
    <style>

        footer{
            display: flex;
            justify-content: center;
            box-sizing: border-box;
            /* border: 2px solid black; */
            width: 100vw;
            height: fit-content;
            position:absolute;
            bottom: 0px;
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
            width: 30%;
            /* border: 1px solid black; */
            margin-right: 10px;
            text-align: center;
            align-items: center;
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
    <div class="loginbox">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <input type="text" required name="usernameoremail" placeholder="Username or Email"><br>
            <input type="password" required name="password" placeholder="password"><br>
            <div class="forgotandsubmit">
            <input type="submit" value="login" name="login">
        </form>
        <a href="forgot.php">forgot password </a><br>
        
    </div>
    <a style="margin-right:-15%; margin-top:-30%;" href=signup.php>Create an new account</a><br>
    </div>

    <?php
    if (isset($_POST["login"])) {
        $file = fopen('userinfo.txt', 'r');
        while (!feof($file)) {
            $name = fgets($file);
            $username = fgets($file);
            $phonenumber = fgets($file);
            $email = fgets($file);
            $password = fgets($file);

            if ($_POST["usernameoremail"]."\n" == $username ||  $_POST["usernameoremail"]."\n" == $email) {
                if ($_POST["password"]."\n" == $password) {
                    // echo "Login Successfull!";

                    $file1 = fopen('login.txt', 'w');
                    
                    fputs($file1, $name);
                    fputs($file1, $username);
                    fputs($file1, $phonenumber);
                    fputs($file1, $email);
                    fputs($file1, $password);
                    fclose($file1);
                    echo "<h2>Login Successfull</h2>"
                    ."<meta http-equiv = \"refresh\" content=\"3; url='account.php'\"/>";
                    
                    $user="";
                    
                    $file_tmp = fopen ("username.txt","w");
                    fputs($file_tmp,$username);
                    fclose($file_tmp);
                    $file_tmp = fopen ("username.txt","r");
                    while (($m=fgetc($file_tmp)) != "\n") $user=$user.$m;
                    fclose($file_tmp);
                    chdir($user);
                    
                    exit(1);
                } else {
                    echo "Invalid Password!<br>";
                    exit(1);
                    
                }
            }
            
        }
        echo "Invalid username" ;
 
        fclose($file);
    }
    ?>
    <footer>
        <br>
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