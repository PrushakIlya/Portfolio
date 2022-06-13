@extends('layout.admin')
@section('admin.catalog.index')
  <section class="admin_catalog_index">
    <div class="container">
      <table>
        <tr>
          <th>
            <div class="id">{{__('ID')}}</div>
            <div>{{__('NAME')}}</div>
          </th>
        </tr>
        @foreach($catalog as $item)
          <tr>
            <td>
              <div class="id">{{$item->id}}.</div>
              <div>{{$item->name}}</div>
            </td>
            <x-two_icons href_destroy="{{route('admin.catalog.destroy',$item->id)}}"
                         href_edit="{{route('admin.catalog.edit',$item->id)}}"/>
          </tr>
        @endforeach
      </table>
    </div>
  </section>
@endsection
