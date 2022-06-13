<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/main.css">
  @stack('css')
  @stack('js')
  @livewireStyles
  <title>{{__('Admin')}}</title>
</head>
<body>
<main class="container">
  <section class="admin_icon">
    <div class="icon"></div>
    <div class="name">{{__('Admin')}}</div>
    <div class="line"></div>
  </section>
  <section class="navigation">
    <nav>
      <ul>
        <li><a href="{{route('admin.catalog.index')}}">{{__('Catalogs')}}</a></li>
        <li><a href="{{route('admin.category.index')}}">{{__('Categories')}}</a></li>
        <li><a href="{{route('admin.subcategory.index')}}">{{__('Subcategories')}}</a></li>
        <li><a href="#">{{__('CatalogCategory')}}</a></li>
        <li><a href="#">{{__('CategorySubcategory')}}</a></li>
        <li><a href={{route('admin.product.index')}}>{{__('Products')}}</a></li>
        <li><a href="#">{{__('Orders')}}</a></li>
        <li><a href="#">{{__('User')}}</a></li>
        <li><a href="#">{{__('Filter')}}</a></li>
      </ul>
    </nav>
    <div class="line"></div>
    <div class="admin_content">
      @yield('admin.catalog.index')
      @yield('admin.catalog.edit')
    </div>
  </section>
</main>
@livewireScripts
</body>
</html>
