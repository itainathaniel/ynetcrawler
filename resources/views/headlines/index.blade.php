<!DOCTYPE html>
<html>
<head>
	<title>הכותרות של Ynet</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.2/css/bulma.min.css">
	<style>
		html,body {
			text-align: right;
			direction: rtl;
		}
		.media,
		.media-content {
			text-align: right;
		}
	</style>
</head>
<body>

<div class="container">
	<h1 class="title is-1">כותרות אחרונות</h1>
	<h5 class="title is-5">עדכון אחרון: {{ $headlines->first()->created_at->diffForHumans() }}</h5>
	<div class="columns is-multiline">
		@foreach ($headlines->chunk(3) as $chunks)
			@foreach ($chunks as $headline)
				<div class="column is-one-third">
					@include ('headlines.card')
				</div>
			@endforeach
		@endforeach
	</div>
</div>

</body>
</html>