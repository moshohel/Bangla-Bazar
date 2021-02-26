<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\ProductImage;

use Illuminate\Http\Request;
use Image;

use Illuminate\Support\Str;
$slug = Str::slug('Laravel 5 Framework', '-');


class PagesController extends Controller
{
  public function index()
  {
    return view('backend.pages.index');
  }

}
