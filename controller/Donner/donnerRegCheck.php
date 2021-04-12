<?php
if($_POST['submit']){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $emailCheck = "@gmail.com";
  $dateOfBirth = $_POST['date']."/".$_POST['month']."/".$_POST['year'];
  if ( $name == "" || $email == "" || $_POST['date']==""   || $_POST['month'] == ""  ||  $_POST['year'] == "")
  {
    echo 'Fill up All the section... go back to <a href="../../View/Donner/donnerRegistration.html">Reload </a>';
  }
  else if(str_word_count($name)<2){
    echo 'Give first name and last name.Such as Ex: FirstName LastName';
    echo '<br><a href="../../View/Donner/donnerRegistration.html">Reload </a>';
  }
  else if(strchr( $email,"@gmail.com")!="@gmail.com"){
    echo 'Formate should be: xyz@gmail.com <br><a href="../../View/Donner/donnerRegistration.html">Reload </a>';
  }
  else if((int)$_POST['date']>31 ){
    echo 'Invalid date <a href="../../View/Donner/donnerRegistration.html">Reload </a>';
  }
  else if((int)$_POST['month']>12 ){
    echo 'Invalid month <a href="../../View/Donner/donnerRegistration.html">Reload </a>';
  }
  else if((int)$_POST['year']>2002 ){
    echo 'Invalid year <a href="../../View/Donner/donnerRegistration.html">Reload </a>';
  }
  if(strlen($_POST["username"])<2)
  {
    echo 'User Name must contain at least two (2) characters <a href="../../View/Donner/donnerLogin.html">Go Back</a>';
  }
  elseif(strlen($_POST['password'])<8)
   {
     echo 'Password must not be less than eight (8) characters and must  contain spcial character <a href="../../View/Donner/donnerRegistration.html">Go Back</a>';
   }
 if(strlen($_POST["username"])>=2 and strlen($_POST['password'])>=8)
  {


      $check = false;
   for ($i=0; $i < strlen($_POST['password']); $i++) 
   { 
       if($_POST['password'][$i] === '@' || $_POST['password'][$i] === '#' || $_POST['password'][$i] === '$' || $_POST['password'][$i] === '%')
     {
       $check = true;
       break;
 
      }
   }

 if($check === false)
 {
    echo 'Password must contain at least one of these special characters (@, #, $, %) <a href="../../View/Donner/donnerRegistration.html">Go Back</a>';
 }
 
 
  else{
    session_start();
    $donnerData=[
                      'name'=>$name, 
                      'userName'=>$_SESSION['usernmae'], 
                      'email'=> $email,
                      'password'=>$_SESSION['password'], 
                      'gender'=> $gender,
                      'dateOfBarth'=> $dateOfBirth,
    ];
    $donnerDataJson= json_encode( $donnerData );
    $jsonFile= fopen( "../../Model/Donner/donnerData.json", "w" );
    fwrite($jsonFile , $donnerDataJson);
    fclose($jsonFile);
    header('location: ../../View/Donner/donnerRegistration.html');
  }
}

}

?>