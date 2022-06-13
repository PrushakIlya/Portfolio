@extends('layout.admin')
@section('admin.catalog.index')
  @push('js')
    <script src="https://cdn.tailwindcss.com"></script>
  @endpush
  <section class="admin_catalog_index">
    @livewire('subcategory-livewire')
  </section>
@endsection
