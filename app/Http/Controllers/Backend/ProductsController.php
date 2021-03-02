<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\ProductImage;

use Illuminate\Http\Request;
use Image;

use Illuminate\Support\Str;
$slug = Str::slug('Laravel 5 Framework', '-');


class ProductsController extends Controller
{

    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view('backend.pages.product.index')->with('products', $products);
    }

  public function create()
  {
    return view('backend.pages.product.create');
  }

  public function store(Request $request)
  {
    // Validation
    $request->validate([
      'title'         => 'required|max:150',
      'description'   => 'required',
      'price'         => 'required|numeric',
      'quantity'      => 'required|numeric',
      'category_id'   => 'required|numeric',
      'brand_id'      => 'required|numeric',
    ]);

    // Using Product Modle
    $product = new Product;
    $product->title = $request->title;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->quantity = $request->quantity;

    $product->slug = str::slug($request->title);
    $product->category_id = $request->category_id;
    $product->brand_id = $request->brand_id;
    $product->admin_id = 1;
    $product->save();


    // Inserting multiple Images
    if (count($request->product_image) > 0) {
      $i = 0;
      foreach ($request->product_image as $image) {

        //insert that image
        //$image = $request->file('product_image');
        $img = time() . $i .'.'. $image->getClientOriginalExtension();
        $location = 'images/' .$img;
        Image::make($image)->save($location);

        // Using PorductImage
        $product_image = new ProductImage;
        $product_image->product_id = $product->id;
        $product_image->image = $img;
        $product_image->save();
        $i++;
      }
    }

    // return redirect()->route('admin.products');
    return redirect()->route('admin.products');
  }

  public function edit($id)
  {
    $product = Product::find($id);
    return view('backend.pages.product.edit')->with('product', $product);
  }

  public function update(Request $request, $id)
  {
    // Validation
    $request->validate([
      'title'         => 'required|max:150',
      'description'   => 'required',
      'price'         => 'required|numeric',
      'quantity'      => 'required|numeric',
      // 'category_id'   => 'required|numeric',
      // 'brand_id'      => 'required|numeric',
    ]);

    // Using Product Modle
    $product = Product::find($id);
    $product->title = $request->title;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->quantity = $request->quantity;

    $product->slug = str::slug($request->title);
    $product->category_id = 1;
    $product->brand_id = 1;
    $product->admin_id = 1;
    $product->save();


    // Inserting multiple Images
    // if (count($request->product_image) > 0) {
    //   $i = 0;
    //   foreach ($request->product_image as $image) {

    //     //insert that image
    //     //$image = $request->file('product_image');
    //     $img = time() . $i .'.'. $image->getClientOriginalExtension();
    //     $location = 'images/' .$img;
    //     Image::make($image)->save($location);

    //     // Using PorductImage
    //     $product_image = new ProductImage;
    //     $product_image->product_id = $product->id;
    //     $product_image->image = $img;
    //     $product_image->save();
    //     $i++;
    //   }
    // }

    return redirect()->route('admin.products');
  }

  public function delete($id)
  {
    $product = Product::find($id);
    if (!is_null($product)){
        $product->delete();
    }

    session()->flash('success', 'Product has deleted successfully !!');

    return back();
  }

}
