var contactForm = document.getElementById("contactForm");
var sendBtn = document.getElementById("sendBtn");

sendBtn.addEventListener("click", addMsgFunction, false);

function addMsgFunction(e) {
	var myRequest = new XMLHttpRequest; 
	myRequest.onreadystatechange = function(){     
	    
		if(myRequest.readyState === 4){        
			//console.log(myRequest.responseText);// modify or populate html elements based on response.
			var responseObj = JSON.parse(myRequest.responseText);
			console.log(responseObj.success);
		} 
	};

	var nameInput = document.getElementById("nameInput");
	var emailInput = document.getElementById("emailInput");
	var subjectInput = document.getElementById("subjectInput");
	var msgInput = document.getElementById("msgInput");

	myRequest.open("POST", "process-contact.php", true); //true means it is asynchronous // Send urls through the url
	myRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	myRequest.send("name=" + nameInput.value+
		"&email=" + emailInput.value+
		"&subject=" + subjectInput.value+
		"&message=" + msgInput.value);

	contactForm.remove();
	var newPTag = document.createElement("p");
	var newH2Tag = document.createElement("h2");
	newH2Tag.innerHTML = "Thank you!"
	newPTag.innerHTML = "Your message has been sent, and we will get back to you shortly.";
	document.getElementById("msgPg").appendChild(newH2Tag);
	document.getElementById("msgPg").appendChild(newPTag);
}