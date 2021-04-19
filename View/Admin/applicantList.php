<?php
require_once('../../Model/Admin/adminModel.php');
$users =   getAppinfo();
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FundBD | Applicant List</title>
  <link rel="shortcut icon" href="../../assets/icon.png">
</head>
<body>
  <!-- ...............................Header Start....................... -->
  
    <fieldset>
      <table align="center">
        <tr>
          <td>
            <img src="../../assets/imgpsh_fullsize.png" alt="" srcset=""width="200" height="80">
          </td>
          
        </tr>
      </table>
      <table align="center">
        <tr>
          <td>
            <a href="./dashBoard.html">Dashboard</a>&nbsp;
            <a href="./adminProfile.php">Profile</a>&nbsp;
            <a href="./notification.html">Notification</a>&nbsp;
            <a href="../../controller/logout.php">Logout</a>
          </td>
        </tr>
      </table>
    </fieldset>
    <!-- .................................Header Close..................... -->


    

    <!-- .................................Main Content..................... -->
    <fieldset>
      <fieldset>
        <legend>Applicant List</legend>
      <table border="1" align="center" width="800">
        
          
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>User Name</th>
              <th>Date of Birth</th>
            </tr>
            <?php for($i=0; $i < count($users); $i++){ ?>
              <tr>
                <td><?=$users[$i]['id']?></td>
                <td><?=$users[$i]['name']?></td>
                <td><?=$users[$i]['email']?></td>
                <td><?=$users[$i]['username']?></td>
                <td><?=$users[$i]['dateOfBirth']?></td>
                
              </tr>
        
              <?php } ?>
        
      </table>
      <table align="center">
        <tr>
          <td><a href="./updateApplicantList.html">Update Applicant List</a></td>
        </tr>
      </table>
    </fieldset>
    
    </fieldset>
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">copyright	&#169;2021</p>
    </fieldset>

    <!-- .................................Footer Close..................... -->
</body>
</html>