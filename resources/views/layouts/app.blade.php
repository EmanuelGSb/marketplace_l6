<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marketplace L6</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" style="margin-bottom: 40px;"  >
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">Marketplace l6</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        @auth
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('admin.stores.index')}}">Lojas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.products.index')}}">Produtos</a>
          </li>
        </ul>
        <div class="d-flex">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#" onclick="event.preventDefault(); document.querySelector('form.logout').submit();" >Sair</a>
              @endauth

              <form action="{{route('logout')}}" class="logout" method="POST" style="displat:none;">
              @csrf
              </form>
            </li>
            <li class="nav-link"> <span>{{auth()->user()->name}} </span></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="container">
    @include('flash::message') 
    <!-- include é uma diretiva para inclusão de um arquivo 
         externo para esse que está sendo declarado -->
    @yield('content')
  </div>
</body>
</html>