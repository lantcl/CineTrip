<?php

session_start();


$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

?>

<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>CineTrip</title>

<script src="js/jq.js"></script>

<link href="asfont/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<style>
/*Define the page container sample. In order to fit all mobile phones, app has no scroll bar*/
html,body{padding:0;margin:0;width:100%;height:100%;overflow:hidden; font-family:Arial, Helvetica, sans-serif;}

/*Clean up tags with attributes*/
ul,li{ list-style:none; padding:0; margin:0;}
i,em{ font-style:normal;}
input,input:focus{outline:none;}
a,ins{text-decoration:none;}

/*map container*/
#map{padding:0;margin:0;width:100%;height:100%;}

/*animation*/
.dhua{transition: ease 0.4s;}

/*Bottom toolbar with Font Icon*/
.ditool{ width:100%; height:60px; position:absolute; background:#FFF; bottom:0; left:0; box-shadow: 10px 0px 10px #999; z-index:2;}
.ditool li{ width:25%; height:60px; line-height:60px; text-align:center; float:left; font-size:24px; color:#f82e06;}
.ditool li.hover{ height:50px; border-bottom:#213dde 10px solid; color:#213dde; line-height:50px;}
.ditool.show{ left:210px;}

/*Side navigation*/
.user_tool{ width:260px; height:100%; position:absolute; top:0; left:-210px;}
.user_tool .userbox{ width:185px; height:100%; background:#FFF; float:left; padding-left:25px; padding-top:50px;}
.user_tool .userbox .touxiang{ width:65px; height:65px; overflow:hidden; border-radius:50%;}
.user_tool .userbox .touxiang img{ display:block; width:65px; height:65px;}
.user_tool .userbox h1{ font-size:20px; color:#999;}
.user_tool .userbox p{ font-size:14px; color:#999;}
.user_tool .userbox ul{ margin:0; padding:0;}
.user_tool .userbox ul li{ font-size:16px; height:42px; line-height:40px;}
.user_tool .userbox ul li i{ color:#f82e06; padding-right:10px; font-size:22px;}
.user_tool .userbox ul li em{ display:inline-block; height:40px; width:130px; border-bottom:#bbb 1px solid;}
.user_tool .userbox ul li em.nobr{border:none;}
.user_tool .userbox ul dl{ margin:0; color:#999; font-size:14px;}
.user_tool .userbox ul dl dd{ width:100px; margin-left:32px; padding-left:30px;}
.user_tool .userbox ul dl dd:last-child{border-bottom:#bbb 1px solid; padding-bottom:10px;}
.user_tool .menu{width:50px; height:50px; display:block; float:left; background:url(images/button_14.png) no-repeat center; position:relative; z-index:2;}
.user_tool.show{ left:0px;}

/*Search page components*/
.search{ width:86%; height:530px; position:absolute; bottom:-540px; padding:5px 7%; background:#FFF;}
.search i.biao{ width:30px; height:4px; background:#f82e06; display:block; margin:3px auto 15px; border-radius:2px;}
.search .searchbox{ width:100%; height:40px; border-radius:20px; background:#f3f3f3;}
.search .searchbox i{ width:7%; height:40px; line-height:40px; font-size:20px; color:#c3c3c3;}
.search .searchbox input{ display:inline-block; width:84%; height:40px; line-height:40px; padding-left:6%; border:none; background:none;}
.search ul.type{ width:100%; overflow:hidden; display: flex; justify-content: space-between; border-bottom:#999 1px solid; padding:15px 0;}
.search ul.type li{ width:18%;}
.search ul.type li img{ display:block; width:100%;}
.search ul.type li p{ font-size:10px; margin:5px; text-align:center; display:block;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;}
.search ul.log{ width:100%; overflow:hidden; display:block;}
.search ul.log li{ display:block; width:100%; height:50px; font-size:16px; color:#000; line-height:50px; border-bottom:#d0d0d0 1px solid;}
.search ul.log li i{ color:#d9d9d9; margin-right:10px; font-size:20px;}
.search a.clear{ width:100%; overflow:hidden; display:block; margin-top:15px;}
.search a.clear img{ width:100%; display:block;}
.search.show{ bottom:60px;}

/*Search result component*/
.search1{ width:86%; height:530px; position:absolute; bottom:-540px; padding:5px 7%; background:#FFF;}
.search1 i.biao{ width:30px; height:20px;display:block; margin:3px auto 15px; background:url(theme/images/icon_18.png) no-repeat center; background-size:100% auto;}
.search1 h2{ font-weight:normal; margin:5px 0; font-size:20px;}
.search1 p{ color:#a3a1a2; margin:0; font-size:14px;}
.search1 a.addmark{ width:100%; display:block; overflow:hidden; margin:15px 0;}
.search1 a.addmark img{ width:100%; display:block;}
.search1 .imgbox{ width:100%; height:18vw; margin:10px 0; position:relative;}
.search1 .imglist{ width:100%; height:18vw; overflow-x:scroll; position:relative; z-index:1;}
.search1 .imglist ul{ width:auto; height:18vw; display:flex; flex-wrap:nowrap; position:relative;}
.search1 .imglist ul li{ display:block; float:left; margin-right:2%; height:100%; width:auto;}
.search1 .imglist ul li img{ height:100%; display:block;}
.search1 .imgbox a{ width:15px; height:25px; display:block; position:absolute; margin-top:20px;}
.search1 .imgbox a.goleft{ background:url(images/icon_16.png) no-repeat center; background-size:100% auto; left:-23px;}
.search1 .imgbox a.goright{ background:url(images/icon_44.png) no-repeat center; background-size:100% auto; right:-23px;}
.search1 .msgbox{ width:100%; padding:15px 0; margin:20px 0; height:100px; overflow-y:scroll; border-bottom:#999 1px solid; border-top:#999 1px solid;}
.search1 .msgbox li{ width:100%; overflow:hidden; display:block; margin:10px 0;}
.search1 .msgbox li img{ width:11%; display:block; float:left; border-radius:50%;}
.search1 .msgbox li p{ display:block; float:left; width:80%; margin-left:5%; line-height:18px; font-size:12px;}
.search1 .storelist{ width:100%; overflow:hidden;  display: flex; justify-content: space-between; margin:10px 0;}
.search1 .storelist li{ width:22%;}
.search1 .storelist li img{ display:block; width:100%;}
.search1.show{ bottom:60px;}

/*Login User Information Section*/
.sign_bg{ background:rgba(0,0,0,0.5); width:100%; height:100%; position:absolute; z-index:3; top:0; display:none;}
.sign_bg.show{ display:block;}

.sign-in-box{ width:84%; height:220px; position:absolute; z-index:4; left:8%; top:-50%; margin-top:-100px; text-align:center;}
.sign-in-box .box{ width:90%; padding:10px 5%; background:#FFF; border-radius:6px;}
.sign-in-box .box input{ width:100%; height:46px; line-height:46px; text-align:center; border:none; background:none; border-bottom:#999 1px solid; display:block; margin-bottom:5px; font-size:18px;}
.sign-in-box .box a{ display:block; width:46px; line-height:46px; text-align:center; width:100%; font-size:18px; color:#FFF; background:#f82e06; margin-top:10px; }
.sign-in-box ins{ display:inline-block; font-size:14px; height:20px; line-height:20px; color:#FFF; width:auto; margin:10px 0; border-bottom:#fff 1px solid;}
.sign-in-box.show{top:50%;}

.sign-up-box{ width:84%; height:300px; position:absolute; z-index:4; left:8%; top:-50%; margin-top:-150px;}
.sign-up-box .box{ width:90%; padding:10px 5%; background:#FFF; border-radius:6px;}
.sign-up-box .box input{ width:100%; height:46px; line-height:46px; text-align:center; border:none; background:none; border-bottom:#999 1px solid; display:block; margin-bottom:5px; font-size:18px;}
.sign-up-box .box a{ display:block; width:46px; line-height:46px; text-align:center; width:100%; font-size:18px; color:#FFF; background:#f82e06; margin-top:10px; }
.sign-up-box.show{top:50%;}

/*User profile*/
.myhome{ width:100%; overflow-y:scroll; top:0; background:#ffffff; position:absolute; right:-100%;}
.myhome .infobox{ width:100%; height:300px; background:#e8e8e8; overflow:hidden;}
.myhome .infobox img.tou{ width:100px; height:100px; display:block; margin:50px auto 15px;}
.myhome .infobox h2{ display:block; text-align:center; margin:0px;}
.myhome .infobox p{ display:block; text-align:center; margin:0; padding-top:8px; font-size:12px; color:#414141;}
.myhome .infobox ul{ display:block; text-align:center; margin-top:25px;}
.myhome .infobox ul li{ width:10%; display:inline-block; margin:0 10%; text-align:center; font-size:24px;}
.myhome .infobox ul li em{ display:block; font-size:16px;}
.myhome .photobox{ width:100%; background:#FFF; overflow:hidden;}
.myhome .photobox p{ display:block;text-align:center;}
.myhome .photobox ul{display:block; width:96%; overflow:hidden; padding:0 2%;}
.myhome .photobox ul li{ width:23%; float:left; margin:3px 1%; border-radius:6px; overflow:hidden;}
.myhome .photobox ul li img{ display:block; width:100%;}
.myhome.show{ right:0;}

/*Login logout status*/
.login{ display:none;}
.logout{ display:block;}
</style>

<!--- map container -->
<div id="map"></div>

<!--- bottom navigatiuon -->
<div class="ditool dhua">
<li class="hover"><i class="fa fa-home" aria-hidden="true"></i></li>
<li><i class="fa fa-search" aria-hidden="true"></i></li>
<li><i class="fa fa-tag" aria-hidden="true"></i></li>
<li><i class="fa fa-upload" aria-hidden="true"></i></li>
</div>

<!--- side userfile -->
<div class="user_tool dhua">
<div class="userbox">
<div class="touxiang"><img src="images/tou_19.png" /></div>
<h1 id="username">Username</h1>
<p>
save your favorite<br>
movie locations
</p>
<ul>
<li class="login gohome"><i class="fa fa-comment" aria-hidden="true"></i> <em class="nobr">My posts</em></li>
<dl class="login">
<dd>routes</dd>
<dd>photographs</dd>
<dd>articles</dd>
</dl>
<li class="login"><i class="fa fa-map"></i> <em class="nobr">Locations</em></li>
<dl class="login">
<dd>saved</dd>
<dd>visited</dd>
</dl>
<li class="login"><i class="fa fa-star"></i> <em>My badges</em></li>
<li><i class="fa fa-sliders"></i> <em>Settings</em></li>
<li><i class="fa fa-smile-o"></i> <em>Help & Support</em></li>
<li><i class="fa fa-info-circle"></i> <em>About</em></li>
<li class="logout sign-in"><i class="fa fa-sign-in" aria-hidden="true"></i> <em>Sign in</em></li>
<li class="logout sign-up"><i class="fa fa-sign-in" aria-hidden="true"></i> <em>Sign up</em></li>
<li class="login sign-out"><i class="fa fa-sign-out" aria-hidden="true"></i> <em>Sign out</em></li>
</ul>
</div>
<div class="menu"></div>
</div>

<!--- search -->
<div class="search dhua">
<i class="biao"></i>
<div class="searchbox">
<input type="text" value="Elgin Theatre" placeholder="Elgin Theatre" />
<i class="fa fa-search" aria-hidden="true"></i>
</div>
<ul class="type">
<li><img src="images/icon_83.png" /><p>Nearby</p></li>
<li><img src="images/icon_113.png" /><p>Movie</p></li>
<li><img src="images/icon_143.png" /><p>Entertainment</p></li>
<li><img src="images/icon_173.png" /><p>Food</p></li>
</ul>
<ul class="log">
<li><i class="fa fa-clock-o fa-flip-horizontal" aria-hidden="true"></i> Elgin Theatre</li>
<li><i class="fa fa-clock-o fa-flip-horizontal" aria-hidden="true"></i> Elgin Theatre</li>
<li><i class="fa fa-clock-o fa-flip-horizontal" aria-hidden="true"></i> Elgin Theatre</li>
<li><i class="fa fa-clock-o fa-flip-horizontal" aria-hidden="true"></i> Elgin Theatre</li>
<li><i class="fa fa-clock-o fa-flip-horizontal" aria-hidden="true"></i> Elgin Theatre</li>
</ul>
<a href="javascript:void(0)" class="clear"><img src="images/icon_238.png" /></a>
</div>

<!--- search result -->
<div class="search1 dhua">
	<i class="biao"></i>
	<h2>Elgin Theatre</h2>
	<p>351 comments</p>
	<a href="javascript:void(0)" class="addmark"><img src="theme/images/icon_208.png" /></a>

	<p>Related movie</p>
	<h2>The Shape of Water(2017)</h2>

	<div class="imgbox">
		<a href="javascript:void(0)" class="goleft"></a>
		<a href="javascript:void(0)" class="goright"></a>
		<div class="imglist">
			<ul>
				<li><img src="images/movie.jpg" /></li>
				<li><img src="images/movie.jpg" /></li>
				<li><img src="images/movie.jpg" /></li>
				<li><img src="images/movie.jpg" /></li>
				<li><img src="images/movie.jpg" /></li>
				<li><img src="images/movie.jpg" /></li>
				<li><img src="images/movie.jpg" /></li>
			</ul>
		</div>
	</div>

	<div class="msgbox">
		<li>
			<img src="images/tou_19.png" />
			<p>Other visitour comments about this location.Other visitour comments about this location.Other visitour comments about this location.</p>
		</li>
		<li>
			<img src="images/tou_19.png" />
			<p>Other visitour comments about this location.Other visitour comments about this location.Other visitour comments about this location.</p>
		</li>
		<li>
			<img src="images/tou_19.png" />
			<p>Other visitour comments about this location.Other visitour comments about this location.Other visitour comments about this location.</p>
		</li>
		<li>
			<img src="images/tou_19.png" />
			<p>Other visitour comments about this location.Other visitour comments about this location.</p>
		</li>
		<li>
			<img src="images/tou_19.png" />
			<p>Other visitour comments about this location.</p>
		</li>
		<li>
			<img src="images/tou_19.png" />
			<p>Other visitour comments about this location.</p>
		</li>
		<li>
			<img src="images/tou_19.png" />
			<p>Other visitour comments about this location.</p>
		</li>
		<li>
			<img src="images/tou_19.png" />
			<p>Other visitour comments about this location.</p>
		</li>
	</div>
	<p>Nearby store</p>
	<div class="storelist">
		<li><img src="images/movie.jpg" /></li>
		<li><img src="images/movie.jpg" /></li>
		<li><img src="images/movie.jpg" /></li>
		<li><img src="images/movie.jpg" /></li>
	</div>
</div>

<!-- transparent background --->
<div class="sign_bg"></div>

<div class="sign-in-box dhua">
<div class="box">
<input type="text" name="username" placeholder="E-mail / Username" />
<input type="password" name="password" placeholder="Password" />
<a href="javascript:void(0);">Sign In</a>
</div>
<ins>Forget password</ins>
</div>

<div class="sign-up-box dhua">
<div class="box">
<input type="text" name="fname1" placeholder="First name" />
<input type="text" name="lname1" placeholder="Last name" />
<input type="text" name="username1" placeholder="Username" />
<input type="text" name="email1" placeholder="E-mail" />
<input type="password" name="password1" placeholder="Password" />
<a href="javascript:void(0);">Sign Up</a>
</div>
</div>


<!-- userfile --->
<div class="myhome dhua">
<div class="infobox">
<img src="images/tou_19.png" class="tou" />
<h2 id="username2">Username</h2>
<p>
view and edit profile
</p>
<ul>
<li>
<em>Photo</em>
50
</li>
<li>
<em>Routes</em>
12
</li>
<li>
<em>Article</em>
5
</li>
</ul>
</div>
<div class="photobox">
<p>Recent</p>
<ul>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
<li><img src="images/movie.jpg"/></li>
</ul>
</div>
</div>

</body>
</html>
<script>
var username=""; //username
$(function(){
	//set height of myposts page
	$(".myhome").height(document.body.clientHeight-60);
	
	//menu click
	$(".menu").click(function(){
		
		//bottom option return homepage
		if(!$(".ditool li").eq(0).hasClass("hover")){
		$(".ditool li").removeClass("hover");
		$(".ditool li").eq(0).addClass("hover");
		}
		
		//posts close
		if($(".myhome").hasClass("show")){
		$(".myhome").removeClass("show");
		}
		
		//present side, bottom move
		if($(".user_tool").hasClass("show")){
		$(".user_tool,.ditool").removeClass("show");
			}else{
		$(".search,.search1").removeClass("show");
		$(".user_tool,.ditool").addClass("show");
		}
		})
	
	$(".ditool li").click(function(){
		
		//highlight of bottom navigation
		if(!$(this).hasClass("hover")){
		$(".ditool li").removeClass("hover");
		$(this).addClass("hover");
		}		
	    
		//close side navigation
		$(".user_tool,.ditool").removeClass("show");
		
		//posts close
		if($(".myhome").hasClass("show")){
		$(".myhome").removeClass("show");
		}
		
		//Determine which element of the bottom navigation to click on to perform the corresponding action.
		if($(this).index()==0){
          $(".search,.search1").removeClass("show");
		}else if($(this).index()==1){
		if($(".search").hasClass("hover") || $(".search1").hasClass("hover")){
			}else{
          $(".search").addClass("show");
			}
		}else if($(this).index()==2){
			
		}else if($(this).index()==3){
			
		}
		
		})

//click user's picture and change to signin quickly
$(".userbox .touxiang").click(function(){
	$(".login").show();
	$(".logout").hide();
	})

//sign out
$(".sign-out").click(function(){
	$(".login").hide();
	$(".logout").show();
	username="";
    $("#username").text("Username");
	})

//sign in 
$(".sign-in").click(function(){
	$(".sign-in-box,.sign_bg").addClass("show");
	})

//sign up page
$(".sign-up").click(function(){
	$(".sign-up-box,.sign_bg").addClass("show");
	})

//click background and close it
$(".sign_bg").click(function(){
	$(".sign-up-box,.sign-in-box,.sign_bg").removeClass("show");
	})

//close the research page
$(".search i.biao").click(function(){
	$(".search").removeClass("show");
	})

//close the result page
$(".search1 i.biao").click(function(){
	$(".search1").removeClass("show");
	})


$(".searchbox i").click(function(){
	$(".search").removeClass("show");
	$(".search1").addClass("show");
	})

//clear search history
$(".clear").click(function(){
	$("ul.log").empty();
	})
		
//click arrow 
$(".goleft").click(function(){
$(".imglist").stop().animate({
    scrollLeft:$(".imglist").scrollLeft()+document.body.clientWidth*0.28
  }, 500);
})

$(".goright").click(function(){
$(".imglist").stop().animate({
    scrollLeft:$(".imglist").scrollLeft()-document.body.clientWidth*0.28
  }, 500);
})

//access to my posts
$(".gohome").click(function(){
	$(".user_tool,.ditool").removeClass("show");
	$(".myhome").addClass("show");
	})

//sign in 
$(".sign-in-box .box a").click(function(){
	var logininfo={};
	    logininfo.username=$("input[name='username']").val();  //get username
	    logininfo.password=$("input[name='password']").val();  //get password
		
	   //getuserinfo(logininfo);   
	   
	 
	   setuserinfo(logininfo);
	})

//sign in
$(".sign-up-box .box a").click(function(){
	var reginfo={};
	reginfo.fname=$("input[name='fname1']").val();
	reginfo.lname=$("input[name='lname1']").val();
	reginfo.username=$("input[name='username1']").val();
	reginfo.email=$("input[name='email1']").val();
	reginfo.password=$("input[name='password1']").val();
	
	//server interact
	
	setuserinfo(reginfo);
	})

//set username, and change to sign in
function setuserinfo(logininfo){
	if(logininfo){
		username=logininfo.username;
		$("#username").text(username);
		$(".login").show();
	    $(".logout").hide();
		$(".sign-up-box,.sign-in-box,.sign_bg").removeClass("show");
	}
}

//get information of users, method:ajax
function getuserinfo(logininfo){
		if(logininfo){
			$.post('/ajax/',logininfo,function(result){
				//result 
				})
		}else{
		 alert("Please sign in firstly");	
	   }
	}
})
</script>

<!---  BAIDU map API ---->
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=XuGQ0Wf5lWiHdhL9oA9XLByC"></script>
<script type="text/javascript">
	var map = new BMap.Map("map");
	var point = new BMap.Point(114.307183,30.590991);
	var marker = new BMap.Marker(point);  // make marker
	map.addOverlay(marker);            // add marker to the map
	map.centerAndZoom(point, 18);
	var sContent ="My location";
	var opts = {enableMessage:false}
	var infoWindow = new BMap.InfoWindow(sContent,opts);  // constructe information window        
	map.openInfoWindow(infoWindow,point); //open information window
	marker.addEventListener("click", function(){          
		map.openInfoWindow(infoWindow,point); //open information window
	});
</script>
>>
