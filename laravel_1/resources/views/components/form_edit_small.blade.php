<form action="{{$attributes['action']}}" method="POST" class="form_edit_small">
  @csrf
  @method('PUT')
  <input type="text" name="{{$attributes['request']}}" placeholder="{{$attributes['name']}}" class="catalog">
  <input type="submit" value="rename">
</form>
