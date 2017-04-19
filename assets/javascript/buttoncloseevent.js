var closeEvent;

window.onload = function(){

closeEvent = document.querySelector(".close");
closeEvent.addEventListener("click", closeAjax);

}

function closeAjax(){
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
            }
        };
        xmlhttp.open("GET", "handle_events.php?closevent=true", true);
        xmlhttp.send();
}
