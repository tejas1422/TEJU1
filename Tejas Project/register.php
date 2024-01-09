<!doctype html>
<html lang="en">

<head>
  <title>Register</title>
</head>

<body style="background:url('./bg.png')">

  <img 
  src = "1.png"/>

  Sign In


  <script>  
function validateform(){  

var name=document.myform.name.value; 
var username=document.myform.username.value;  
var password=document.myform.password.value;  
var confirmpassword=document.myform.confirmpassword.value; 
  

 if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
  }
  else if(username==null || username==""){  
  alert("Username can't be blank");  
  return false;  
  }    
  else if(password==null || password==""){  
  alert("Password can't be blank");  
  return false;  
  }

  else if(confirmpassword==null || confirmpassword==""){  
  alert("Password can't be blank");  
  return false;  
  }
  else{
    return true;
  }
}
</script>  


                  <form id="myform" action="add.php" method="post" onsubmit="return validateform()">
                      <div>
                        <label> Your Name</label>
                        <input type="text" id="name" name="name" autocomplete="off" placeholder="Enter your name"/><br>
                      </div><br>
                  

                      <div >
                        <label>Your Email</label>
                        <input type="text" id="username" name="username" autocomplete="off" placeholder="Enter your username"/>
                      </div><br>
                    

                    
                      <div>
                        <label> Password</label>
                        <input type="password" id="password" name="password" autocomplete="off" placeholder="Enter your password"/>
                      </div><br>

                      <label>Confirm Password</label>
                      <input type="password"  id="confirmpassword" name="confirmpassword" autocomplete="off" placeholder="confirm your password"/>
                    
                    <div>
                      <button type="submit" value="Register" name="register"> Register </button>
                    </div>

                    <p>I have already account <a href="index.php">Login</a></p>
                  </form>
                  
                </div>
  </section>
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
  margin: 80px 60px;
  gap: 20px;
}


input{
	padding:4px;
	margin:0px;
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
	margin: 40px 535px;
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

