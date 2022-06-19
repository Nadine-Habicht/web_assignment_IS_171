function vmnumber() {
	let x=document.getElementById("mnumber").value;
	if (isNaN(x) || x<0600000001 || x>0799999999){
		alert("Please input a valid phone number");
	}
}

function ValidateLength(){
	if(document.getElementById('firstname').value.length > 30){
		alert("First name should be less than 30 characters")
	}
	if(document.getElementById('lname').value.length > 30){
		alert("Last name should be less than 30 characters")
	}
	if(document.getElementById('fteacher').value.length > 30){
		alert("Last name should be less than 30 characters")
	}
	if(document.getElementById('headm').value.length > 30){
		alert("Last name should be less than 30 characters")
	}
	if(document.getElementById('occupation').value.length > 20){
		alert("Current occupation should not exceed 20 characters")
	}
}

function go(){
	alert ("You can now go to the Alumni page.");
}

