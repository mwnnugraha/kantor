<!DOCTYPE html>
<html>
<head>
	<title>coba</title>
</head>
<body>
	<table border="5" align="center">
	<tr>
		<td>Nama</td>
		<td>kelas</td>
		<td>jurusan</td>
		<td>jenis_kelamin</td>
	</tr>
	 @foreach ($tampilan as $data)
	 <tr>
	 		<td>{{ $data->id}}</td>
	 		<td>{{ $data->nama}}</td>
	 		<td>{{ $data->kelas}}</td>
	 		<td>{{ $data->jurusan}}</td>
	 		<td>{{ $data->jenis-kelamin}}</td>
	 </tr>
	 @endforeach
</table>
</body>
</html>