<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Models\Product;

class ProductsController extends Controller
{
  public function index()
  {
      $products = Product::orderBy('id', 'desc')->take(8)->get();
      $data['newProducts']=Product::orderBy('id', 'desc')->take(8)->get();
      $data['bestSellProducts']=Product::where('quantity', '<', 100)->take(4)->get();

      return view('frontend.pages.product.index', compact('products'));
  }
  public function show($slug)
  {
    $product = Product::where('slug', $slug)->first();
      if (!is_null($product)) {
        return view('frontend.pages.product.show', compact('product'));
      }else {
        session()->flash('errors', 'Sorry !! There is no product by this URL..');
        return redirect()->route('products');
      }
  }
}
