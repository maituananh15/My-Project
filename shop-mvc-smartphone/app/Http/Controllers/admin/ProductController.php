<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $products = Product::all();
        return view('admin.product.index', ['products' => $products]);
    }

    public function indexProduct(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $products = Product::all();
        return view('admin.layouts.product', ['products' => $products]);
    }

    public function create():Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.product.create');
    }

    public function store(Request $request):RedirectResponse
    {
        $input = $request->all();
        $product = new Product;
        $product->fill($input);
        $product->save();
        if($request->hasFile('images')){
            $imageName = $product->id . '.' . $request->file('images')->getClientOriginalExtension();
            $request->file('images')->storePubliclyAs('upload_new', $imageName);
            $imageUrl = asset('storage/upload_new/' . $imageName);
            $product->images = $imageUrl;
            $product->save();
        }
        return redirect()->route('admin.product.index')->with('success', 'Thêm mới sản phẩm thành công');
    }

    public function show($id):Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $product = Product::where('id', $id)->first();
        return view('admin.product.detail', ['product' => $product]);
    }

    public function edit(Product $product):Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.product.edit', ['product' => $product]);
    }

    public function update(Request $request, Product $product):RedirectResponse
    {
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'sale' => $request->sale,
            'description' => $request->description,
        ]);
        if($request->hasFile('images')){
            $image = $request->file('images');
            $filename =$image->getClientOriginalName();
            $image->storeAs('products/'.$product->id, $filename, 'public');
            $product->update(['images' => $filename]);
        }
        return redirect()->route('admin.product.index');
    }
    public function destroy(Product $product):RedirectResponse
    {
        $product->cartItems()->delete();
        $product->delete();
        return redirect()->route('admin.product.index');
    }
}
