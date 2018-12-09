// var addBmark = document.getElementById("pic");    //from notes
// addBmark.addEventListener('click', addBmarkFunction, false);

// function addBmarkFunction(e){
//   var myRequest = new XMLHttpRequest;
//   myRequest.onreadystatechange = function(){     
        
//     if(myRequest.readyState === 4){        
//       //console.log(myRequest.responseText);// modify or populate html elements based on response.
//       var responseObj = JSON.parse(myRequest.responseText);
//       // console.log(responseObj.success);
//     } 
//   };

//   // var sayingInput = document.getElementById("sayingInput");
//   myRequest.open("GET", "save_bookmarks.php?locationid=2", true); //true means it is asynchronous // Send urls through the url
//   myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
//   myRequest.send(null); 
// }




document.getElementById('pic').addEventListener('click', changeImage);

var newsrc = "red-bookmark.png";

function changeImage() {
  if ( newsrc == "red-bookmark.png" ) {
    document.images["pic"].src = "assets/red-bookmark.png";
    document.images["pic"].alt = "Bookmarked";
    newsrc  = "grey-bookmark.png";
    var addBmark = new XMLHttpRequest();
addBmark.open('GET', 'save_bookmarks.php?locationid=2', true);
addBmark.onload = function() {
  console.log(this.responseText);

}
addBmark.send();
  }
  else {
    document.images["pic"].src = "assets/grey-bookmark.png";
    document.images["pic"].alt = "Not Bookmarked";
    newsrc  = "red-bookmark.png";
    var delBmark = new XMLHttpRequest();
delBmark.open('GET', 'delete_bookmarks.php?locationid=2', true);
delBmark.onload = function() {
  console.log(this.responseText);

}
delBmark.send();
  }
}





