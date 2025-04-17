<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    
     
    public function addService(Request $request) {
        if ($request->isMethod('post')) {

            // dd($request);
            
            $request->validate([
                'service_name' => 'required|string|max:255',
                'service_overview' => 'required|string',
                'service_description' => 'nullable|string',
                'service_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);

            if ($request->hasFile('service_image')) {
                $imagePath = $request->file('service_image')->store('service_images', 'public');
            } else {
                $imagePath = null;
            }

            service::create([
                'service_name' => $request->service_name,
                'service_overview' => $request->service_overview,
                'service_description' => $request->service_description,
                'service_image' => $imagePath,
            ]);
            return redirect()->back()->with('success', 'service added successfully!');
        }

            return view('admin::add-section.add-service');
    }
    
    
}
