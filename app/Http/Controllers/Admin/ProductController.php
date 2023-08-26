<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request;
use App\Trait\FileUpload;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.pages.product.index', compact('products'));
    }

    public function create()
    {
        return view('admin.pages.product.create');
    }

    public function store(ProductRequest $request)
    {
        try {
            $data = $request->except('_token', 'image');
            $data['image'] = FileUpload::File('images/products', $request->image);
            Product::create($data);
            return redirect()->route('admin.product')->with('success', __('Create Successfully'));
        } catch (\Exception $ex) {
            return redirect()->back()->withErrors(['error' => $ex->getMessage()]);
        }
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.pages.product.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::query()->findOrFail($id);
        return view('admin.pages.product.edit', compact('product'));
    }

    public function update(ProductRequest $request, $id)
    {
        try {

            $product = Product::query()->findOrFail($id);
            $data = $request->except('_token', 'image');
            if ($request->hasFile('image')) {
                FileUpload::Delete($product->image);
                $data['image'] = FileUpload::File('images/products', $request->image);
            }

            $product->update($data);
            return redirect()->route('admin.product')->with('success', __('Update Successfully'));
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $product = Product::query()->findOrFail($id);
        FileUpload::Delete($product->image);
        $product->delete();
        return redirect()->back()->with('success', __('Delete Successfully'));
    }

    public function order()
    {
        $orders = Contact::all();
        return view('admin.pages.orders.index', compact('orders'));
    }
    public function updatesee($id)
    {
        $order = Contact::findOrFail($id);
        $order->update([
            'see' => now()
        ]);
        return redirect()->back();
    }

    public function delete($id)
    {
        Contact::findOrFail($id)->delete();
        return redirect()->back();
    }
}
