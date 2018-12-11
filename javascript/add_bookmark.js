
document.getElementById('pic').addEventListener('click', changeImage);
var newsrc = "red-bookmark.png";

function getQueryVariable(variable)
{
   var query = window.location.search.substring(1);
   var vars = query.split("?");
   for (var i=0;i<vars.length;i++) {
           var pair = vars[i].split("=");
           if(pair[0] == variable){
            return pair[1];
          }
   }
}


var id_is = getQueryVariable("id");
console.log(id_is);


function changeImage() {
  if ( newsrc == "red-bookmark.png" ) {
    document.images["pic"].src = "assets/red-bookmark.png";
    document.images["pic"].alt = "Bookmarked";
    newsrc  = "grey-bookmark.png";
    var addBmark = new XMLHttpRequest();
addBmark.open('POST','save_bookmarks.php', true);
addBmark.setRequestHeader("Content-type","application/x-www-form-urlencoded");
addBmark.onload = function() {
  console.log(this.responseText);

}
addBmark.send("locationid="+id_is);
  }
  else {
    document.images["pic"].src = "assets/grey-bookmark.png";
    document.images["pic"].alt = "Not Bookmarked";
    newsrc  = "red-bookmark.png";
    var delBmark = new XMLHttpRequest();
delBmark.open('POST','delete_bookmarks.php', true);
delBmark.setRequestHeader("Content-type","application/x-www-form-urlencoded");

delBmark.onload = function() {
  console.log(this.responseText);

}
delBmark.send("locationid="+id_is);
  }
}





