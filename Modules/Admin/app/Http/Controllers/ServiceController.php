<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{


    public function addService(Request $request)
    {
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



    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin::edit-section.edit-service', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'service_name' => 'required|string|max:255',
            'service_overview' => 'required|string',
            'service_description' => 'nullable|string',
            'service_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $service = Service::findOrFail($id);

        if ($request->hasFile('service_image')) {
            $imagePath = $request->file('service_image')->store('service_images', 'public');
            $service->service_image = $imagePath;
        }

        $service->service_name = $request->service_name;
        $service->service_overview = $request->service_overview;
        $service->service_description = $request->service_description;
        $service->save();

        return redirect()->route('admin.dashboard')->with('success', 'Service updated successfully!');
    }


    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Service deleted successfully!');
    }
}
