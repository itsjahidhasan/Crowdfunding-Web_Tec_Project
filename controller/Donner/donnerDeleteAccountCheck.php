<?php
if($_POST['submit']){
  $uname = $_POST['uname'];
  $password = $_POST['password'];
  $Cnpword = $_POST['Cnpword'];
 
 
  if ( $uname == "" || $password == "" ||$Cnpword=="") {
    echo 'Fill up All the section... go back to <a href="../../View/Donner/donnerDeleteAccount.html">Reload </a>';
  }
 
 
  else{

    echo ' <a href="../../View/Donner/donnerDeleteAccount.html">Reload </a>';
      
  }
}

?>