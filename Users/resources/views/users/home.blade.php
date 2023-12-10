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
					<a class="nav-link text-uppercase text-warning active" href="#"
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
			<div class="container ">
				<div class="row py-5">
                    <div class="col-4">
                        <div class="text-overlay p-2 text-center border rounded ">
                            <h3 class="text-uppercase">lorem</h3>
                            <h2 class="text-uppercase">Lorem, ipsum dolor.</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis odit quia aut rerum recusandae, eos possimus assumenda 
                            iste.</p>
                        </div>
                    </div>
					<div class="col-8">
						<div class="div">
							<div class="random-img"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="bg-warning py-5">
				<div class="container bg-light text-center py-2 outline">
					<h3>Our promise</h3>
					<h2 class="h1 text-uppercase">
						TO {{ session('user_data.first_name') }} {{
						session('user_data.last_name') }}
					</h2>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, enim
						velit soluta tenetur perferendis consequuntur obcaecati possimus
						quod unde sapiente blanditiis nam? Veritatis quisquam doloribus
						deleniti laboriosam quam beatae animi at accusantium magni modi
						laudantium debitis, aut rem reiciendis magnam. Esse mollitia
						consectetur inventore amet ducimus aut cum est culpa dolores
						excepturi ratione ut qui rerum minima blanditiis, corporis quidem
						quos similique laudantium saepe. Repudiandae, assumenda laboriosam.
						Sed maiores impedit quia incidunt facilis quidem minima recusandae.
						Officiis culpa quo sit!
					</p>
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
