function UpdateTime(){
	var d = new Date();
	utc = d.getTime() + (d.getTimezoneOffset() * 60000);
	nd = new Date(utc + (3600000*-6));

	document.getElementById("Time").innerHTML = nd.toLocaleTimeString();
	setTimeout("UpdateTime()",1000);		
}
