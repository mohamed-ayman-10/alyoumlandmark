<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request;
use App\Trait\FileUpload;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.page.product.index', compact('products'));
    }

    public function create()
    {
        return view('admin.page.product.create');
    }

    public function store(ProductRequest $request)
    {
        try {
            $data = $request->except('_token', 'image');
            $data['image'] = FileUpload::File('images/products', $request->image);
            Product::create($data);
            return redirect()->route('admin.product')->with('success', __('Successfully Created Products'));
        } catch (\Exception $ex) {
            return redirect()->back()->withErrors(['error' => $ex->getMessage()]);
        }
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.page.product.show', compact('product'));
    }
}
