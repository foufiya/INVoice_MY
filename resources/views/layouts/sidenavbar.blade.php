
<!--
<head> 
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   </head>-->
<body>
    <nav>
        
  <ul class="nav-links ">
    <li><a href="#"><i class="fas fa-font-awesome-logo-full    "></i></a></li></br>
    <li class="center btn btn-primary"><a href="{{ route('factures.index') }}">Factures</a></li></br>
    <li class="upward btn btn-primary"><a href="{{ route('depenses.index') }}">Depenses</a></li></br>
    <li class="forward btn btn-primary"><a href="{{ route('clients.index') }}">Clients</a></li></br>
    <li class="forward btn btn-primary"><a href="{{ route('fournisseurs.index') }}">Fournisseurs</a></li></br>
    <li class="forward btn btn-primary"><a href="{{ route('entreprises.index') }}">Enterprises</a></li>
  </ul>
    </nav>
    @yield('content')
</body>
