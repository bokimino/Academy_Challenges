<!DOCTYPE html>
<html>
	<head>
		<title>Document</title>
		<meta charset="utf-8" />
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />

		<!-- Latest compiled and minified Bootstrap 4.6 CSS -->
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
			integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
			crossorigin="anonymous"
		/>
		<!-- CSS script -->
		<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
		<!-- Latest Font-Awesome CDN -->
		<script
			src="https://kit.fontawesome.com/3257d9ad29.js"
			crossorigin="anonymous"
		></script>
	</head>
	<body>
		<div class="bg-img">
			<h1 class="p-5 text-center text-uppercase text-white">Busines casual</h1>
			<nav
				class="navbar navbar-expand-lg navbar-light bg-brown text-center my-4"
			>
				<div
					class="collapse navbar-collapse justify-content-center"
					id="navbarSupportedContent"
				>
					<a
						class="nav-link text-uppercase text-white"
						href="{{ route('home') }}"
						>Home</a
					>
					<a
						class="nav-link text-uppercase text-white"
						href="{{ route('form') }}"
						>login</a
					>

					@if(session()->has('user_data'))
					<a class="text-white" href="{{ route('clear-session') }}">LOG OUT</a>
					@endif
				</div>
			</nav>
			<div class="container text-white py-5 my-3">
				<div class="row py-5">
					<div class="col-8 offset-2">
						<h1>User Information</h1>
						<p>Your name is: {{ $data['first_name'] }}</p>
						<p>Your last name is: {{ $data['last_name'] }}</p>
						@if(session()->has('user_data.email'))
						<p>Your email is: {{ session('user_data.email') }}</p>
						@endif
					</div>
				</div>
			</div>
			<footer class="bg-brown text-center text-white my-5">
				<p class="py-3">Copyright your website 2018</p>
			</footer>
		</div>
		<!-- jQuery library -->
		<script
			src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
			integrity="ha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
			crossorigin="anonymous"
		></script>

		<!-- Latest Compiled Bootstrap 4.6 JavaScript -->
		<script
			src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
			integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
			integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
			crossorigin="anonymous"
		></script>
	</body>
</html>
