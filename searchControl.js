
function showTable() { // bus
	document.getElementById("txtHint").innerHTML = "";

	if(document.getElementById("date").value != ""){
		var d1 = new Date(document.getElementById("date").value).toISOString();  // eta use kori nai. chaile korte paris

	}
	else {	
		document.getElementById("datereq").innerHTML = "* Please Select Date!";  // calender er validation, bt calender search er jonno use e kori nai, sob bus dekhabe oi route a
		document.searchform.date.focus();
		return false;
	}


	var leave =  document.getElementById("search_leavingform").value.trim();
	var str = document.getElementById("search_goingto").value.trim();
	document.getElementById("datereq").innerHTML = "*";


	  var xhttp; 
	  if (str == "") {
	    document.getElementById("txtHint").innerHTML = "Select Where you want to go!!";
	    return false;
	  }



	  if (window.XMLHttpRequest) {
	    // eta mordern browser er jonno, like chrome , new IE etc
	   	xhttp = new XMLHttpRequest();
	    } else {
	    // eta  IE6, IE5 browser er jonno
	    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xhttp.onreadystatechange = function() {
	    if (xhttp.readyState == 4 && xhttp.status == 200) {
	    document.getElementById("txtHint").innerHTML = xhttp.responseText;
	    }
	  };

	  	xhttp.open("GET", "./searchAction.php?q="+leave+"&p="+str+"&t=0", true);
	
	

	  xhttp.send();
	
	  return true;
}


function showTableTrain() {  // train
	document.getElementById("txtHint").innerHTML = "";

	if(document.getElementById("date").value != ""){
		var d1 = new Date(document.getElementById("date").value).toISOString();  // eta use kori nai. chaile korte paris

	}
	else {	
		document.getElementById("datereq").innerHTML = "* Please Select Date!";  // calender er validation, bt calender search er jonno use e kori nai, sob bus dekhabe oi route a
		document.searchform.date.focus();
		return false;
	}


	var leave =  document.getElementById("search_leavingform").value.trim();
	var str = document.getElementById("search_goingto").value.trim();
	document.getElementById("datereq").innerHTML = "*";


	  var xhttp; 
	  if (str == "") {
	    document.getElementById("txtHint").innerHTML = "Select Where you want to go!!";
	    return false;
	  }



	  if (window.XMLHttpRequest) {
	    // eta mordern browser er jonno, like chrome , new IE etc
	   	xhttp = new XMLHttpRequest();
	    } else {
	    // eta  IE6, IE5 browser er jonno
	    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xhttp.onreadystatechange = function() {
	    if (xhttp.readyState == 4 && xhttp.status == 200) {
	    document.getElementById("txtHint").innerHTML = xhttp.responseText;
	    }
	  };

	  	
		xhttp.open("GET", "./searchAction1.php?q="+leave+"&p="+str+"&t=0", true);
	

	  xhttp.send();
	
	  return true;
}


function showTablePlane() {  // plane
	document.getElementById("txtHint").innerHTML = "";

	if(document.getElementById("date").value != ""){
		var d1 = new Date(document.getElementById("date").value).toISOString();  // eta use kori nai. chaile korte paris

	}
	else {	
		document.getElementById("datereq").innerHTML = "* Please Select Date!";  // calender er validation, bt calender search er jonno use e kori nai, sob bus dekhabe oi route a
		document.searchform.date.focus();
		return false;
	}


	var leave =  document.getElementById("search_leavingform").value.trim();
	var str = document.getElementById("search_goingto").value.trim();
	document.getElementById("datereq").innerHTML = "*";


	  var xhttp; 
	  if (str == "") {
	    document.getElementById("txtHint").innerHTML = "Select Where you want to go!!";
	    return false;
	  }



	  if (window.XMLHttpRequest) {
	    // eta mordern browser er jonno, like chrome , new IE etc
	   	xhttp = new XMLHttpRequest();
	    } else {
	    // eta  IE6, IE5 browser er jonno
	    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xhttp.onreadystatechange = function() {
	    if (xhttp.readyState == 4 && xhttp.status == 200) {
	    document.getElementById("txtHint").innerHTML = xhttp.responseText;
	    }
	  };

	  	
		xhttp.open("GET", "./searchAction2.php?q="+leave+"&p="+str+"&t=0", true);
	

	  xhttp.send();
	
	  return true;
}

