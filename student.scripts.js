

function setRegisterStudent(e){
	e.preventDefault();
	var action = "register-student";
	var userid = document.getElementById('userid').value;
	var fname = document.getElementById('fname').value;
	var lname = document.getElementById('lname').value;
	var email = document.getElementById('email').value;
	var pass = document.getElementById('password').value;
	var cpass = document.getElementById('confirm-password').value;
	var param = "userid="+userid+"&fname="+fname+"&lname="+lname+"&email="+email+"&password="+pass+"&confirm-password="+cpass+"&action="+action;
	
	var xhr = new XMLHttpRequest();
	xhr.open('POST', './server/server.php', true);
	xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	
	xhr.onreadystatechange = function(){
		if(xhr.readyState === 4 && xhr.status === 200){
			console.log(xhr.responseText);
			var result = xhr.responseText;
			if(result == "Success"){
				document.getElementById("error").innerHTML = "Succesfully Registered!";
				document.getElementById("error").style.color = "white";
				document.getElementById('userid').value = "";
				document.getElementById('fname').value = "";
				document.getElementById('lname').value = "";
				document.getElementById('email').value = "";
				document.getElementById('password').value = "";
				document.getElementById('confirm-password').value = "";
			}else{
				document.getElementById("error").innerHTML = result;
				document.getElementById("error").style.color = "red";
			}
		}
	}
	
	xhr.send(param);
}

