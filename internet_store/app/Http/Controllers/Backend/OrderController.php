<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use function PHPSTORM_META\map;

class OrderController extends BaseController
{
  public function order_index()
  {
    // $product = DB::table('products')->where('name', '=', $name)->get();
    return view('section.order.order_index', compact('product'));
  }

  public function order_store(Request $request, $id)
  {
    dd($request);
  }

  public function basket_store($product_id)
  {
    if (!Session::has('order_id')) {
      $order_id = Order::create()->id;
      session(['order_id' => $order_id]);
      Order::find(Session::get('order_id'))->products()->attach($product_id);
      return redirect()->back();
    }

    $order = Order::find(Session::get('order_id'));

    if ($order->products->contains($product_id)) {
      $order_pivot = $order->products()->find($product_id)->pivot;
      $order_pivot->count++;
      $order_pivot->update();
      return redirect()->back();
    }

    $order->products()->attach($product_id);
    return redirect()->back();
  }

  public function basket_index()
  {
    $order = Order::find(Session::get('order_id'));
    $products = $order->products;
    $categories = DB::table('categories')->get(['id', 'name']);
    return view('section.order.basket_index', compact(['products', 'categories']));
  }

  public function product_in_cart()
  {
    return view('section.order.product_in_cart');
  }

  public function basket_delete($id)
  {
    $order = Order::find(Session::get('order_id'));
    $order_pivot = $order->products()->find($id)->pivot;
    --$order_pivot->count == 0 ? $order->products()->detach($id) : $order_pivot->update();
    return redirect()->route('order.basket_index');
  }

  public function order_plus(){
    
  }
}
