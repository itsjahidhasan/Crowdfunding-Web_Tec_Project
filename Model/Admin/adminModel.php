<?php
	
	require_once('db.php');

	function adminLogin($userName, $password){
		$conn = getConnection();
		$sql = "select * from admininfo where username='{$userName}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
    
    
		if(count($row) > 0){
			return true;
		}else{
			return false;
		}
	}


  function getUserByUsername($userName){
		$conn = getConnection();
		$sql = "select * from admininfo where username='{$userName}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
    $user = [];
    array_push($user, $row);
		return $user;
	}



	function updateUser($user){
		$conn = getConnection();
		$sql = "update admininfo set name='{$user['name']}', email='{$user['email']}', gender='{$user['gender']}', dateOfBirth='{$user['dateOfBarth']}' where username='{$user['username']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function updatePassword($user){
		$conn = getConnection();
		$sql = "update admininfo set password='{$user['password']}' where username='{$user['username']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function insertNotice($user){
		$conn = getConnection();
		$sql = "insert into notice values('', '{$user['username']}', '{$user['notice']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}



	function getAllAdminNotice(){
		$conn = getConnection();
		$sql = "select * from notice";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}



  function getEmployeeifo(){
		$conn = getConnection();
		$sql = "select * from emplyinfo";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}
  function getAppinfo(){
		$conn = getConnection();
		$sql = "select * from appinfo";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}
  function getDoninfo(){
		$conn = getConnection();
		$sql = "select * from doninfo";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}



?>