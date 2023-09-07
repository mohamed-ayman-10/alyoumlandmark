<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Trait\FileUpload;
use Illuminate\Http\Request;

class ImagController extends Controller
{

    public function store(Request $request)
    {
        try {
            $request->validate([
                'image' => 'required',
            ], [
                'image.required' => __('The image is required'),
            ]);

            $image = new Image();
            $image->path = FileUpload::File('images/products', $request->image);
            $image->product_id = $request->product_id;
            $image->save();

            return redirect()->back()->with('success', __('Create Successfully'));
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors(['error' => $exception->getMessage()]);
        }
    }

    public function update(Request $request)
    {
        try {
            $request->validate([
                'image' => 'required',
            ], [
                'image.required' => __('The image is required'),
            ]);

            $image = Image::query()->findOrFail($request->id);
            FileUpload::Delete($image->path);
            $image->path = FileUpload::File('images/products', $request->image);
            $image->save();

            return redirect()->back()->with('success', __('Update Successfully'));
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors(['error' => $exception->getMessage()]);
        }
    }

    public function delete($id)
    {
        try {

            $image = Image::query()->findOrFail($id);
            FileUpload::Delete($image->path);
            $image->delete();

            return redirect()->back()->with('success', __('Delete Successfully'));
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors(['error' => $exception->getMessage()]);
        }
    }
}
