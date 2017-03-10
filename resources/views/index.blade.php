<html>
<head>
	<title>Toggle Player</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="default.css">
</head>
<body>
	<div class="container">
		<h1>Toggle Player</h1>

		<h2>By video ID</h2>
		<form method="get" action="{{ route('play') }}" class="form-inline">
			<div class="form-group">
				<input type="text" class="form-control" id="videoId" name="videoId" placeholder="123456">
			</div>
			<button type="submit" class="btn btn-default">Play</button>
		</form>

		<h2>Categories</h2>
		<ul>
			<li>Test</li>
		</ul>
		<section id="footer">Made with &hearts; by Chris Harrison for Aggy Lim</section>
	</div>
</body>
</html>
