<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marketplace L6</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    @include('flash::message') 
    <!-- include é uma diretiva para inclusão de um arquivo 
         externo para esse que está sendo declarado -->
    @yield('content')
  </div>
</body>
</html>