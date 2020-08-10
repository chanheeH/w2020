<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php</title>
	<style>
		/*reset*/
		*{padding: 0;margin: 0;}
		li{list-style: none}
		a:link,a:visited{color:#000;text-decoration: none;}
		.clearfix:after{content: "";display: block;clear: both;}

		/*header*/
		#header{
			width: 960px;
			margin: 0 auto;
			background:skyblue;
		}
		#header h1{
			width: 150px;
			margin: 0 auto;
			text-align: center;
			background: #f00;
		}
		#header .gnb{}
		#header .gnb ul{}
		#header .gnb ul li{
			float: left;
			width: 20%;
		}
		#header .gnb ul li a{
			display: block;
			line-height: 40px;
			text-align: center;
		}
		#header .gnb ul li a:hover{
			background: #ddd;
		}
		#header .gnb ul li a.on{background-color:orange;color:white}

		/*visual slide*/
		.visual{
			height: 300px;
			background:pink;
		}

		/*section*/
		section#container_wr{
			width: 960px;
			height: 1000px;
			margin: 0 auto;
			background:#555;
		}
		.sub{height: 100px;text-align: center;line-height: 100px;}
		.sub.company{background-color:blue;}
		.sub.product{background-color:green;}
		/*footer*/
		footer#footer{
			height: 100px;
			background:skyblue;
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		function active(i){
			$(".gnb>ul>li").eq(i).find("a").addClass("on");
		}
	</script>
</head>
<body>
	<header id="header">
		<h1><a href="index.html">LOGO</a></h1>
		<nav class="gnb">
			<ul class="clearfix">
				<li><a href="company.php">MENU1</a></li>
				<li><a href="product.php">MENU2</a></li>
				<li><a href="#">MENU3</a></li>
				<li><a href="#">MENU4</a></li>
				<li><a href="#">MENU5</a></li>
			</ul>
		</nav>
	</header>