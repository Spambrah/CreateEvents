<?php
include ("user.php");
include ("event.php");

//include ("question.php");
//include ("answer.php");
include ("question_answer.php");

//actually creates a new user when the new user submit button is clicked
if(isset($_POST["submituser"])){
	createNewUser();
}	

//gets the users event based on which event was clicked on
if(isset($_GET["current_event"])){
	usersEvents();
}

if (isset($_POST["neweventname"])){
	newEvent();
}			

function closeEventButton(){
	if(isset($_GET["closevent"])){
				echo "event closed successfully";
	}
}

?>

