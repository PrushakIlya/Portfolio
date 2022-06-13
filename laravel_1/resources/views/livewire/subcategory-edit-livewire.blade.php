<div>
  @error('text') {{$message}} @enderror
  @if(isset($ok))
    <h1>{{$ok}}</h1>
  @endif
  <input type="text" wire:model.defer="text" placeholder="{{$name}}">
  <button wire:click="update({{$index}})">Save</button>
</div>
