<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
	<link rel="stylesheet" href="./css/main.min.css?v=<?= filemtime(__DIR__ . '/css/main.min.css'); ?>">
</head>
<body>

<div class="container my-3">
	<div class="alert alert-success">
		Bootstrap alert
	</div>

	<hr>

	Bootstrap button which uses a Bootstrap JS function:

	<button class="btn btn-primary" data-toggle="collapse" data-target="#collapse-example">Click me</button>

	<div id="collapse-example" class="collapse">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi cupiditate doloribus error facere incidunt
		ipsa iste minus modi mollitia nisi, numquam, quaerat repellendus, sed tempore voluptas voluptatem? Beatae,
		ducimus!
	</div>

	<hr>
	mdi icon: <span class="mdi mdi-account"></span>

	<hr>
	HTML set with jQuery:
	<div id="foobar"></div>

</div>

<script src="./js/main.min.js?v=<?= filemtime(__DIR__ . '/js/main.min.js'); ?>"></script>

</body>
</html>
