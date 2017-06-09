<!DOCTYPE html>
<html>
<head>
	<title>ini ghalaman index</title>
</head>
<body>

<h1>Daftar kendaraan</h1> 
	@foreach ($kendaraan as $ken)
	<li> {{$ken}}</li>
	@endforeach

</body>
</html>