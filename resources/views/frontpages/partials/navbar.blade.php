  <header class="navigation bg-tertiary">
	<nav class="navbar navbar-expand-xl navbar-light text-center py-3">
		<div class="container">
			<a class="navbar-brand" href="index.html">
				<img loading="prelaod" decoding="async" class="img-fluid" width="160" src="images/logo.png" alt="Wallet">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
					<li class="nav-item"> <a class="nav-link" href="{{route('frontpage.index')}}">Home</a>
					</li>
					<li class="nav-item "> <a class="nav-link" href="{{route('frontpage.about')}}">About</a>
					</li>

					</li>
					<li class="nav-item "> <a class="nav-link" href="{{route('frontpage.contact')}}">Contact</a>
					</li>
	
				</ul>
				
                <a href="{{ route('login') }}" class="btn btn-outline-primary">Log In</a>
				
                <a href="{{ route('register') }}" class="btn btn-primary ms-2 ms-lg-3">Sign Up</a>
			</div>
		</div>
	</nav>
</header>
