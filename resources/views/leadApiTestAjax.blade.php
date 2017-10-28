@foreach($leaddata->workflow as $i => $lead)
<tr>
	<td>{{++$i}}</td>
	<td>{{$lead->name}}</td>
	<td>{{$lead->startDate}}</td>
	<td>{{$lead->endDate}}</td>
	<td>{{$lead->actionTaken}}</td>
</tr>
@endforeach