<?php


class QuestionAnswer{

	public $questionid;

	//gets info about questions
	public function getQuestion(){

		global $conn;
			
		$questioninfo = "SELECT count, textquestion, questionid FROM questions WHERE userid = '" . $_SESSION["userid"];
		$result = $conn->query($questioninfo);
		$result->fetch_assoc();

		$this->questiontext = ($_GET["questiontext"]);

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$questionid = $row["questionid"];
				$questiontext = $row["textquestion"];
				$questioncount = $row["count"];
				$_SESSION["userid"] = $row["userid"];
			}
		}
	}


	public function createQuestion($eventid){
		global $conn;

		$newtextquestion = $_POST["newtextquestion"];

		if(isset($newtextquestion)){
			//$insertquestion = "INSERT INTO questions (textquestion, eventid) VALUES ('$newtextquestion','$this->eventid')";
			$insertquestion = "INSERT INTO questions (textquestion, eventid, userid) VALUES ('$newtextquestion','$eventid', '" . $_SESSION["userid"] ."')";
		}

		if ($conn->query($insertquestion) === TRUE) {
			$last_id = $conn->insert_id;
			   echo "QUESTION $last_id created successfully";
			   return $last_id;
			} else {
			   echo "Error: " . $insertquestion . "<br>" . $conn->error;
		}
		return 0;

	}


	public function displayQuestionForEvent($eventid){

		global $conn;

		//$eventsquestions = "SELECT textquestion, questionid FROM question WHERE eventid = '" . $this->eventid . "' ";
		$eventsquestions = "SELECT textquestion, questionid FROM question WHERE eventid = '" . $eventid . "' ";

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$questionsid = $row["questionsid"];
				$question = $row["textquestion"];

				echo "the question of ". $questionsid ." is " . $question . "</br>";
			}
		} else {
			echo "No questions associated with " . $this->userid;
		}

		echo ($this->questiontext);
	}

	public function insertAnswer($questionid){

		global $conn;


		$answers = [];

		if(isset($_POST["answerone"])){
			$answers[] = $_POST["answerone"];

		}

		if(isset($_POST["answertwo"])){
			$answers[] = $_POST["answertwo"];
		}

		if(isset($_POST["answerthree"])){
			$answers[] = $_POST["answerthree"];
		}
/*
		$newanswer = $_POST["newanswer"];

		if(isset($newanswer)){
			$insertanswer = "INSERT INTO answer (answer, questionid) VALUES ($newanswer, $questionid)";
		}
*/

		print_r($answers);


		if(count($answers)){
			foreach($answers as $ans){
				$insertanswer = "INSERT INTO `answer` (`answer`, `questionid`) VALUES ('$ans', '$questionid');";
				$conn->query($insertanswer);
			}
			
		}
	}







}