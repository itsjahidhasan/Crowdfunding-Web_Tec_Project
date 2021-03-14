<?php
    session_start();
    $jsonFile= fopen("../../Model/Admin/adminData.json","r");
    $jsonRead= fread($jsonFile,filesize("../../Model/Admin/adminData.json"));
    $userValue = json_decode($jsonRead, true);
    $name = $userValue ['name'];
		$email = $userValue ['email'];
		$gender = $userValue ['gender'];
    $dob = $userValue ['dateOfBarth'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FundBD | Profile</title>
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
      <table align="center" width="1000">
        <tr>
          <td>
            <h3>Account</h3>
            <hr>
            <ul>
              <li><a href="./dashBoard.html">Dashboard</a></li>
              <li><a href="./adminProfile.php">View Profile</a></li>
              <li><a href="./adminUpdateProfile.html">Edit Profile</a></li>
              <li><a href="#">Change Profile Picture</a></li>
              <li><a href="./adminChangePassword.html">Change Password</a></li>
              <li><a href="./donateToApplicant.html">Donate</a></li>
              <li><a href="./employeeList.html">Employee List</a></li>
              <li><a href="./applicantList.html">Applicant List</a></li>
              <li><a href="./donnerList.html">Donner List</a></li>
              <li><a href="./transctionDetails.html">Transaction Details</a></li>
              <li><a href="./postNotice.html">Post A Notice</a></li>
            </ul>
          </td>
          <td>
            <fieldset>
              <legend>Profile</legend>
              <img src="../../assets/user.png" alt="" width="100" height="100"><br>
              <a href="">Change</a>
              <table>
                <tr>
                  <td>Name &nbsp;&nbsp;</td>
                  <td>:<?php echo $name?></td>
                </tr>
              </table>
              <hr>
              <table>
                <tr>
                  <td>Email &nbsp;&nbsp;</td>
                  <td>:<?php echo $email?></td>
                </tr>
              </table>
              <hr>
              <table>
                <tr>
                  <td>Gender &nbsp;&nbsp;</td>
                  <td>:<?php echo $gender?></td>
                </tr>
              </table>
              <hr>
              <table>
                <tr>
                  <td>Date of Birth &nbsp;&nbsp;</td>
                  <td>:<?php echo $dob?></td>
                </tr>
              </table>
              <hr>
              <a href="./adminUpdateProfile.html">Edit Profile</a><br><br>
            </fieldset>
          </td>
        </tr>
      </table>
    </fieldset>
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">copyright	&#169;2021</p>
    </fieldset>

    <!-- .................................Footer Close..................... -->
</body>
</html>


<?php
   fclose($jsonFile);
?>