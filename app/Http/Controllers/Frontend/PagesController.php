<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index()
  {
    // $products = Product::orderBy('id', 'desc')->paginate(3);
    // $products = Product::orderBy('id', 'desc')->get();

    $data['newProducts']=Product::orderBy('id', 'desc')->take(8)->get();
    $data['bestSellProducts']=Product::where('quantity', '<', 100)->take(4)->get();

    return view('frontend.pages.home_content', ['data'=>$data]);
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
