function ajax(){

	var xhttp = new XMLHttpRequest();


	xhttp.open('GET', '../../controller/Applicant/applicantGetDonationDetails.php', true);
	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xhttp.send();
	

	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			
			document.getElementById('result').innerHTML = this.responseText;
		}
	}
}
