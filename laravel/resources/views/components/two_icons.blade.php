<td class="two_icons">
  <form action="{{$attributes['href_destroy']}}" method="POST">
    @method('DELETE')
    @csrf
    <button><?php echo destroy_svg()?></button>
  </form>
  <form action="{{$attributes['href_edit']}}" method="GET">
    <button><?php echo edit_svg() ?></button>
  </form>
</td>
