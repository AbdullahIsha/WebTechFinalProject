<?php
	require_once('../php/session_header.php');
	require_once('../services/managerService.php');

	if(isset($_POST['submit'])){

		$email = $_POST['email'];
		$password = $_POST['password'];

		if(empty($email) || empty($password)){
			header('location: ../views/login.php?error=null_value');
		}else{

			$user = [
				'email'=>$email,
				'password'=>$password,
			];
			
			$status = validate($user);

			$id = $status['id'] ;
			$name = $status['name'] ;
			$phone = $status['phone'] ;
			$profile_picture = $status['profile_picture'];
			$userType = $status['userType']; 


			if($status){
				$status['id'] = $id;
				$status['name'] = $name;
				if($status['userType'] == "Manager"){
					$_SESSION['name'] = $name;
					$_SESSION['email'] = $email;
					$_SESSION['id'] = $id;

					setcookie('phone', $phone, time()+3600, '/');
					setcookie('profile_picture', $profile_picture, time()+3600, '/'); 
					setcookie('userType', $userType, time()+3600, '/');
					setcookie('status', "OK", time()+3600, '/');

					header('location: ../views/manager_page.php');
				} 
				else if($status['userType'] == "Chef"){

					$_SESSION['name'] = $name;
					$_SESSION['email'] = $email;
					$_SESSION['id'] = $id;

					setcookie('phone', $phone, time()+3600, '/');
					setcookie('profile_picture', $profile_picture, time()+3600, '/'); 
					setcookie('userType', $userType, time()+3600, '/');
					setcookie('status', "OK", time()+3600, '/');
					
					header('location: ../views/chef_page.php');
				}
				else{
					echo "sorry!!!";
				}
			}else{
				header('location: ../views/login.php?error=invalid_user');
			}
		}
	}
?>