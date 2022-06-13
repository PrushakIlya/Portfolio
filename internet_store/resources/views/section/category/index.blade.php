@extends('layout.index')
@section('title', 'Все категории')
@section('category.index')
  <section class="categories">
    <div class="wrapper">
      <ul>
        @foreach ($category as $item)
          <li>
            <a href="{{ route('category.show',$item->code) }}">
              <img src="{{ asset('storage/' . $item->img) }}" alt="phones">
              <h2>{{ $item->name }}</h2>
            </a>
            <p>{{ $item->description }}</p>
          </li>
        @endforeach
      </ul>
    </div>
  </section>
@endsection
