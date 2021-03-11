<?php 
if(isset( $_POST['submit'])){
  
  if(isset($_POST['radio'])){
    $type = $_POST['loginType'];
    if($type == "Admin"){
      header('location: ../View/Admin/adminLogin.html');
     
    }
  }
}

?>