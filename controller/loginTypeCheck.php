<?php 
if(isset( $_POST['submit'])){
  
  
    $type = $_POST['loginType'];
    
    if($type == "Admin"){
      
      header('location: ../View/Admin/adminLogin.html');
     
    }
    if($type == "Employee"){
      
      header('location: ../View/Admin/adminLogin.html');
     
    }
    if($type == "Donner"){
      
      header('location: ../View/Admin/adminLogin.html');
     
    }
    if($type == "Applicant"){
      
      header('location: ../View/Admin/adminLogin.html');
     
    }
    else{
      echo "You need select a option";
    }

    
  }


?>