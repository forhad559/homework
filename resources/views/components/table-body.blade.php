<tbody>
	@foreach ($tableBody as $td)
		<tr>
			<td>{{$td[0]}}</td>
			<td>{{$td[1]}}</td>
			<td>{{$td[2]}}</td>
			<td>{{$td[3]}}</td>
		</tr>
	@endforeach
</tbody>