<!-- Logo, login and about box -->
		<div class="main-container">
			<img src="assets/images/event_creator_logo.png">
			<h1>Event Creator</h1>


		<?php   if($loggedin){
			echo "User is logged in right now";
		}
		else{





		?>
			<form class="login-box" action = "index.php?page=profile" method="POST">
				<i class="fa fa-envelope" aria-hidden="true"></i>
				<input type="email" name="login-with-email" placeholder="Login with email" />
				<input type="password" name="password" placeholder="password" />
				<input type="submit" value="submit">
			</form>	

			<a href="index.php?page=register_new_user">Register as a new user</a>

			<?php


		}

		?>

			<div class="about-blurb-box">
				<span>Event creator helps you create your events. Login now to begin creating your awesome experience.</span>
			</div>
		</div>