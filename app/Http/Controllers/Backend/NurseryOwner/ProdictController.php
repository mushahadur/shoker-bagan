<?php

namespace App\Http\Controllers\Backend\NurseryOwner;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NurseryOwner\Product;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\NurseryOwner\ProductRequest;

class ProdictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $products = Product::where('user_id', $userId)->orderBy('id', 'DESC')->get();
        return view('backend.nursery-owner.pages.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.nursery-owner.pages.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        // dd($request->all());
        $product = new Product();
        if ($request->hasFile('image')) {
            $destinationPath= 'public/product-images/';
            $image      = $request->file('image');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($destinationPath,$fileName);
            $product->image = $fileName;
        }

        $product->user_id       = $request->user_id;
        $product->name          = $request->name;
        $product->category      = $request->category;
        $product->price         = $request->price;
        $product->stock         = $request->stock;
        $product->description   = $request->description;
        $save = $product->save();
        if($save){
            return redirect(route('product.index'));
        }
        else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        // dd($product);
        return view('backend.nursery-owner.pages.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
        // dd($product);
        
        if ($request->hasFile('image')) {
            $destinationPath= 'public/product-images/';
            $image      = $request->file('image');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($destinationPath,$fileName);
            $product->image = $fileName;
        }

        $product->name    = $request->name;
        $product->category   = $request->category;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->description = $request->description;
        $product->update();
        return redirect(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('product.index'));
    }
}
