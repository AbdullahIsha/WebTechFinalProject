<?php 
	require_once('../php/session_header.php');
	require_once('../services/managerService.php');

	if(isset($_POST['submit'])){

		$name 	   = $_POST['name'];
		$email 	   = $_POST['email'];
		$dob       = $_POST['day']."/".$_POST['month']."/".$_POST['year'];
		$picture   = $_POST['picture'];
		$password  = $_POST['password'];
		$Cpassword = $_POST['Cpassword'];
		$userType  = $_POST['type'];
		$phone     = $_POST['phone'];



		if(empty($name) || empty($email) || empty($dob) || empty($picture) || empty($password) || empty($Cpassword) || empty($userType) || empty($phone) ){
			header('location: ../views/register.php?error=null_value');
		}else{

			$user = [
				'name'     => $name,
				'email'    => $email,
				'dob'      => $dob,
				'picture'  => $picture,
				'password' => $password,
				'userType' => $userType,
				'phone'    => $phone
			];

			if ($password == $Cpassword) {

				$status = insert($user);

			    if($status){
				    header('location: ../views/login.php?success=registration_done');
				}else{
					header('location: ../views/register.php?error=db_error');
				}

			}
			else{
				echo "Sorry!";
			}

			
		}
	}
?>