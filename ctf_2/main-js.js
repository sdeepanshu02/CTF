function logmein(){
	//displays a popup asking for username and password and then submits it to the server
	overlay = document.createElement('div');
	loginform = document.createElement('div');
	overlay.style.cssText = "position:absolute;height:100%;width:100%;background:rgba(0,0,0,0.7) !important;background:black;filter:alpha(opacity=70)";
	overlay.id = "overlay";
	if(overlay.addEventListener)
		overlay.addEventListener('click',hideoverlay);
	else
		overlay.attachEvent('onclick',hideoverlay);
	loginform.style.cssText = "position:absolute;height:150px;width:250px;left:50%;top:50%;margin-top:-75px;margin-left:-125px;background:white";
	loginform.id ="loginform";
	form ="<br /><form action=\"login.php\" method=\"POST\">\
			<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:<input type=\"email\" placeholder=\"Enter your email here\" name=\"username\" /></div><br/>\
			<div>&nbsp;&nbsp;Password:<input type=\"password\" placeholder=\"Enter password here\" name=\"password\" /></div><br />\
			&nbsp;&nbsp;<input type=\"submit\" value=\"Log in\" />\
	";
	loginform.insertAdjacentHTML('afterbegin',form);
	document.body.appendChild(overlay);
	document.body.appendChild(loginform);
} 

function registerin(){
	//displays a popup asking for username and password and then submits it to the server
	overlay = document.createElement('div');
	registerform = document.createElement('div');
	overlay.style.cssText = "position:absolute;height:100%;width:100%;background:rgba(0,0,0,0.7) !important;background:black;filter:alpha(opacity=70)";
	overlay.id = "overlay";
	if(overlay.addEventListener)
		overlay.addEventListener('click',hideoverlay);
	else
		overlay.attachEvent('onclick',hideoverlay);
	registerform.style.cssText = "position:absolute;height:150px;width:250px;left:50%;top:50%;margin-top:-75px;margin-left:-125px;background:white";
	registerform.id ="registerform";
	form ="<br /><form action=\"register.php\" method=\"POST\">\
			<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:<input type=\"email\" placeholder=\"Enter your email here\" name=\"username\" /></div><br/>\
			<div>&nbsp;&nbsp;Password:<input type=\"password\" placeholder=\"Enter password here\" name=\"password\" /></div><br />\
			<div>&nbsp;&nbsp;Confirm Password:<input type=\"password\" placeholder=\"Confirm password \" name=\"cnfpassword\" /></div><br />\
			&nbsp;&nbsp;<input type=\"submit\" value=\"Register\" />\
	";
	registerform.insertAdjacentHTML('afterbegin',form);
	document.body.appendChild(overlay);
	document.body.appendChild(registerform);
}

function hideoverlay(){
	document.body.removeChild(document.getElementById('overlay'));
	document.body.removeChild(document.getElementById('loginform'));
	document.body.removeChild(document.getElementById('registerform'));
}

