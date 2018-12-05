console.log("connected");

var searchsubmit = document.getElementById("searchsubmit");
var place = document.getElementById("section1");

searchsubmit.addEventListener("click", searchfunction1, false);

// function searchfunction1(e){
// var myRequest = new XMLHttpRequest; 
// 	myRequest.onreadystatechange = function(){    
// 		if(myRequest.readyState === 4){        
// 		var responseObj = JSON.parse(myRequest.responseText);

// 		for(var i=0; i<responseObj.length; i++){
// 			console.log(responseObj[i]);
			
// 			var newPTag = document.createElement("p");

// 			var textNode = document.createTextNode(responseObj[i].locationname);

// 			newPTag.appendChild(textNode);
			
// 			place.appendChild(newPTag);}
// 		}
// 	} 
// 	var input = document.getElementById("input");
// 	myRequest.open("POST", "search-process.php", true); 
// 	myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded")
// 	myRequest.send("search=" + input.value); 
    
    
// }




function searchfunction1(e){
	place.innerHTML = '';
    	var myRequest = new XMLHttpRequest; 

myRequest.onreadystatechange = function(){   

	if(myRequest.readyState === 4){        
	
		//console.log(myRequest.responseText);// modify or populate html elements based on response.
		var locations = JSON.parse(myRequest.responseText);
		console.log(locations);

		for(var i=0; i<locations.length; i++){
			console.log(locations[i]);
			
			var newPTag = document.createElement("p");
			var newaTag = document.createElement("a");
			newaTag.setAttribute("href", "locations.php?id="+locations[i].id);
			var textNode = document.createTextNode(locations[i].locationname);

			newPTag.appendChild(textNode);
			newaTag.appendChild(newPTag);
			
			place.appendChild(newaTag);

		}
	} 
};

myRequest.open("POST", "search-process.php", true); //true means it is asynchronous // Send urls through the url
myRequest.send(null); 	
}