<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>
    <header>
      <nav>
        <a href="/">home</a>
        <a href="/blog">Blog</a>
      </nav>
    </header>
    <br>

    @yield('content')

    <br>
    <footer>
      <p>
        &copy; alwindo carporation.
      </p>
    </footer>
  </body>
</html>
