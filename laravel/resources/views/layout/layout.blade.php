<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
  <script type="text/javascript" src="{{asset('js/main.js')}}" defer/>
  <title>Document</title>
</head>
<body>
@include('include.header')
<main>
  <div id="app"></div>
</main>
@if($path)
  <img src="/storage/{{$path}}" alt="img">
  <h1>{{__('Ilya')}}</h1>
@endif
@include('include.description')
@include('include.footer')

</body>
</html>
