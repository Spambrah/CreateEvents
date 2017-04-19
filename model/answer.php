<?php

class Answer{

	public function insertAnswer(){

		global $conn;

		$newanswer = $_POST["newanswer"];

		if(isset($newanswer)){
			$insertanswer = "INSERT INTO answer (answer, questionid) VALUES ($newanswer, $this->questionsid)";
		}


	}



}

?>
