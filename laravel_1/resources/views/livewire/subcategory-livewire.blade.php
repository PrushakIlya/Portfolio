<div>
  <table>
    <thead>
    <tr>
      <th>{{__('ID')}}</th>
      <th>{{__("NAME")}}</th>
    </tr>
    </thead>
    <tbody>
    @foreach($subcategory as $item)
      <tr>
        <td>
          <div>{{$item->id}}</div>
          <div>{{$item->name}}</div>
        </td>
        <td>
          <button wire:click="destroy({{$item->id}})"><?php echo destroy_svg() ?></button>
          <a href="{{route('admin.subcategory.edit',$item->id)}}">
            <button><?php echo edit_svg() ?></button>
          </a>
        </td>

      </tr>
    @endforeach
    </tbody>
  </table>
  {{$subcategory->appends(['sdf'=>'sdfd'])->links()}}

</div>

{{--<input type="text" wire:model.defer="name">--}}
{{--@error('name') <span class="error">{{ $message }}</span> @enderror--}}
{{--<input type="submit">Save</input>--}}