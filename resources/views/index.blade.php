<!DOCTYPE html>
<html>
<head>
	<title>ini ghalaman index</title>
</head>
<body>

<h1>Daftar nama</h1> 
	@foreach ($data as $datas)
	<li> {{$datas}}</li>
	@endforeach

</body>
</html>