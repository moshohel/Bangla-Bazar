<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index()
  {
    return view('frontend.pages.home_content');
  }
  public function contact()
  {
    return view('frontend.pages.contact');
  }
  public function products()
  {
    $products = Product::orderBy('id', 'desc')->get();
    return view('frontend.pages.product.index')->with('products', $products);
  }
}
