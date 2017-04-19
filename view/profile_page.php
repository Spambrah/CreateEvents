<!-- <div class="box-of-unanswered-questions"><p>box of unaswered questions</p></div> -->

			<?php





/*
			$user = new User;
			$userid="";
				if(isset($_SESSION["userid"])){
					$userid = $_SESSION["userid"];
					$user->userid = $_SESSION["userid"];
				}

				$user->displayUserInfo();
				$user->usersEvents();
				$user->usersQuestion();

*/

				if($loggedin){
					$user->displayUserInfo();
					$user->usersEvents();
					$user->usersQuestion();
				}




			?>

<a href="index.php?page=new_event">Create an Event</a>
