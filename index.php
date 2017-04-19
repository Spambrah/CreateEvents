<?php

	include("model/connecttodatabase.php");
	include("model/functions.php");
	include("view/header.php");


	/*
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}else{
		$page = NULL;
	}
	*/
	$page = isset($_GET['page']) ? $_GET['page'] : NULL;


	$loggedin = false;

	if(isset($_GET['logout']) && $_GET['logout']){
		$_SESSION["userid"] = 0;
	}
	else{
		$user = new User;
		$loggedin = $user->checkUser();
	}

	if(!$loggedin){
		if($page == "register_new_user"){
			include("view/register_new_user.php");
		}else{
			include("view/signin.php");
		}
	//} elseif($page) {
		}else{
		switch($page){
			case "events": 
				include("view/events.php");
				break;

			case "profile": 
				include("view/profile_page.php");
				break;

			case "new_event": 
				include("view/create_new_event.php");
				break;

			case "handle_events": 
				if (isset($_POST)) {
			        print_r($_POST);
	            }
				include("view/handle_events.php");
				break;

			case "current_event": 
				include("view/current_event.php");
				break;

			default: 
				include("view/signin.php");
		}
	}

	include ("view/footer.php");
?>