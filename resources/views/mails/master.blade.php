<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dani Lesmiadi ~ Web Developer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
    @yield('styles')
    <style type="text/css">
      .footer {
        background-color: #363636;
        color: #fff;
        border-top: 3px solid #FFC107;
        padding: 1rem;
      }
      .navbar {
        border-bottom: 3px solid #FFC107;
      }
    </style>
  </head>
  <body>
    <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item" href="{{ url('/dani-lesmiadi') }}">
            <img src="{{ asset('images/portfolio/logo.png') }}" alt="Dani Lesmiadi Portfolio">
          </a>
        </div>
      </div>
    </nav>
    <section class="section">
      <div class="container">
        @yield('content')
      </div>
    </section>
    <footer class="footer">
      <div class="container">
        <div class="content has-text-right">
          <p>
             Portfolio of Dani Lesmiadi {{date('Y')}}<br>
      For any inquiry, please contact me at <a class="has-text-warning" href="mailto:dani.lesmiadi@gmail.com">dani.lesmiadi@gmail.com</a>
          </p>
        </div>
      </div>
    </footer>
  </body>
</html>