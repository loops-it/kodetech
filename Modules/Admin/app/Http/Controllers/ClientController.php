<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    
     
    public function addClient(Request $request) {
        if ($request->isMethod('post')) {

            // dd($request);
            
            $request->validate([
                'client_name' => 'required|string|max:255',
                // 'product_overview' => 'required|string',
                // 'product_description' => 'nullable|string',
                'client_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);

            if ($request->hasFile('client_logo')) {
                $imagePath = $request->file('client_logo')->store('client_logos', 'public');
            } else {
                $imagePath = null;
            }

            Client::create([
                'client_name' => $request->client_name,
                // 'product_overview' => $request->product_overview,
                // 'product_description' => $request->product_description,
                'client_logo' => $imagePath,
            ]);
            return redirect()->back()->with('success', 'Client added successfully!');
        }

            return view('admin::add-section.add-client');
    }
    
    
}
