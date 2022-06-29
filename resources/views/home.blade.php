<div class="container">
	<ul>
		@foreach ($trains as $train)
			<li>
				<span>Train #{{ $train->railway_sys_id }} | </span>
				<span>Departing from: {{ $train->departure_station }} </span>
				<span>on {{ $train->departure_date }} </span>
				<span>at {{ $train->departure_time }} | </span>
				<span>Arriving at {{ $train->arrival_station }} | </span>
				<span>Delayed:
					@if ($train->on_time)
						<span>NO</span>
					@else
						<span>YES</span>
					@endif
					|
				</span>
				<span>Cancelled:
					@if ($train->cancelled)
						<span>YES</span>
					@else
						<span>NO</span>
					@endif
				</span>
			</li>
		@endforeach
	</ul>
</div>
