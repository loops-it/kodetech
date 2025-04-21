<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{


    public function addProject(Request $request)
    {
        if ($request->isMethod('post')) {

            // Validate form inputs
            $request->validate([
                'project_name' => 'required|string|max:255',
                'project_overview' => 'required|string',
                'project_description' => 'nullable|string',
                'project_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'client_name' => 'nullable|string|max:255',
                'duration' => 'nullable|string|max:255',
                'websiteLink' => 'nullable|string|max:255',
                'category' => 'required|string|max:100',
            ]);

            // Handle image upload
            $imagePath = null;
            if ($request->hasFile('project_image')) {
                $imagePath = $request->file('project_image')->store('project_images', 'public');
            }

            // Create project record
            Project::create([
                'project_name' => $request->project_name,
                'project_overview' => $request->project_overview,
                'project_description' => $request->project_description,
                'project_image' => $imagePath,
                'client_name' => $request->client_name,
                'duration' => $request->duration,
                'website_link' => $request->websiteLink,
                'category' => $request->category,
            ]);

            return redirect()->back()->with('success', 'Project added successfully!');
        }

        $projects = Project::all();
        return view('admin::add-section.add-project', compact('projects'));
    }


    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin::edit-section.edit-project', compact('project'));
    }

    // Update an existing project
    public function update(Request $request, $id)
    {
        $request->validate([
            'project_name' => 'required|string|max:255',
            'project_overview' => 'required|string',
            'project_description' => 'nullable|string',
            'project_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'client_name' => 'nullable|string|max:255',
            'duration' => 'nullable|string|max:255',
            'websiteLink' => 'nullable|string|max:255',
            'category' => 'required|string|max:100',
        ]);

        $project = Project::findOrFail($id);

        if ($request->hasFile('project_image')) {
            $imagePath = $request->file('project_image')->store('project_images', 'public');
            $project->project_image = $imagePath;
        }

        $project->update([
            'project_name' => $request->project_name,
            'project_overview' => $request->project_overview,
            'project_description' => $request->project_description,
            'client_name' => $request->client_name,
            'duration' => $request->duration,
            'website_link' => $request->websiteLink,
            'category' => $request->category,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Project updated successfully!');
    }


    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->back()->with('success', 'Project deleted successfully!');
    }



    // public function addProduct(Request $request) {
    //     if ($request->isMethod('post')) {

    //         // dd($request);

    //         $request->validate([
    //             'product_name' => 'required|string|max:255',
    //             'product_overview' => 'required|string',
    //             'product_description' => 'nullable|string',
    //             'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
    //         ]);

    //         if ($request->hasFile('product_image')) {
    //             $imagePath = $request->file('product_image')->store('product_images', 'public');
    //         } else {
    //             $imagePath = null;
    //         }

    //         Product::create([
    //             'product_name' => $request->product_name,
    //             'product_overview' => $request->product_overview,
    //             'product_description' => $request->product_description,
    //             'product_image' => $imagePath,
    //         ]);
    //         return redirect()->back()->with('success', 'product added successfully!');
    //     }

    //         return view('admin::add-section.add-product');
    // }


}
