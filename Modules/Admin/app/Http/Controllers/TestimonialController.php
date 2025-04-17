<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Project;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    
     
    public function addTestimonial(Request $request) {
        if ($request->isMethod('post')) {

            // dd($request);
            
             // Validate form data
            $request->validate([
                'review_overview' => 'required|string|max:255',
                'review_message' => 'nullable|string',
                'rating' => 'required|integer|min:1|max:5',
                'client_name' => 'required|string|max:255',
                'client_designation' => 'required|string|max:255',
                'testimonial_client_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);


           // Handle image upload
            if ($request->hasFile('testimonial_client_image')) {
                $imagePath = $request->file('testimonial_client_image')->store('testimonials', 'public');
            } else {
                return back()->with('fail', 'Image upload failed');
            }

            // Store in database
            Testimonial::create([
                'review_overview' => $request->review_overview,
                'review_message' => $request->review_message,
                'rating' => $request->rating,
                'client_name' => $request->client_name,
                'client_designation' => $request->client_designation,
                'testimonial_client_image' => $imagePath,
            ]);
            return redirect()->back()->with('success', 'Testimonial added successfully!');
        }

        return view('admin::add-section.add-testimonial');
    }








    public function addProduct(Request $request) {
        if ($request->isMethod('post')) {

            // dd($request);
            
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
            return redirect()->back()->with('success', 'product added successfully!');
        }

            return view('admin::add-section.add-product');
    }
    
    
}
