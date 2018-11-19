var show = document.getElementById("cntShow");

show.addEventListener("click",showHandler,false);

function showHandler(e){
	var listData = [
	    {href:"search.php", text:"Search", target:"_blank",cls:"big"},
	    {href:"locations.php", text:"Locations", target:"_blank",cls:"big"},
	    {href:"about.php", text:"About", target:"_blank",cls:"big"},
	    {href:"login.php", text:"Login in", target:"_blank",cls:"big"},
	    {href:"signup.php", text:"Sign up", target:"_blank",cls:"big"},
	];

	var htmlList = document.createElement("ul");
	

	for(var i=0; i<listData.length; i++){
		var listItem = document.createElement("li");
		
		listItem.setAttribute("class", listData[i].cls);

		var aTag = document.createElement("a");
		
		aTag.setAttribute("href", listData[i].url);
		aTag.setAttribute("target", listData[i].target);

		aTag.innerHTML = listData[i].text;

		listItem.appendChild(aTag);

		htmlList.appendChild(listItem);
	}

	document.getElementById("page-wrapper").appendChild(htmlList);

	console.log(htmlList);
}


function showHandler(e){
	document.getElementById("page-wrapper").style.display = "block";
}
