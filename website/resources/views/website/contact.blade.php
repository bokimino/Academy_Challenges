<!DOCTYPE html>
<html>
	<head>
        <title>@yield('title', 'contact')</title>
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
		@extends('layouts.main') 
        @section('title', 'Contact')
		@include('layouts.styles')
         @section('content')
		<div class="bg-container">
			<div class="bg-overlay"></div>

			<div class="center text-center text-white">
				<h2>Contact Me</h2>
				<p>Have questions? I have answers</p>
			</div>
		</div>
		<div class="container my-3">
			<div class="row">
				<div class="col-8 offset-2">
					<form>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Name" />
						</div>
						<div class="form-group">
							<input
								type="email"
								class="form-control"
								placeholder="Enter email"
							/>
						</div>

						<div class="form-group">
							<input
								type="number"
								class="form-control"
								placeholder="Phone Number"
							/>
						</div>
						<div class="form-group">
							<textarea
								class="form-control"
								placeholder="Message"
								rows="3"
							></textarea>
						</div>

						<button type="submit" class="btn btn-primary">Send</button>
					</form>
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
