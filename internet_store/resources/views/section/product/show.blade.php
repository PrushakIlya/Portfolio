@extends('layout.index')
@section('product.show')
  <section class="show">
    <div class="wrapper">
      @foreach ($product as $item)
        <div class="show_block ">
          <h1>{{ $item->name }}</h1>
          <p>{{ $item->price }} $</p>
          <x-product_img>{{ $item->img }}</x-product_img>
          <p>{{ $item->description }}</p>
          <form action="{{ route('order.basket_store', $item->id) }}" method="POST">
            @csrf
            <input type="submit" class="btn_card" value="{{ __('Добавить в корзину') }}">
          </form>
        </div>
      @endforeach
    </div>
  </section>
@endsection
