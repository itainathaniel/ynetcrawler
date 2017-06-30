<table class="table has-text-right">
	<thead>
		<tr>
			<th>כותרת</th>
			<th>זמן</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($headlines as $headline)
			<tr>
				<td>
					{{ $headline->title }}
					<br>
					<small>{{ $headline->subtitle }}</small>
				</td>
				<td>
					{{ $headline->created_at->format('d/m H:i') }}
				</td>
				<td>
					<a class="button is-small is-info" href="http://www.ynet.co.il/{{ $headline->href }}" target="_article{{ $headline->id }}">לכתבה</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>