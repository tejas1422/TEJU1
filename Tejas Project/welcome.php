<?php
session_start();
include_once('connection.php');

// if(isset($_SESSION['name']) && isset($_SESSION['username'] )){

// }
$_SESSION['name'];
$_SESSION['username'];
?>
<!doctype html>
<html lang="en">

<head>
  <title>Welcome Form</title>
</head>

<body>
 
<body style="background:url('./bg.png')">
<img
  src = "1.png"/>

  <style>

img {
    position: absolute;
    top: 120px;
    right: 10px;}



body{
	font-size:20px;
	font-weight:bold;
	margin: 220px 310px;
	color:#553535;
}

button{
	position: relative;
	width: 135px;
	padding:10px 0;
	text-align: center;
	margin: 45px 405px;
	font-weight: bold;
	border: 2px solid#ffffff;
	background: transparent;
	color: #fff;
	border-radius:50px;
	cursor: pointer;
	overflow: hidden;
	text-transform: uppercase;
}

span{
	background: #ffffff;
	height:100%;
	width:0;
	position:absolute;
	left: 0;
	bottom: 0;
	z-index: -1;
	transition: 0.5s ease;
}

button:hover {
	background-color: #ffffff;
	color: #553535;
}


  </style>



<h3>Welcome,  <?=$_SESSION['name'];?></h3>
<p>Your Email id is : <?=$_SESSION['username'];?></p>
<button type="submit"><a href="index.php" class="btn">LOGOUT</a></button>

</body>

</html>