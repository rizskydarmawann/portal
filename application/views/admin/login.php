<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Backend</title>

	<style type="text/css">
body{
	margin:auto;
	width:30%;
}

/* Bordered form */
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #006699;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}

	</style>
</head>
<body>

<div id="container">
	<h1 align="center">Welcome to Backend!</h1>

	<div id="body">


		<form action="<?= base_url('admin/proses_login')?>" method="post" id="form_login">
		  <div class="imgcontainer">
			<img src="<?= base_url()?>assets/backend/img/avatar2.png" alt="Avatar" class="avatar">
		  </div>

		  <div class="container">
			<label for="uname"><b>Username</b></label>
			<input type="text" placeholder="Enter Username" id="username" name="username" class="username" rel="Username" title="Ketik username disini" required>
      
			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" id="username" name="password"  rel="password" title="Ketik password disini" required>
     

			<button type="submit">Login</button>
			<label>
			  <input type="checkbox" checked="checked" name="remember"> Remember me
			</label>
		  </div>

		  <div class="container" style="background-color:#f1f1f1">
			<button type="button" class="cancelbtn">Cancel</button>
			<span class="psw">Forgot <a href="#">password?</a></span>
		  </div>
		</form>

</div>

</body>
</html>
