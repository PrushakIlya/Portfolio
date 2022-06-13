@extends('layout.admin')
@section('admin.catalog.edit')
  <section class="admin_catalog_edit">
    <div class="container">
      <x-form_edit_small request="category_name" name="{{$name}}" action="{{route('admin.category.update',$id)}}"/>
    </div>
  </section>
@endsection