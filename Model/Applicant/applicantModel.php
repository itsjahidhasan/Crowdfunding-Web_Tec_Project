<?php
	
	require_once('db.php');

	function applicantLogin($userName, $password){
		$conn = getConnection();
		$sql = "select * from applicantinfo where username='{$userName}' and password='{$password}'";
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
		$sql = "select * from applicantinfo where username='{$userName}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
    $user = [];
    array_push($user, $row);
		return $user;
	}



	function updateUser($user){
		$conn = getConnection();
		$sql = "update applicantinfo set name='{$user['name']}', email='{$user['email']}', gender='{$user['gender']}', dateOfBarth='{$user['dateOfBarth']}' where username='{$user['username']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function updatePassword($user){
		$conn = getConnection();
		$sql = "update applicantinfo set password='{$user['password']}' where username='{$user['userName']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function insertApplicanData($user){
		$conn = getConnection();
		$sql = "insert into applicantinfo values('', '{$user['name']}', '{$user['email']}', '{$user['password']}',  '{$user['dateOfBarth']}','{$user['userName']}', '{$user['occupation']}', '{$user['yearlyIncome']}', '{$user['gender']}')";
		
		
		
		if(mysqli_query($conn, $sql)){
			return true;
		  }else{
			return false;
		  }
	  }

?>