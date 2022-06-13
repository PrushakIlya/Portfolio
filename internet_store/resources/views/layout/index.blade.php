<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>@yield('title')</title>
</head>

<body>
  @include('include.header')
  <main>
    @yield('product.index')
    @yield('product.show')
    @yield('category.index')
    @yield('category.show')
    @yield('basket')
    @yield('product_in_cart')
    @stack('css')
    @stack('js.cart_index')
  </main>
  @include('include.footer')
</body>

</html>
