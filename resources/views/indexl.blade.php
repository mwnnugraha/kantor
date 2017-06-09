<!DOCTYPE html>
<html>
<head>
	<title>ini ghalaman index</title>
</head>
<body>

<h1>Daftar laptop</h1> 
	@foreach ($laptop as $lap)
	<li> {{$lap}}</li>
	@endforeach

</body>
</html>