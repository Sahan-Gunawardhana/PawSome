<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    //lets the admin create a new product
    public function save(Request $req){
        
        if($req->hasfile('product_image')){
            $path = $req->file('product_image')->store('product_images', 'public');
            $fileUrl = Storage::url($path);
        } else {
            $fileUrl = null;
        }

        

        Product::create([
            'pro_name' => $req->input('product_name'),
            'pro_price' => $req->input('product_price'),
            'pro_keyword' => $req->input('product_keyword'),
            'shelf_life' => $req->input('shelf_life'),
            'pro_description' => $req->input('product_description'),
            'pro_width' => $req->input('product_width'),
            'pro_height' => $req->input('product_height'),
            'pro_length' => $req->input('product_length'),
            'pro_image_url' => $fileUrl
        ]);

        return redirect()->back();
    }
    //deletes a product
    public function delete(Request $request){
        Product::find($request->input('pro_id'))->delete();
        return redirect ('admin/manageP');
    }
    //edits a product
    public function edit(Product $item){
        return view('product.edit', ['product' => $item]);
    }

    public function update(Product $item, Request $request){
        if($request-> hasFile('product_image')){
            $path = $request-> file('product_image')->store('product_images', 'public');
            $fileUrl = Storage::url($path);
        }
        else{
            $fileUrl = $item->pro_image_url;
        }

        $item->update([
            'pro_name' => $request->input('product_name'),
            'pro_price' => $request->input('product_price'),
            'pro_keyword' => $request->input('product_keyword'),
            'shelf_life' => $request->input('shelf_life'),
            'pro_width' => $request->input('product_width'),
            'pro_height' => $request->input('product_height'),
            'pro_length' => $request->input('product_length'),
            'pro_description' => $request->input('product_description'),
            'pro_image_url' => $fileUrl
        ]);

        return redirect('admin/manageP');
    }

    //load products to the table
    public function index()
    {
        $products = Product::get();
        return view('admin.manageP', ['products' => $products]);
    }

    //load products to the store page
    public function store(){
        $products = Product::get();
        return view('store', ['products' => $products]);
    }
}
