@extends('layout.index')
@section('product_in_cart')
  <section class="product_in_cart">
    <div class="wrapper">
      <h1>{{ __('Данный продукт уже находится в вашей корзине') }}</h1>
      <a href="{{ route('order.basket_index') }}" class="btn">{{ __('В корзину') }}</a>
    </div>
  </section>
@endsection
