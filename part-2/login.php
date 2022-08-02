<?php
include 'asset.php';

class Login
{

	public static function login()
	{
		if (!Asset::is_loggedIn()) {
			header("location: index.php");
		}
		$user_email = $_POST['email'];
		$user_password = $_POST['password'];
		$loggedIn_user = [
			'email' => $user_email,
			'password' => $user_password
		];
		$_SESSION['login'] = $loggedIn_user;
		header('location: home.php');
	}

	
}

Login::login();
