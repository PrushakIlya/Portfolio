@extends('layout.index')
@section('title','Все товары')
@section('product.index')
  <section class="products">
    <div class="wrapper">
      <h1>{{__('Все товары')}}</h1>
      <div class="products_all">
        @foreach($product as $item)
          <x-product_block>
            <x-slot:img>{{$item->img}}</x-slot:img>
            <x-slot:name>{{$item->name}}</x-slot:name>
            <x-slot:price>{{$item->price}}$</x-slot:price>
            <x-slot:href_more>{{ route('product.show',[$item->code, $item->name]) }}</x-slot:href_more>
            <x-slot:action>{{ route('order.basket_store',$item->id) }}</x-slot:action>
          </x-product_block>
        @endforeach
      </div>
      <div class="paginate">
        {{$product->onEachSide(2)->links()}}
      </div>
    </div>
  </section>
  @push('css')
    <script src="https://cdn.tailwindcss.com"></script>
  @endpush
@endsection

