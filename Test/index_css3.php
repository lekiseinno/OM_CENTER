<!DOCTYPE html>
<html>
<head>
	<title>OM CENTER</title>
	<meta charset="utf-8">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
</head>
<body>

<style type="text/css">
	*{
	margin:0;
	padding:0;
	box-sizing:
}
body{
	background:#CCCAA1;
	font-family: 'Source Sans Pro', sans-serif;
}
ul li{
	list-style:none;
}
h1{
	padding:15px 0 25px 0;
	text-align:center;
	font-family: 'Roboto Condensed', sans-serif;
	font-size:2.2em;
}
#wrapper{
	width: 75%;
	margin: 60px auto;
	background: #fff;
	padding: 10px;
	height: 750px;
	border:12px solid #DDE0CA;
}
.nav{
	overflow:hidden;
	margin:0 auto;
	width:750px;
}
.nav li{
	width:145px;
	height:180px;
	display:inline-block;
	float:left;
	cursor:pointer;
	transition:all 0.4s;
	-webkit-transition:all 0.4s;
	-moz-transition:all 0.4s;
}
.nav li:hover{
	opacity:1;
	height:190px;
}
.nav li.hm:hover{
	border-bottom:4px solid rgba(11, 132, 138, 1);
}
.nav li.fb:hover{
	border-bottom:4px solid rgba(241, 83, 70, 1);
}
.nav li.gp:hover{
	border-bottom:4px solid rgba(32, 16, 49, 1);
}
.nav li.tw:hover{
	border-bottom:4px solid rgba(228, 148, 7, 1);
}
.nav li.cl:hover{
	border-bottom:4px solid rgba(67, 138, 15, 1);
}
img.icon{
	background:rgba(255, 255, 255, 0.4);
	padding:14px;
	border-radius:100%;
	margin:30px auto;
	display:block;
	transition:all 0.8s;
	-webkit-transition:all 0.8s;
	-moz-transition:all 0.8s;
	box-shadow: 0 0 0 30px rgba(255,255,255,0.1);
	-webkit-box-shadow: 0 0 0 10px rgba(255,255,255,0.1);
}
.nav li:hover img.icon{
	background:rgba(255, 255, 255, 0.9);
	box-shadow: 0 0 0 10px rgba(255,255,255,0.8);
	-webkit-box-shadow: 0 0 0 0 rgba(255,255,255,0.8);
}
.nav li span{
	text-align:center;
	display:block;
	padding-top:10px;
	color:rgba(255, 255, 255, 1);
	font-size:0.9em;
	transition:padding-top 0.4s;
	-webkit-transition:padding-top 0.4s;
}
.nav li:hover span{
	padding-top:20px;
}
.hm{
	background:rgba(29, 162, 168, 0.8);
}
.fb{
	background:rgba(255, 89, 76, 0.8);
}
.gp{
	background:rgba(47, 31, 64, 0.8);
}
.tw{
	background:rgba(254, 162, 14, 0.8);
}
.cl{
	background:rgba(93, 181, 29, 0.8);
}
</style>
<div id="wrapper">
	<h1>OM Application Center</h1>
	<ul class="nav">
		<li class="hm">
			<img class="icon" src="https://cdn0.iconfinder.com/data/icons/typicons-2/24/home-24.png" alt="">
			<span>Home</span>
		</li>
		<li class="fb">
			<img class="icon" src="https://cdn0.iconfinder.com/data/icons/typicons-2/24/social-facebook-24.png" alt="">
			<span>Facebook</span>
		</li>
		<li class="gp">
			<img class="icon" src="https://cdn3.iconfinder.com/data/icons/picons-social/57/40-google-plus-24.png" alt="">
			<span>Google-plus</span>
		</li>
		<li class="tw">
			<img class="icon" src="https://cdn0.iconfinder.com/data/icons/typicons-2/24/social-twitter-24.png" alt="">
			<span>Twitter</span>
		</li>
		<li class="cl">
			<img class="icon" src="https://cdn0.iconfinder.com/data/icons/typicons-2/24/phone-24.png" alt="">
			<span>Call</span>
		</li>
	</ul>
</div>
</body>
</html>