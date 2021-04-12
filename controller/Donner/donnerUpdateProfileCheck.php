<?php
if($_POST['submit']){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $emailCheck = "@gmail.com";
  $dateOfBirth = $_POST['date']."/".$_POST['month']."/".$_POST['year'];
  if ( $name == "" || $email == "" || $_POST['date']==""   || $_POST['month'] == ""  ||  $_POST['year'] == "") {
    echo 'Fill up All the section... go back to <a href="../../View/Donner/donnerRegistration.html">Reload </a>';
  }
  else if(str_word_count($name)<2){
    echo 'You have to give your first name and last name. Ex: FirstName LastName';
    echo '<br><a href="../../View/Donner/donnerRegistration.html">Reload </a>';
  }
  else if(strchr( $email,"@gmail.com")!="@gmail.com"){
    echo 'email formate should be: info@gmail.com <br><a href="../../View/Donner/donnerRegistration.html">Reload </a>';
  }
  else if((int)$_POST['date']>31 ){
    echo 'You have given a invalid date <a href="../../View/Donner/donnerRegistration.html">Reload </a>';
  }
  else if((int)$_POST['month']>12 ){
    echo 'You have given a invalid month <a href="../../View/Donner/donnerRegistration.html">Reload </a>';
  }
  else if((int)$_POST['year']>2002 ){
    echo 'You have given a invalid year <a href="../../View/Donner/donnerRegistration.html">Reload </a>';
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

?>