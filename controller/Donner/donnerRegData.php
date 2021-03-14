<?php


    session_start();

if ( isset ( $_POST [ 'submit' ] ) ) {

	$name = $_POST [ 'name' ];
  $address= $_POST['address'];
	$email =$_POST [ 'email' ];
	$userName =$_POST [ 'uname' ];
	$password =$_POST [ 'pword' ];
	$confirmPassword = $_POST [ 'conpword' ];
  $occupation = $_POST ['occupation'];
	$gender = $_POST ['gender'];
	
  $day    =   $_POST [ 'date'] ;
  $month  = $_POST [ 'month'];
  $year   = $_POST [ 'year' ] ;
  $dateOfBirth = $day."/".$month."/".$year;
  $yearlyIncome = $_POST['yearlyIncome'];



    if ( $name == "" || $email == "" || $userName == "" || $password == "" || $confirmPassword == ""|| $day == "" || $month == "" || $year == "" || $occupation == "" || $address == "") {
 	echo "Filled all the file... ";
 }
 elseif ( $password != $confirmPassword) {
 	echo "Password didn't match with confirm Password ";
 }
 else{
 	$donnerData = [	
			                'name'=>$name,
                      'address'=>$address, 
                      'userName'=>$userName, 
                      'email'=> $email,
                      'password'=>$password, 
                      'gender'=> $gender,
                      'dateOfBarth'=> $dateOfBirth,
                      'occupation'=> $occupation,
                      'yearlyIncome'=> $yearlyIncome,

						];

	$donnerDataJson= json_encode( $donnerData );
	$jsonFile= fopen( "../../Model/Donner/donnerData.json", "w" );
	fwrite($jsonFile , $donnerDataJson);
	fclose($jsonFile);
    header('location: ../../View/Donner/donnerLogin.html');
 }

}

?>