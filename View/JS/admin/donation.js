function ajax(){

	var xhttp = new XMLHttpRequest();


	xhttp.open('GET', '../../controller/Admin/getTran.php', true);
	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xhttp.send();
	

	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			
			document.getElementById('result').innerHTML = this.responseText;
		}
	}
}
function toggle() {
	var tog = document.getElementById("result");
	if (tog.style.display === "none") {
		tog.style.display = "block";
	} else {
		tog.style.display = "none";
		
	}
}