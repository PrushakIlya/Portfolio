@extends('layout.admin')
@section('admin.catalog.edit')
  <section class="admin_catalog_edit">
    <div class="container">
      @livewire('subcategory-edit-livewire',['index'=>$id,'name'=>$name])
      <a href="{{route('admin.subcategory.index')}}">
        <button>Back</button>
      </a>
    </div>
  </section>
@endsection