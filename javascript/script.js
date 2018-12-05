console.log("connected");

//search by location name or film name
var searchsubmit = document.getElementById("searchsubmit");
var results = document.getElementById("results");

searchsubmit.addEventListener("click", searchfunction1, false);

function searchfunction1(e){
    var myRequest = new XMLHttpRequest; 

myRequest.onreadystatechange = function(){   

	if(myRequest.readyState === 4){        
	
		//console.log(myRequest.responseText);// modify or populate html elements based on response.
		var locations = JSON.parse(myRequest.responseText);

		var searchHeading = document.getElementById("searchHeading");
		searchHeading.innerHTML = "Search results for";
		results.innerHTML = '';
		for(var i=0; i<locations.length; i++){

			var newPTag = document.createElement("p");
			var newaTag = document.createElement("a");
			newaTag.setAttribute("href", "locations.php?id="+locations[i].id);
			var textNode = document.createTextNode(locations[i].locationname);

			newPTag.appendChild(textNode);
			newaTag.appendChild(newPTag);

			
			results.appendChild(newaTag);

		}
	} 
};

	var searchInput = document.getElementById("searchInput");
	myRequest.open("POST", "search-process.php", true);
	myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
	myRequest.send("search=" + searchInput.value); 	
}





//search by genre 

var comedy = document.getElementById("icon-comedy");
var comedy = document.getElementById("icon-horror");
var comedy = document.getElementById("icon-drama");
var comedy = document.getElementById("icon-romance");
var comedy = document.getElementById("icon-scifi");
var results2 = document.getElementById("results2");

searchsubmit.addEventListener("click", searchGenrefunction, false);

function searchGenrefunction(e){
    var myRequest = new XMLHttpRequest; 

myRequest.onreadystatechange = function(){   

	if(myRequest.readyState === 4){        
	
		//console.log(myRequest.responseText);// modify or populate html elements based on response.
		var genres = JSON.parse(myRequest.responseText);

		var searchHeading = document.getElementById("searchHeading");
		searchHeading.innerHTML = "Search results for";
		results2.innerHTML = '';
		for(var i=0; i<genres.length; i++){

			var newPTag = document.createElement("p");
			var newaTag = document.createElement("a");
			newaTag.setAttribute("href", "locations.php?id="+genres[i].id);
			var textNode = document.createTextNode(genres[i].name);

			newPTag.appendChild(textNode);
			newaTag.appendChild(newPTag);

			
			results2.appendChild(newaTag);

		}
	} 
};

	var searchInput = document.getElementById("searchInput");
	myRequest.open("POST", "genre-search-process.php", true);
	myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
	myRequest.send("search=" + searchInput.value); 	
}