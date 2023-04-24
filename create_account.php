<!DOCTYPE html>
<html lang="en">

<head>
	<title>Account Registry</title>
</head>

<body>
	<h3><ins>Create New Account</ins></h3>

	<form action="create_account.php" method="post">

		<label for="nameid">Buyer's Name :</label>
		<input type="text" name="name" required id="nameid" placeholder="Enter Name" size="20">

		<label for="emailid">Email :</label>
		<input type="text" required name="email" id="emailid" placeholder="Enter Email-Id" size="20">

		<label for="contactid">Buyer's Mobile Number :</label>
		<select name="Country_type">
			<option value="+61">Australia +61</option>
			<option value="+91">India +91</option>
			<option value="+353">Ireland +353</option>
			<option value="+41">Switzerland +41</option>
		</select>

		<input type="text" name="contact" id="contactid" required placeholder="Enter Mobile No." size="20">

		<label for="passwordid">Password :</label>
		<input type="password" name="password" id="passwordid" required placeholder="atleast of 8 characters" size="20">

		<label for="repassid">Re-enter Password :</label>
		<input type="password" name="repass" id="repassid" required placeholder="Re-enter password" size="20">

		<input type="submit" name="submit" value="Continue">

	</form>

	<a href="login.php">Already a customer?</a>


	<?php

	// if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["contact"]) && isset($_POST["password"]) && isset($_POST["repass"])  ){
	// $accept = 1;
	if (isset($_POST["submit"])) {

		//checking for same email
		// $file=fopen('All_userinfo.txt','r');
		// while( !feof ($file) ){
		//         for($i=0; $i<4; $i++){
		//                 $email=fgets($file);
		//                 if  ($i == 1){
		//                         if ($email == $_POST["email"]."\n"){
		//                                 echo "\nEmail already exists";
		//                                 $accept=0;
		//                         }
		//                 }
		//         }
		/*	$name="name" ;
			$email="email" ;
			$number="number" ;
			$password="password" ;
		while(!feof($file))
		{
			$name=fgets($file);
			$email=fgets($file) ;
			$number=fgets($file) ;
			$password=fgets($file) ;
			if($_POST["email"]."\n"==$email )
			{
				echo "User already exist!" ;
			}
			else if($_POST["contact"]."\n" == $number)
			{
				echo "Mobile number already in use!" ;
			}
		}			
	

		fclose($file);*/
		echo "<br>" . $_POST["submit"];


		$file = fopen('All_userinfo.txt', 'r');

		$name = "name";
		$email = "email";
		$number = "number";
		$password = "passowrd";

		while (!feof($file)) {
			$name = fgets($file);
			$email = fgets($file);
			$number = fgets($file);
			$password = fgets($file);
			echo "<br>hi";
			echo "<br>" . $_POST["email"] . "<br>";
			echo "<pre>" . $email . "hlo</pre>";
			$check = strcmp($email, "\n");
			echo "<br>" . $check;

			if (strcmp($_POST["email"] . "\n", $email) == 0) {
				echo "Email Already Exist\n";
				exit(1);
			}
		}

		fclose(($file));

		//checking for same mobile no.
		/*         $file= fopen("All_userinfo.txt","r");
                while( !feof ($file) ){
                        for($i=0; $i<4; $i++){
                                $mob=fgets($file);
                                if  ($i == 2){
                                        if ($mob == $_POST["contact"]){
                                                echo "\nMobile Number already exists";
                                                $accept=0;
                                        }
                                }
                        }
		}
		fclose($file);  */


		//saving data

		/*		if ($accept == 1){*/
		$file = fopen("All_userinfo.txt", "a");

		//format is:
		//name
		//email
		//mob no.
		//password
		fputs($file, $_POST["name"] . "\n" . $_POST["email"] . "\n" . $_POST["Country_type"] . $_POST["contact"] . "\n" . $_POST["password"] . "\n");
		//}
		fclose($file);
	}
	?>


</body>

</html>