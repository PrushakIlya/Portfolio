<div {{ $attributes->class('product_block') }}>
  <div class="product_img">
    <div style="background-image: url('/storage/{{ $img }}')"></div>
  </div>
  <h2>{{ $name }}</h2>
  <p>{{ $price }}</p>
  <div class="product_button">
    <form action = {{ $action }} method="POST">
      @csrf
      <input type="submit" value="В корзину" class="btn_card">
      <a href="{{ $href_more }}" class="btn_more_info">{{ __('Подробнее') }}</a>
    </form>
  </div>
</div>
