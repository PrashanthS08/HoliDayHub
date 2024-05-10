function myfunction(){
	var x=document.getElementById("pass");
	
	if(x.type==="password"){
		x.type="text";
	}
	else{
		x.type="password";
	}
}
function validate(){
	var pass=document.getElementById("pass").value;
	var user=document.getElementById("user").value;
	
	if(user=="Admin" && pass=="Prashu1212"){
		alert("Login successful");
		window.location.replace("display.html");
	}
	else{
		alert("login failed");
		return;
	}
}