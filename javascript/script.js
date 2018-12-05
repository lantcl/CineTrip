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

	var comedy = document.getElementById("comedy");
	var horror = document.getElementById("horror");
	var drama = document.getElementById("drama");
	var romance = document.getElementById("romance");
	var scifi = document.getElementById("scifi");

	var genreicons = document.getElementsByClassName("genreicon");
	for(i=0; i<genreicons.length; i++){
		genreicons[i].addEventListener("click", searchGenrefunction, false);
	}
	


var results2 = document.getElementById("results2");

function searchGenrefunction(e){
    var myRequest = new XMLHttpRequest; 

myRequest.onreadystatechange = function(){   

	if(myRequest.readyState === 4){        
	
		console.log(e.target.id);
		//console.log(myRequest.responseText);// modify or populate html elements based on response.
		var genres = JSON.parse(myRequest.responseText);

		results2.innerHTML = '';
		for(var i=0; i<genres.length; i++){

			var newPTag = document.createElement("p");
			var newaTag = document.createElement("a");
			newaTag.setAttribute("href", "locations.php?id="+genres[i].id);
			var textNode = document.createTextNode(genres[i].locationname);

			newPTag.appendChild(textNode);
			newaTag.appendChild(newPTag);

			
			results2.appendChild(newaTag);

		}
	} 
};


	myRequest.open("POST", "genre-search-process.php", true);
	myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
	myRequest.send("genre=" + e.target.id); 	
}