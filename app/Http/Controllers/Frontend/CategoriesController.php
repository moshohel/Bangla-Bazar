<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;
use Illuminate\Pagination\Paginator;

class CategoriesController extends Controller
{

    public function index()
    {
        //
    }

    public function show($id)
    {
        Paginator::useBootstrap();
        $category = Category::find($id);
        if (!is_null($category)) {
          return view('frontend.pages.categories.show', compact('category'));
        }else {
          session()->flash('errors', 'Sorry !! There is no category by this ID');
          return redirect('/');
        }
    }

}
