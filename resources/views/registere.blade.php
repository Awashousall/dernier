<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Création d'un compte</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Latest Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="stylesheet" href="./form_login/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="./form_login/css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<div class="main-bg">
		<h1>Création d'un compte</h1>
        @if(session('session_status'))
        <div class="alert alert-success"> {{ session('session_status') }}</div>
        @endif

		<div class="sub-main-w3">
			<div class="bg-content-w3pvt">
			<div class="top-content-style">
    <img src="./form_login/images/nene.jfif" alt="Image Galle" width="150" height="150" />
</div>

				<form action="{{ route('registere')}}" method="post">
                @csrf
					<p class="legend">Inscription<span class="fa fa-hand-o-down"></span></p>
                    @if(session('status'))
                    <div class="alert alert-success"> {{ session('status') }}</div>
                    @endif
					<div class="input">
						<input type="email" placeholder="Email" name="email" required />
						<span class="fa fa-envelope"></span>
					</div>
                    <div class="input">
						<input type="text" placeholder="Nom" name="nom" required />
						<span class="fa fa-user"></span>
					</div>
                    <div class="input">
						<input type="text" placeholder="Prenom" name="prenom" required />
						<span class="fa fa-user"></span>
					</div>
					<div class="input">
						<input type="password" placeholder="Mot de passe" name="password" required />
						<span class="fa fa-lock"></span>
					</div>
					<button type="submit" class="btn submit">
						<span class="fa fa-sign-in"></span>
					</button>
				</form>
				<p>
				@if(session('status'))
                    <div class="alert alert-success"> {{ session('status') }}</div>
                    @endif
				</p>
				<a href="{{ route('logine')}}" class="bottom-text-w3ls">Déjà un compte? Se connecter</a>
			</div>
		</div>
		<div class="copyright">
			<h2>&copy; 2023 SUNU CABINET. 
				<a href="http://w3layouts.com" target="_blank">AWASALL&ABIATOUBADI&AMINATADIENG</a>
			</h2>
		</div>
	</div>
</body>

</html>
