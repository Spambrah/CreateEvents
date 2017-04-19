<?php
	//die("dead");
	$event = new Event;
		/*
		$eventid="";
			if(isset($_SESSION["eventid"])){
				$eventid = $_SESSION["eventid"];
				$event->eventid = $_SESSION["eventid"];
			}
		*/


	$event->currentEvent();


?>



<h2><?php $event->displayEventName(); ?></h2>

<!-- Displays invited users -->
<div></div>

<!-- Displays the question relevant to the event -->

<div>
	
<?php
 //$question->displayQuestionForEvent($event->eventid);


?>
</div>

<!-- Form to submit question to the event -->
<div>
	<form action="index.php?page=handle_events" method="POST">
		<input type="hidden" name="eventid" value = "<?=$event->eventid?>"/>
		<span>Question : </span><input type="text" name="newtextquestion" placeholder="Write your question here" />
		<span>Answer 1 : </span><input type="text" name="answerone" />
		<span>Answer 1 : </span><input type="text" name="answertwo" />
		<span>Answer 1 : </span><input type="text" name="answerthree" />
		<input type="submit" name="createquestion"/>
	</form>

</div>


<!-- Close button ends the event -->
</br>
<button class="close">Close the Event</button>


