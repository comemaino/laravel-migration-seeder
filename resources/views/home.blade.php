<div class="container">
	<ul>
		@foreach ($trains->where('departure_date', '2022-06-29') as $train)
			<li>
				<span>Train #{{ $train->railway_sys_id }} | </span>
				<span>Departing from: {{ $train->departure_station }} </span>
				<span>on {{ $train->departure_date }} </span>
				<span>at {{ $train->departure_time }} | </span>
				<span>Arriving at {{ $train->arrival_station }} </span>
				<span>at {{ $train->arrival_time }} | </span>
				@if (!$train->on_time && !$train->cancelled)
					<span>DELAYED</span>
				@endif
				@if ($train->cancelled)
					<span>CANCELLED</span>
				@endif
			</li>
		@endforeach
	</ul>
</div>
