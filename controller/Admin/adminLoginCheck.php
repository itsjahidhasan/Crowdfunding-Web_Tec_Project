<?php
	if(isset($_POST['submit']))
	{
		if(strlen($_POST["username"])<2)
		{
			echo "User Name must contain at least two (2) characters<br>";
		}
		elseif(strlen($_POST['password'])<8)
		{
			echo "Password must not be less than eight (8) characters";
		}
    if(strlen($_POST["username"])>=2 and strlen($_POST['password'])>=8)
		{
			
		
		$check = false;
		for ($i=0; $i < strlen($_POST['password']); $i++) { 
			if($_POST['password'][$i] === '@' || $_POST['password'][$i] === '#' || $_POST['password'][$i] === '$' || $_POST['password'][$i] === '%')
			{
				$check = true;
				break;
				
			}
		}

		if($check === false)
		{
			echo "Password must contain at least one of the special characters (@, #, $, %)";
		}

		else{
      $userName =  $_POST [ 'username' ];
	    $password =   $_POST [ 'password' ];
			$jsonFile= fopen("../../Model/Admin/adminData.json","r");
		  $jsonRead= fread($jsonFile,filesize("../../Model/Admin/adminData.json"));

      $userValue = json_decode($jsonRead, true);

      if ( $password == $userValue ['password'] && $userName == $userValue ['userName'] ) {
        header('location: ../../View/Admin/dashBoard.html');
      }
      else{
        echo "Password and Username didn't match";
      }
      fclose($jsonFile);
		}
  }
	} 
?>