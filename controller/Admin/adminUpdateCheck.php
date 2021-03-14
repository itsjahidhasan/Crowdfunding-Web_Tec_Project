<?php
if($_POST['update']){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $dateOfBirth = $_POST['date']."/".$_POST['month']."/".$_POST['year'];
  if ( $name == "" || $email == "" || $_POST['date']==""   || $_POST['month'] == ""  ||  $_POST['year'] == "") {
    echo 'Filled all the file... go back to <a href="../../View/Admin/adminUpdateProfile.html">try again</a>';
  }
  else{
    session_start();
    $adminData=[
                      'name'=>$name, 
                      'userName'=>$_SESSION['usernmae'], 
                      'email'=> $email,
                      'password'=>$_SESSION['password'], 
                      'gender'=> $gender,
                      'dateOfBarth'=> $dateOfBirth,
    ];
    $adminDataJson= json_encode( $adminData );
    $jsonFile= fopen( "../../Model/Admin/adminData.json", "w" );
    fwrite($jsonFile , $adminDataJson);
    fclose($jsonFile);
    header('location: ../../View/Admin/adminProfile.php');
  }
}

?>