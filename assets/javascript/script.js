
window.onload = function(){

	var myForm = document.getElementById("createnewevent");
	var emailInput = document.getElementById("inviteuserbyemail");
	emailInput.addEventListener("focusout", ValidateEmail);
	var isValid = true;
	
	function ValidateEmail(event){

		isValid = true;
		var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		var emails = emailInput.value.split(",");
		emails.forEach(function (email) {
	  		email.trim();
	  		if (regex.test(emailInput.value)){  
	   			//console.log("ok");
	  		}  else{
	  			isValid = false; 
			}
		});

		if(isValid == false){
			console.log("You have entered an invalid email address!");
		}
	}
}


