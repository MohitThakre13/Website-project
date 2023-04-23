<html>
	<head>
		<title>Account Registry</title>
	</head>

	<body>
		<h3><ins>Create New Account</ins></h3>
		
		<form method="post" action="After_sign_up.php">

		<p><label for="nameid">Buyer's Name :</label>
		<input type="text" name="name" id="nameid" placeholder="Enter Name" size="20"/></p>
		
		<p><label for="emailid">Email :</label>
		<input type="text" name="email" id="emailid" placeholder="Enter Email-Id" size="20"/></p>

		<p><label for="contactid">Buyer's Mobile Number :</label>

		<select name="Country_type">
			<option value="+61">Australia +61</option>
			<option value="+91">India +91</option>
			<option value="+353">Ireland +353</option>
			<option value="+41">Switzerland +41</option>
		</select>

		<input type="text" name="contact" id="contactid" placeholder="Enter Mobile No." size="20"/></p>

		<p><label for="passwordid">Password :</label>
		<input type="password" name="password" id="passwordid" placeholder="atleast of 8 characters" size="20"/></p>

		<p><label for="repassid">Re-enter Password :</label>
		<input type="password" name="repass" id="repassid" placeholder="Re-enter password" size="20"/></p>

		<p><input type="submit" value="Continue"></p>
		
		</form>

		<a href="login.php">Already a customer?</a>


<?php
/*	if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["contact"]) && isset($_POST["password"]) && isset($_POST["repass"])  )
		$accept = 1;

                //checking for same email
                $file= fopen("All_userinfo.txt","r");
                while( !feof ($file) ){
                        for($i=0; $i<4; $i++){
                                $email=fgets($file);
                                if  ($i == 1){
                                        if (strcmp($email,$_POST["email"]) == 0){
                                                echo "\nEmail already exists";
                                                $accept=0;
                                        }
                                }
                        }
		}
		fclose($file);

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

/*		if ($accept == 1){
			$file= fopen("All_userinfo.txt","a");

			//format is:
			//name
			//email
			//mob no.
			//password
			fwrite($file,$_POST["name"]."\n".$_POST["email"]."\n".$_POST["Country_type"].$_POST["contact"]."\n".$_POST["password"]."\n");
		}
 */?>


	</body>
</html>
