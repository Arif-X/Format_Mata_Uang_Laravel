<!DOCTYPE html>
<html>
<head>
	<title>Format Rupiah</title>
</head>
<body>
	<table>
		@foreach($barang as $b)
		<tr>
			<td width="10%">
				<p>Kode barang</p>
			</td>
			<td width="60%">
				<p>Nama barang</p>
			</td>
			<td width="30%">
				<p>Harga</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>{{ $b->kode }}</p>
			</td>
			<td>
				<p>{{ $b->nama }}</p>
			</td>
			<td>
				<p>@currency($b->harga)</p>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>