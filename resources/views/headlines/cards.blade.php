<div class="columns is-multiline">
	@foreach ($headlines->chunk(3) as $chunks)
		@foreach ($chunks as $headline)
			<div class="column is-one-third">
				@include ('headlines.card')
			</div>
		@endforeach
	@endforeach
</div>