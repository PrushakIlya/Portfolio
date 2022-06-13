<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
  <script type="text/javascript" src="{{asset('js/main.js')}}" defer/>
  @stack('css')
  @stack('js')
  <title>{{__('Admin')}}</title>
</head>
<body>
<main class="container">
  <section class="admin_icon">
    <div class="icon"></div>
    <div class="name">{{__('Admin')}}</div>
    <div class="line"></div>
  </section>
  <section>
    <div id="app" class="navigation"></div>
  </section>
</main>

</body>
</html>
