
	<!-- the idea of this page is to insert event name into the events table database based on the userid from a form -->

	<h3>Create a new event</h3>
	<form id="createnewevent" action="index.php?page=new_event" method="POST">
		<input type="text" name="neweventname" placeholder="Event name"/>
		<input id="inviteuserbyemail" type="text" name="inviteusers" placeholder="Invite user by email" />
		<input type = "submit">
	</form>



