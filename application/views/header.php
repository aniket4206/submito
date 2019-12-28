<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Header</title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-md navbar-dark bg-secondary">
			<a class="navbar-brand mr-1" href="#">SubMito!</a>


			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav">
					 <li class="nav-item">
		        <a class="nav-link" href=<?= base_url('Login/load_calendar'); ?> >
		          <i class="fa fa-calendar"></i>
		          <span>Academic Calender</span>
		      	</a>
		      </li>
					&nbsp;&nbsp;
					 <li class="nav-item">
		        <a class="nav-link" href=<?= base_url('Login/notification'); ?> >
		          <i class="fa fa-bell"></i>
		          <span>All Notifications</span>
		      	</a>
		      </li></ul></div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href=<?= base_url('Login/index'); ?> >Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href=<?= base_url('Login/loginpage'); ?> >Login</a>
					</li>
					
				</ul>
			</div>
		</nav>
	</header>
</body>
</html>