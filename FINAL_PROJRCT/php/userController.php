<?php 
	session_start();
	require_once('../php/session_header.php');
	require_once('../service/userService.php');


	//add user
	if(isset($_POST['create'])){
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/register.php?error=null_value');
		}else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email
			];

			$status = insert($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/create.php?error=db_error');
			}
		}
	}

	//add company
	if(isset($_POST['create_com'])){
		$com_name 	 = $_POST['com_name'];
		$description = $_POST['description'];
		$industry 	 = $_POST['industry'];
		$website 	 = $_POST['website'];
		$logo 		 = $_POST['logo'];
		$userid 	 = $_POST['userid'];

		if(empty($com_name) || empty($description) || empty($industry) || empty($website) || empty($logo) || empty($userid)){
			header('location: ../views/creat_company.php?error=null_value');
			echo "null_value";
		}else{

			$company = [
				'com_name'   => $com_name,
				'description'=> $description,
				'industry'   => $industry,
				'website'    => $website,
				'logo'       => $logo,
				'userid'     => $userid
			];

			$status = insertCompany($company);

			if($status){
				header('location: ../views/all_companies.php?success=done');
			}else{
				header('location: ../views/create_company.php?error=db_error');
			}
		}
	}

	//update user
	if(isset($_POST['edit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$id 		= $_POST['id'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/edit.php?id={$id}');
		}else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email,
				'id'=> $id
			];

			$status = update($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/edit.php?id={$id}');
			}
		}
	}

	//update company
	if(isset($_POST['C_edit'])){

		$com_name 	 = $_POST['company_name'];
		$description = $_POST['profile_description'];
		$industry 	 = $_POST['industry'];
		$website 	 = $_POST['company_website'];
		$logo 		 = $_POST['company_logo'];
		$userid 	 = $_POST['user_account_id'];
		$id          = $_POST['id'];

		if(empty($com_name) || empty($description) || empty($industry) || empty($website) || empty($logo) || empty($userid)){
			header('location: ../views/edit_com.php?id={$id}');
		}else{

			$company = [
				'com_name'   => $com_name,
				'description'=> $description,
				'industry'   => $industry,
				'website'    => $website,
				'logo'       => $logo,
				'userid'     => $userid,
				'id'         => $id
			];

			$status = updateCom($company);

			if($status){
				header('location: ../views/all_companies.php?success=done');
			}else{
				header('location: ../views/edit_com.php?id={$id}'r);
			}
		}
	}
	

	if(isset($_POST['delete'])){

		$id = $_POST['id'];

		if(empty($id)){
			header('location: ../views/delete.php?id={$id}');
		}else{

			$user = [
				'id'=> $id
			];

			$status = delete($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/delete.php?id={$id}');
			}
		}
	}

	if(isset($_POST['C_delete'])){
		$id = $_POST['id'];

		if(empty($id)){
			header('location: ../views/delete_com.php?id={$id}');
		}else{

			$company = [
				
				'id'=> $id
			];

			$status = deleteCom($company);

			if($status){
				header('location: ../views/all_companies.php?success=done');
			}else{
				header('location: ../views/delete_com.php?id={$id}');
			}
		}
	}

?>