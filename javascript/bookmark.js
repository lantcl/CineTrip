var newsrc = "red-bookmark.png";

function changeImage() {
  if ( newsrc == "red-bookmark.png" ) {
    document.images["pic"].src = "assets/red-bookmark.png";
    document.images["pic"].alt = "Bookmarked";
    newsrc  = "grey-bookmark.png";
  }
  else {
    document.images["pic"].src = "assets/grey-bookmark.png";
    document.images["pic"].alt = "Not Bookmarked";
    newsrc  = "red-bookmark.png";
  }
}