<!DOCTYPE html>
<html>
	<head>
        <title>@yield('title', 'home')</title>
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
		<link rel="stylesheet" href="style.css" />
		<!-- Latest Font-Awesome CDN -->
		<!-- Latest Font-Awesome CDN -->
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
			integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
	</head>
	<body>
		@extends('layouts.main') @section('title', 'Home')
		@include('layouts.styles') @section('content')
		<div class="bg-container">
			<div class="bg-overlay"></div>

			<div class="center text-white text-center text-capitalize">
				<h2>Clean blog</h2>
				<p>A blog theme by start Bootstrap</p>
			</div>
		</div>
		<div class="container my-3">
			<div class="row">
				<div class="col-6 offset-3 border-bottom">
					<div class="py-3">
						<h3>Lorem ipsum dolor sit amet.</h3>
						<p class="mb-0">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste?
						</p>
						<small class="italic text-secondary">Lorem, ipsum dolor.</small>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 offset-3 border-bottom">
					<div class="py-3">
						<h3>Lorem ipsum dolor sit amet . 2</h3>

						<small class="italic text-secondary">Lorem, ipsum dolor.</small>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 offset-3 border-bottom">
					<div class="py-3">
						<h3>Lorem ipsum dolor 3</h3>
						<p class="mb-0">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste?
							consectetur adipisicing elit Lorem ipsum dolor sit amet . Iste?
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
							impedit accusantium ipsa? Lorem ipsum dolor sit amet, consectetur
							adipisicing. Lorem ipsum dolor sit amet, consectetur adipisicing.
						</p>
						<small class="italic text-secondary">Lorem, ipsum dolor.</small>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 offset-3 border-bottom">
					<div class="py-3">
						<h3>Lorem ipsum dolor sit amet.</h3>
						<p class="mb-0">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste?
						</p>
						<small class="italic text-secondary">Lorem, ipsum dolor.</small>
					</div>
				</div>
			</div>
		</div>
		@endsection

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
