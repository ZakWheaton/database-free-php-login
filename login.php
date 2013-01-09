<?php
session_start(); 
?>
<html>
<head>
<style>

 body {
    background: #eeeeee;
    }

form{
	margin:0;
	padding:0;
}

button{
 	font-size: 15px;
    background: #888888;
    color: #f4f4f4;
	height: 28px;
    margin-top: 1em;
    padding: 0px 10px;
    float: right;
    border: none;
    border-radius: 2px;
    font: bold 14px/1.4 "Helvetica Neue", "HelveticaNeue", Helvetica, Arial, sans-serif;
}

button:hover{
	background:#5b5b5b;
	color:#fcfcfc;
	cursor: pointer;
}

label{
	font: bold 25px/1.4 "Helvetica Neue", "HelveticaNeue", Helvetica, Arial, sans-serif;
	text-align:center;
}

input{
	background: #f4f4f4;
    color: #444444;
    font-size: 20px;
    padding-left:5px;
    border: 1px solid #bebebe;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, .1), 0px 1px 0px 0px rgba(255, 255, 255, .5);
    -moz-box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, .1), 0px 1px 0px 0px rgba(255, 255, 255, .5);
    box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, .1), 0px 1px 0px 0px rgba(255, 255, 255, .5);
    outline: none;
    display: block;
}

.alert{
	float: left;
	color: #e00404;
}

.wrapper{
	position:absolute;
	top: 50%;
	left: 50%;
	width:25%;
	margin:-10% 0 0 -12%;
}

#username, #password{
	height:50px;
	width:100%;
}

#password{
	margin-top:1em;
}

.placeholder
{
  color: #aaa;
}

input[type=search] {	-webkit-appearance: none;}
input[type="search"]::-webkit-search-decoration, 
input[type="search"]::-webkit-search-cancel-button {
	display: none;
}
</style>

<title> Login </title>

</head>
<body>
<?php
// ***************************************************** //
// ********	 Set your username and password  ********** //
	$username = "username";
	$password = "password";
// ************************************************** //

if(isset($_GET['logout'])) {
	unset($_SESSION['user']);
}

if(isset($_POST['username']) && isset($_POST['password'])) {

	if(trim($_POST['username']) == $username && trim($_POST['password']) == $password) {
		
		$_SESSION['user'] = $username;
		header("Location: $_SERVER[PHP_SELF]");
		
	} else {
		show_login('<p class="alert">Wrong Username / Password!</p>');
	}

} else {
	show_login("&nbsp;");
}

function show_login($message) {
	$self = $_SERVER['REQUEST_URI'];

echo <<<_END
	<div class="wrapper">

	<form action="$self" method="post">

	<!-- <label for="username">Users Name</label> -->

	<input type="text" name="username" id="username" placeholder="Username">

	<!-- <label for="password">Password</label> -->

	<input type="password" name="password" id="password" placeholder="Password">
_END;

echo $message;

echo <<<_END
	<button type="submit" name="submit" value="submit"> Enter </button>

	</form>

	</div>
_END;
}
?>
</body>
</html>
