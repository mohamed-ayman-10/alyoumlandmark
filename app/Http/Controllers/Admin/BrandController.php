<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Trait\FileUpload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SebastianBergmann\CodeUnit\FileUnit;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('admin.pages.brand.index', compact('brands'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'image' => 'required'
            ], [
                'image.required' => __('The image is required')
            ]);

            Brand::query()->create([
                'image' => FileUpload::File('images/brand', $request->image)
            ]);

            return back()->with('success', __('Create Successfully'));
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'image' => 'required'
            ], [
                'image.required' => __('The image is required')
            ]);

            $brand = Brand::query()->findOrFail($id);
            FileUpload::Delete($brand->image);
            $brand->image = FileUpload::File('images/brand', $request->image);
            $brand->save();

            return back()->with('success', __('Update Successfully'));
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy(string $id)
    {
        try {
            $brand = Brand::query()->findOrFail($id);
            FileUpload::Delete($brand->image);
            $brand->delete();

            return back()->with('success', __('Delete Successfully'));
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
