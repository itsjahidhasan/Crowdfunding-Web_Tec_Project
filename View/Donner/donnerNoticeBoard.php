<?php

require_once('../../Model/Admin/adminModel.php');
$users =   getAllAdminNotice();

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Notice Board|FoundBD</title>
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
            <a href="./donnerDashboard.html">Dashboard</a>&nbsp;
            <a href="./viewProfile.php">Profile</a>&nbsp;
            <a href="./donnerNotification.html">Notification</a>&nbsp;
            
          </td>
        </tr>
      </table>
      <table align="right">
          <tr>
              <td>
                <a href="../../controller/logout.php">Logout</a>
              </td>
          </tr>

      </table>
    </fieldset>
          <!-- ...............................Header Close....................... -->



          <!-- .................................Main Content..................... -->
    <fieldset>
  <form method="post" action="" >
    <fieldset>
    
        <legend><b><h3>Donner Notice Board</h3></b></legend><br>
    
  
            <?php 
            $data = '<table >
            <tr>
                
                <th align="center">User Name</th>
                <th align="center">Notice</th>
                
            </tr>';
  
            for($i=0; $i < count($users); $i++) {
            $data .= "<tr>
                        
                        <td>{$users[$i]['username']}</td>
                        <td>{$users[$i]['notice']}</td>
                        
                     </tr>";
    }
  
  
    $data .= "</table>";
            
    echo $data;
            
            ?>
          

        </table> 
    </fieldset>
    </form>
</fieldset>
    <!-- .................................Main Content..................... -->

    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">Copyright	&#169;2021</p>
    </fieldset>
    <!-- .................................Footer Close..................... -->
  </form>

</body>
</html>