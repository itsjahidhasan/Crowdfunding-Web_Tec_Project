<?php
require_once('../../Model/Donner/donnerModel.php');
	if(isset($_POST['submit']))
	{
		if(strlen($_POST['newPass'])<8)
		{
			echo 'Password must not be less than eight (8) characters <a href="../../View/Donner/donnerChangePassword.html">Go Back</a>';
		}
    if(strlen($_POST['newPass'])>=8)
		{
			
		
		$check = false;
		for ($i=0; $i < strlen($_POST['newPass']); $i++) { 
			if($_POST['newPass'][$i] === '@' || $_POST['newPass'][$i] === '#' || $_POST['newPass'][$i] === '$' || $_POST['newPass'][$i] === '%')
			{
				$check = true;
				break;
				
			}
		}

		if($check === false)
		{
			echo 'Password must contain at least one of the special characters (@, #, $, %) <a href="../../View/Donner/donnerChangePassword.html">Go Back</a>';
		}
    else if($_POST['newPass']!=$_POST['retypePass']){
      echo 'New Password and retyped did not matched <a href="../../View/Donner/donnerChangePassword.html">Go Back</a>';
    }

		else{
      
	    session_start();
		//	$jsonFile= fopen("../../Model/Donner/donnerData.json","r");
		//  $jsonRead= fread($jsonFile,filesize("../../Model/Donner/donnerData.json"));

    //  $userValue = json_decode($jsonRead, true);

      if ( $_SESSION['password'] == $_POST['currentPass'] ) {
				
        $password=[
           
			'userName'=>$_SESSION['userName'], 
			
			'password'=>$_POST['retypePass'], 
			
			
		];
		$save =updatePassword($password);
		if($save){
			$_SESSION['password']=$_POST['newPass'];
			header('location: ../logout.php');
		}
		else{
			echo "Error .....password didn't update";
		}				


}
else{
echo "Incorrect current password".'<a href="../../View/Donner/donnerChangePassword.php"> Reload </a>';
}

}
}
} 
?>