<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
</head>
<body>
	<h1>contact us any time</h1>
	<form action="{{route('contact')}}" method="post">
		@csrf
		<input type="text" name="name" placeholder="Name">
		<input type="text" name="email" placeholder="Email">
		<textarea name="message" placeholder="message" cols="30" rows="10"></textarea> 
		<input type="submit" value="submit">
	</form>

</body>
</html>