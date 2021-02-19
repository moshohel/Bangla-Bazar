<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
public function index()
  {
    return view('pages.pages');
  }
  public function contact()
  {
    return view('pages.contact');
  }
  public function products()
  {
    $products = Product::orderBy('id', 'desc')->get();
    return view('pages.product.index')->with('products', $products);
  }
}
