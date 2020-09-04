<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

		<!-- Custom Style -->
		<link rel="stylesheet" href="{{ asset('custom/app.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow sticky-top">
            <div class="container">
								<a class="navbar-brand" href="{{ url('/') }}">
								  <div class="d-flex align-items-center">
										<img src="{{ asset('assets/logo-luckyart.png')}}" alt="">
										<h4 class="ml-2 mb-0 font-weight-bolder">Lucky Art Tembaga</h4>
									</div>
                </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
											<li class="nav-item active">
												<a class="nav-link" href="#">Home </a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#">Product</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#">About</a>
											</li>
											<button class="btn btn-primary">Contact Us</button>
                    </ul>

                    
                </div> 
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
    @stack('js')
</body>

</html>
