<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
	<link rel="stylesheet" href="./css/main.min.css?v=<?= filemtime(__DIR__ . '/css/main.min.css'); ?>">
</head>
<body>

<div class="bg-dark-o-75 text-light px-2 py-1 z-5" style="position: fixed; right: 0; bottom: 0">
	Current breakpoint:
	<strong class="d-sm-none">xs</strong>
	<strong class="d-none d-sm-inline d-md-none">sm</strong>
	<strong class="d-none d-md-inline d-lg-none">md</strong>
	<strong class="d-none d-lg-inline d-xl-none">lg</strong>
	<strong class="d-none d-xl-inline">xl</strong>
</div>

<div class="container my-3">
	<div class="alert alert-secondary">
		<strong>Bootstrap</strong> alert with 'secondary' color variable overwritten in SCSS
	</div>

	<hr>

	<strong>Bootstrap</strong> button which uses a <strong>Bootstrap JS</strong> function:

	<button class="btn btn-primary" data-toggle="collapse" data-target="#collapse-example">Click me</button>

	<div id="collapse-example" class="collapse">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi cupiditate doloribus error facere incidunt
		ipsa iste minus modi mollitia nisi, numquam, quaerat repellendus, sed tempore voluptas voluptatem? Beatae,
		ducimus!
	</div>

	<hr>
	<strong>MaterialDesignIcons</strong> icon: <span class="mdi mdi-account"></span>


	<hr>
	<strong>Lodash:</strong><br>
	View the console for fruits 'apple', 'banana', 'orange' being looped over using lodash.

	<hr>
	<strong>Typescript:</strong><br>
	View the console for a printed out name from a 'User' model instance.

	<hr>
	User name HTML set using <strong>jQuery:</strong>
	<div id="foobar"></div>

	<hr>

	<strong>Theme color bg opacity helpers</strong>
	<div class="bg-primary p-2">.bg-primary</div>
	<div class="bg-primary-o-75 p-2">.bg-primary-o-75</div>
	<div class="bg-primary-o-50 p-2">.bg-primary-o-50</div>
	<div class="bg-primary-o-25 p-2">.bg-primary-o-25</div>
	<div class="bg-secondary p-2">.bg-secondary</div>
	<div class="bg-secondary-o-75 p-2">.bg-secondary-o-75</div>
	<div class="bg-secondary-o-50 p-2">.bg-secondary-o-50</div>
	<div class="bg-secondary-o-25 p-2">.bg-secondary-o-25</div>
	<div class="bg-info p-2">.bg-info</div>
	<div class="bg-info-o-75 p-2">.bg-info-o-75</div>
	<div class="bg-info-o-50 p-2">.bg-info-o-50</div>
	<div class="bg-info-o-25 p-2">.bg-info-o-25</div>
	<div class="bg-success p-2">.bg-success</div>
	<div class="bg-success-o-75 p-2">.bg-success-o-75</div>
	<div class="bg-success-o-50 p-2">.bg-success-o-50</div>
	<div class="bg-success-o-25 p-2">.bg-success-o-25</div>
	<div class="bg-warning p-2">.bg-warning</div>
	<div class="bg-warning-o-75 p-2">.bg-warning-o-75</div>
	<div class="bg-warning-o-50 p-2">.bg-warning-o-50</div>
	<div class="bg-warning-o-25 p-2">.bg-warning-o-25</div>
	<div class="bg-danger p-2">.bg-danger</div>
	<div class="bg-danger-o-75 p-2">.bg-danger-o-75</div>
	<div class="bg-danger-o-50 p-2">.bg-danger-o-50</div>
	<div class="bg-danger-o-25 p-2">.bg-danger-o-25</div>
	...et cetera

	<hr>

	<strong>Responsive font sizes</strong>
	<div class="bg-info-o-25 p-2 f-1">.f-1</div>
	<div class="bg-info-o-50 p-2 f-2">.f-2</div>
	<div class="bg-info-o-25 p-2 f-3">.f-3</div>
	<div class="bg-info-o-50 p-2 f-4">.f-4</div>
	<div class="bg-info-o-25 p-2 f-5">.f-5</div>
	<div class="bg-info-o-50 p-2 f-1 f-md-2 f-lg-4">.f-1.f-sm-2.f-lg-4</div>
	<div class="bg-info-o-25 p-2 f-2 f-sm-3 f-lg-4">.f-2.f-sm-3.f-lg-4</div>
	...you get the idea.

	<hr>

	<strong>Responsive width/height helpers</strong>
	<br>

	<div class="embed-responsive embed-responsive-1by1">
		<div class="embed-responsive-item bg-secondary-o-25">
			<div class="p-2 bg-primary w-25">.w-25</div>
			<div class="p-2 bg-secondary w-50">.w-50</div>
			<div class="p-2 bg-success w-75">.w-75</div>
			<div class="p-2 bg-warning w-100">.w-100</div>
			<div class="p-2 bg-primary h-25">.h-25</div>
			<div class="p-2 bg-secondary w-25 h-25">.w-25.h-25</div>
		</div>
	</div>

	<hr>

	<strong>Responsive z-index helpers</strong>
	<br>
	<div class="p-2 bg-primary-o-50 d-inline-block w-25 z-1">
		.z-1
	</div>
	<div class="p-2 bg-secondary-o-50 d-inline-block w-25 z-2" style="margin-left:-10%">
		.z-2
	</div>
	<div class="p-2 bg-warning-o-50 d-inline-block w-25 z-3" style="margin-left:-10%">
		.z-3
	</div>
	<br>
	<br>
	<div class="p-2 bg-primary-o-50 d-inline-block w-25 z-1 z-lg-3">
		.z-1.z-lg-3
	</div>
	<div class="p-2 bg-secondary-o-50 d-inline-block w-25 z-2" style="margin-left:-10%">
		.z-2
	</div>
	<div class="p-2 bg-warning-o-50 d-inline-block w-25 z-3 z-lg-1" style="margin-left:-10%">
		.z-3.z-lg-1
	</div>

</div>

<script src="./js/main.min.js?v=<?= filemtime(__DIR__ . '/js/main.min.js'); ?>"></script>

</body>
</html>
