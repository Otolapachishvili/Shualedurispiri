<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table,td,td,th{
			border:solid 1px black;
			padding: 5px;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>#</th>
			<th>name</th>
		</tr>
		@foreach ($newdata as $data)
			<tr>
				<td>{{ ++$loop->index }}</td>
				<td>{{ $data["name"] }}</td>
			</tr>
		@endforeach

	</table>
</body>
</html>

{{-- სახელი
გვარი
მისამართი
ბიოგრაფია textarea
დაბადების თარიღი --}}