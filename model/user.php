<?php

class User
{
	public $userid;

	//function that sends info from register_new_user.php form to the user table 
	public function createNewUser(){

		global $conn;

		$newfullname = $_POST["newfullname"];
		$newemail = strval($_POST["newemail"]);
		$newpassword = $_POST["newpassword"];

		if(isset($newfullname) && isset($newemail) && isset($newpassword)){
			$createUser = "INSERT INTO users (fullname, email, password) VALUES ('$newfullname', '$newemail', '$newpassword');";
		}

		if ($conn->query($createUser) === TRUE) {
			   echo "USER created successfully";
			} else {
			   echo "Error: " . $createUser . "<br>" . $conn->error;
		}
	}


	//function to display info about the user - i.e. what event are they invited to and what questions have they not yet answered.
	public function displayUserInfo(){
		//global $conn;

		// $email="";
		// if(isset($_POST["login-with-email"])){
		// 	$email = $_POST["login-with-email"];
		// }
		
		// $password = "";
		// if(isset($_POST["password"])){
		// 		$password = $_POST["password"];
		// 	}
		

		// $userloggedin = "SELECT email, password, fullname, userid FROM users WHERE email = '$email' AND password = '$password'";

		// $result = $conn->query($userloggedin);

		// 	if ($result->num_rows > 0) {
		// 		while($row = $result->fetch_assoc()) {
		// 			$_SESSION["userid"] = $row["userid"];
		// 			$_SESSION["fullname"] = $row["fullname"];
		// 			echo "<h1> Welcome " .  $_SESSION["fullname"] . "</h1>";
		// 		}
		// 	} else {
		// 		echo "0 results";
		// 	}

		if(isset($_SESSION["userid"]) && $_SESSION["userid"]){
			echo "<h1> Welcome " .  $_SESSION["fullname"] . "</h1>";
		}
		elseif($this->checkUser()){
			echo "<h1> Welcome " .  $_SESSION["fullname"] . "</h1>";			
		}
		else{
			echo "loggin here";  //add href here
		}



	}

	public function checkUser(){

		global $conn;

		if(isset($_SESSION["userid"]) && $_SESSION["userid"]){
			$this->userid = $_SESSION["userid"];
			return true;
		}


		$email="";
		if(isset($_POST["login-with-email"])){
			$email = $_POST["login-with-email"];
		}
		
		$password = "";
		if(isset($_POST["password"])){
				$password = $_POST["password"];
			}
		

		$userloggedin = "SELECT email, password, fullname, userid FROM users WHERE email = '$email' AND password = '$password'";

		$result = $conn->query($userloggedin);

		$userloggedin = false;

			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$_SESSION["userid"] = $row["userid"];
					$_SESSION["fullname"] = $row["fullname"];
					$this->userid = $_SESSION["userid"];
					$userloggedin = true;
				}
			}
			return $userloggedin;

	}







	//figures out the events associated with the user based on the userid
	public function usersEvents(){

		global $conn;

		$userevent = "SELECT eventname, status, eventid FROM event WHERE userid = '" . $this->userid . "' ";
					$result = $conn->query($userevent);

					//var_dump($result);

					if ($result->num_rows > 0) {
					    while($row = $result->fetch_assoc()) {
					    	//print_r($row);
					        $eventid = $row["eventid"];
					        //$eventid = $_SESSION["eventid"];
					        $eventname = $row["eventname"];

					        echo "Go to ". $eventid ." : <a href='index.php?page=current_event&eventname=" . $eventname . "'>$eventname</a></br>";
					    }
					} else {
					    echo "No events associated with " . $this->userid;
					}
	}	

	//figures out the questions associated with the user based on the userid
	public function usersQuestion(){

		global $conn;
		
		$userquestion = "SELECT textquestion, questionsid FROM questions WHERE userid = '" . $this->userid . "' ";
		$result = $conn->query($userquestion);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$questionsid = $row["questionsid"];
				$question = $row["textquestion"];

				echo "the question of ". $questionsid ." is " . $question . "</br>";
			}
		} else {
			echo "No questions associated with " . $this->userid;
		}
	}
					

	

}





