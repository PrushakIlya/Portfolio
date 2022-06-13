@extends('layout.index')
@section('basket')
  <section class="accept_order">
    <div class="accept_order_block wrapper">
      <h1>{{ __('Подтвердить заказ') }}</h1>
      @foreach ($product as $item)
        <p>{{ __('Наименование товара: ') }}{{ $item->name }} </p>
        <p>{{ __('Общая стоимость заказа: ') }} {{ $item->price }}$</p>
        <p>{{ __('Укажите свой номер телевона и имя, что бы наш менеджер мог с вами связаться') }}</p>
        <form action="{{ route('order.order_store', $item->name) }}" method="POST">
          @csrf
          <div>
            <label for="name">{{ __('Имя:') }}</label>
            <input type="text" name="name">
          </div>
          <div>
            <label for="phone">{{ __('Номер телефона:') }}</label>
            <input type="tel" name="phone">
          </div>
        </form>
      @endforeach
      <a href="" class="btn_card">{{ __('Отправить') }}</a>
    </div>
  </section>
@endsection
