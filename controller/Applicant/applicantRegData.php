<?php


    session_start();

if ( isset ( $_POST [ 'submit' ] ) ) {

	$name = $_POST [ 'name' ];
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



    if ( $name == "" || $email == "" || $userName == "" || $password == "" || $confirmPassword == ""|| $day == "" || $month == "" || $year == "" || $occupation == "") {
 	echo "Filled all the file... ";
 }
 elseif ( $password != $confirmPassword) {
 	echo "Password didn't match with confirm Password ";
 }
 else{
 	$applicantData = [	
			                'name'=>$name, 
                      'userName'=>$userName, 
                      'email'=> $email,
                      'password'=>$password, 
                      'gender'=> $gender,
                      'dateOfBarth'=> $dateOfBirth,
                      'occupation'=> $occupation,
                      'yearlyIncome'=> $yearlyIncome,

						];

	$applicantDataJson= json_encode( $applicantData );
	$jsonFile= fopen( "../../Model/Applicant/applicantData.json", "w" );
	fwrite($jsonFile , $applicantDataJson);
	fclose($jsonFile);
    header('location: ../../View/Applicant/applicantLogin.html');
 }

}

?>