<!DOCTYPE html>
<html>
<head>
	<title>ini ghalaman index</title>
</head>
<body>

<h1>Daftar binatang</h1> 
	@foreach ($binatang as $bina)
	<li> {{$bina}}</li>
	@endforeach

</body>
</html>