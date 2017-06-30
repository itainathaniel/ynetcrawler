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
		.table th,
		.table td {
			text-align: right;
		}
	</style>
</head>
<body>

<div class="container">
	@if (request()->view == 'table')
		<a href="?view=cards" class="button is-primary is-pulled-left">תצוגת כרטיסים</a>
	@else
		<a href="?view=table" class="button is-primary is-pulled-left">תצוגת טבלה</a>
	@endif

	<h1 class="title is-1">כותרות אחרונות</h1>
	<h5 class="title is-5">עדכון אחרון: {{ $headlines->first()->created_at->diffForHumans() }}</h5>

	@if (request()->view == 'table')
		@include ('headlines.table')
	@else
		@include ('headlines.cards')
	@endif

	{{ $headlines->appends(request()->only('view'))->links() }}
</div>

</body>
</html>