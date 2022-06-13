@extends('layout.index')
@push('js.cart_index')
  <script src="{{ asset('js/index.js') }}" defer></script>
@endpush
@section('basket')
  <section class="basket">
    <div class="wrapper">
      <div class="basket_block">
        <h1>{{ __('Корзина') }}</h1>
        <p>{{ __('Оформление заказа') }}</p>
        <table>
          <thead>
            <tr>
              <th class="title_name">{{ __('Название') }}</th>
              <th>{{ __('Кол-во') }}</th>
              <th>{{ __('Цена') }}</th>
              <th>{{ __('Стоимость') }}</th>
            </tr>
          </thead>
          <tbody>
            @if (session('order_id'))
              @foreach ($products as $item)
                <tr>
                  <td class="name">
                    <img src="/storage/{{ $item->img }}" alt="{{ $item->img }}">

                    @foreach ($categories as $category)
                      <form action="{{ route('product.show', [$category->name, $item->name]) }}" method="GET">
                        @if ($category->id == $item->category_id)
                          <button class="btn_href">{{ $item->name }}</button>
                        @endif
                      </form>
                    @endforeach
                    {{-- @foreach ($categories as $category)
                      @if ($category->id == $item->category_id)
                        <a href="{{ route('product.show', [$category->name, $item->name]) }}">{{ $item->name }}</a>
                      @endif
                    @endforeach DO NOT WORK!!!!!!!!ASK!!!!!! --}}
                  </td>
                  {{-- <td id="root"></td> REACT AFTER!!!--}}
                  <td>
                    <div class="cart_count">
                      <form action="{{ route('order.basket_store',$item->id) }}" method="POST">
                        @csrf
                        <button class="btn_plus btn_count">+</button>
                      </form>
                      <p>{{ $item->pivot->count }}</p>
                      <form action="{{ route('order.basket_delete',$item->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn_minus btn_count">-</button>
                      </form>
                    </div>
                  </td>
                  <td>{{ $item->price }}</td>
                  <td>{{ $item->totall_price() }}</td>
                </tr>
              @endforeach
            @endif
          </tbody>
        </table>
      </div>
      {{-- <a href="{{ route('order.basket_store',$item->id) }}" class="btn">{{ __('Оформить заказ') }}</a> --}}
    </div>
  </section>
@endsection
