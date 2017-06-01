<!doctype html>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
 
<!-- font files  -->
 
<!-- /font files  -->
<!-- css files -->
<link href="{{asset('/admins/css/style.css')}}" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->
</head>
<body>
<h1>Unique Login Form</h1>
<div class="log">
	<div class="content1">
		<h2>Sign In Form</h2>
		<form action="/Loginon" method="post">
			<input type="text" name="username" value="USERNAME" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'USERNAME';}">
			<input type="password" name="password" value="PASSWORD" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'PASSWORD';}">
			{{csrf_field()}}
			<div class="button-row">
				<input type="submit" class="sign-in" value="Sign In">
				<input type="reset" class="reset" value="Reset">
				<div class="clear"></div>
			</div>
		</form>
	</div>
	
	<div class="clear"></div>
</div>
<div class="footer">
	<p>Copyright &copy; 2016.Company name All rights reserved.</p>
</div>

</body>
</html>