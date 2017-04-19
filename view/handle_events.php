
<?php			
			if(isset($_GET["closevent"])){
				echo "event closed successfully";
			}


	$eventid = isset($_POST['eventid']) ? $_POST['eventid'] : NULL;

	if($eventid){

		/*
		$question = new Question;
		//$answer = new Answer;

		$question->createQuestion($eventid);
		//$answer->insertAnswer();
		*/
		$qA = new QuestionAnswer;

		$questionid = $qA->createQuestion($eventid);

		//echo "the is id $questionid";
		$qA->insertAnswer($questionid);



	}

	

?> 