<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function addProduct(Request $request)
    {
        if ($request->isMethod('post')) {

            $request->validate([
                'product_name' => 'required|string|max:255',
                'product_overview' => 'required|string',
                'product_description' => 'nullable|string',
                'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($request->hasFile('product_image')) {
                $imagePath = $request->file('product_image')->store('product_images', 'public');
            } else {
                $imagePath = null;
            }

            Product::create([
                'product_name' => $request->product_name,
                'product_overview' => $request->product_overview,
                'product_description' => $request->product_description,
                'product_image' => $imagePath,
            ]);

            return redirect()->back()->with('success', 'Product added successfully!');
        }

        $products = Product::all();
        return view('admin::add-section.add-product', compact('products'));
    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin::edit-section.edit-product', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_overview' => 'required|string',
            'product_description' => 'nullable|string',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('product_image')) {
            $imagePath = $request->file('product_image')->store('product_images', 'public');
            $product->product_image = $imagePath;
        }

        $product->product_name = $request->product_name;
        $product->product_overview = $request->product_overview;
        $product->product_description = $request->product_description;
        $product->save();

        return redirect()->route('admin.dashboard')->with('success', 'Product updated successfully!');
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Product deleted successfully!');
    }
}
