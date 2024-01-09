<!doctype html>
<html>


<head>
  <title>Login</title>
 
  <link rel="stylesheet" type="text/css" href="style.css">
</head>



<body style="background:url('./bg.png')">
<img src = "1.png"/>

LogIn 






<div>
<div id="form">
          <form id="myform" action="login.php" method="post" >


            
              <label> Username</label>
              <input type="text" id="username" name="username" autocomplete="off" placeholder="Enter your e-mail"/>

              <br><br>
            
              <label>Password</label>
              <input type="password"  id="password" name="password" autocomplete="off" placeholder="Enter your password"/>

             
            <br><br>


           
              <button type="submit" value="Sign in" name="login">Login</button>  <br><br>
            
              <p>I don't have any account <a href="register.php" class="text-warning">Register Here</a></p>
          </form><br>
          
        </div>
</div>
</body>




<style>
img {
    position: absolute;
    top: 120px;
    right: 10px;}

label{
	width:140px;
	display:inline-block;
	margin: 0.8;
	font-size:16px;
	font-weight:bold;	
}

form{
  margin: 110px 80px;
  gap: 20px;
}


input{
	padding:4px;
	margin:5px;
	font-size:16px;
	border-radius:10px;
	border:1px solid#f9f9f9;
	width:7cm
}

button{
	position: relative;
	width: 135px;
	padding:10px 0;
	text-align: center;
	margin: 40px 455px;
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

body{
	font-size:35px;
	font-weight:bold;
	margin: 40px 70px;
	color:#553535;
}

p{
	margin: 10.20;
	font-size:16px;
	font-weight:bold;	
}

</style>

</html>


