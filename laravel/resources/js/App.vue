<template>
  <nav>
    <ul>
      <li>
        <router-link to="/admin/catalog">Catalog</router-link>
      </li>
      <li>
        <router-link to="/admin/catalog">Category</router-link>
      </li>
      <!--      <li><a href="#">{{ __('Subcategories') }}</a></li>-->
      <!--      <li><a href="#">{{ __('CatalogCategory') }}</a></li>-->
      <!--      <li><a href="#">{{ __('CategorySubcategory') }}</a></li>-->
      <!--      <li><a href="#">{{ __('Products') }}</a></li>-->
      <!--      <li><a href="#">{{ __('Orders') }}</a></li>-->
      <!--      <li><a href="#">{{ __('User') }}</a></li>-->
      <!--      <li><a href="#">{{ __('Filter') }}</a></li>-->
    </ul>
  </nav>
  <div class="line"></div>
  <div class="admin_content">
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: "App"
}
</script>



<style>

</style>