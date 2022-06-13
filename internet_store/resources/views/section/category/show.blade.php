@extends('layout.index')
@section('title', $code)
@section('category.show')
  <section class="products category">
    <div class="wrapper">
      <div class="category_title">
        <h1>{{ $name }}</h1>
        <p>{{ __('Самые лучшие товары здесь') }}</p>
      </div>
      <div class="products_all">
        @foreach ($category as $item)
          @foreach ($item->products as $product)
            <x-product_block>
              <x-slot:img>{{$product->img}}</x-slot:img>
              <x-slot:name>{{$product->name}}</x-slot:name>
              <x-slot:price>{{$product->price}}$</x-slot:price>
              <x-slot:href_more>{{ route('product.show',[$name, $product->name]) }}</x-slot:href_more>
              <x-slot:action>{{ route('order.basket_store',$product->id) }}</x-slot:action>
            </x-product_block>
          @endforeach
        @endforeach
      </div>
    </div>
  </section>
@endsection
