<div>
  <form>
    <h1>{{$value}}</h1>
    <select wire:model="value">
      <option value="null" selected>{{ __('Please select') }}</option>
      @foreach($catalog as $item)
        <option value="{{ $item->id }}">{{$item->name}}</option>
      @endforeach
    </select>
    <select>
      <option label="{{__('esfd')}}" selected></option>
      @foreach($category as $cat)
        <option value="">{{$cat->name}}</option>
      @endforeach

    </select>
  </form>


  {{--  <form action="">--}}
  {{--    <h1>{{$name}}</h1>--}}
  {{--    <input wire:model.debounce.1000ms="name" type="text">--}}
  {{--  </form>--}}

</div>
