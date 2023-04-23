<html>
	<head>
		<title>Loading...</title>
	</head>

	<body>
	

	<?php
        if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["contact"]) && isset($_POST["password"]) && isset($_POST["repass"])  )
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
		fclose($file);?>

	</body>

</html>
