<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CareerController extends Controller
{

    public function index()
    {
        return view('admin::add-section.add-career');
    }

    public function addCareer(Request $request)
    {
        
        try {
            if ($request->isMethod('post')) {

                // dd($request);

                $request->validate([
                    'career_name' => 'required|string|max:255',
                    'career_description' => 'required|string|max:255',
                    'working_type' => 'required|string',
                    'location' => 'nullable|string',
                    'salary' => 'nullable|integer',
                ]);

                Career::create([
                    'career_name' => $request->career_name,
                    'career_description' => $request->career_description,
                    'working_type' => $request->working_type,
                    'location' => $request->location,
                    'salary' => $request->salary
                ]);

                return redirect()->back()->with('success', 'Career added successfully!');
            }

            $careers = Career::all();
            return view('admin::add-section.add-career', compact('careers'));
        } catch (\Exception $e) {
            Log::error('Add Career Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong while adding the career.');
        }
    }
}
