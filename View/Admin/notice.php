<?php
    session_start();
    $jsonFile= fopen("../../Model/Admin/notice.json","r");
    $jsonRead= fread($jsonFile,filesize("../../Model/Admin/notice.json"));
    $adminNotice = json_decode($jsonRead, true);
    $notice = $adminNotice ['notice'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FundBD | Notification</title>
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
          <legend>Notice uploaded by Admin</legend>
          <table align="center" width="1000">
            <tr>
              <td align="center"><h3><?php echo $notice?></h3></td>
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