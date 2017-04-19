<?php

class Event
{
	public $eventname = "";
	public $eventid = 0;

	//submits the event name created by the user into the event stable, and creates a new open event for the host to invite people to
	public function newEvent(){

		global $conn;

		$neweventname = $_POST["neweventname"];
		$insertinfo = "INSERT INTO event (eventname, userid) VALUES ('$neweventname', ".  $_SESSION["userid"] .")";

		if ($conn->query($insertinfo) === TRUE) {
			echo "event created successfully";
		} else {
			   echo "Error: " . $insertinfo . "<br>" . $conn->error;
		}
		
	}


	//gets info about the current event the user is viewing
	public function currentEvent(){

		global $conn;
		//die("dead1" . $this->eventname);

		if(isset($_GET["eventname"])){

		$this->eventname = $_GET["eventname"];
			
			$userevent = "SELECT eventname, status, eventid, userid FROM event WHERE userid = '" . $_SESSION["userid"] ."' AND eventname='" . $_GET["eventname"] . "'";
			$result = $conn->query($userevent);
			

			if ($result->num_rows > 0) {
				//echo "num rows  = " . $result->num_rows;

				// output data of each row
				while($row = $result->fetch_assoc()) {

					//print_r($row);
					/*
					$eventid = $row["eventid"];
					$eventname = $row["eventname"];
					$eventopen = $row["status"];
					$_SESSION["userid"] = $row["userid"];
					$_SESSION["fullname"] = $row["fullname"];
					*/

					$this->eventid = $row["eventid"];
					$this->eventname = $row["eventname"];
				}
			}
			else{
				//echo "no result";
			}
		}

		
	}

	public function displayEventName(){
			echo $this->eventname;
		}

}



