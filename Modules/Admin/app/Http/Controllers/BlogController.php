<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    // index
    public function index(Request $request)
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get(); 
        return view('bind-pages.blog', compact('blogs'));
        // return dd($blogs);
    }


    // Store News Data
    public function addBlog(Request $request)
    {
        if ($request->isMethod('post')) {

            $request->validate([
                'news_heading' => 'required|string|max:255',
                'news_description' => 'required|string',
                'authur' => 'nullable|string',
                'date' => 'required|date',
                'news_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($request->hasFile('news_image')) {
                $imagePath = $request->file('news_image')->store('news_images', 'public');
            } else {
                $imagePath = null;
            }

            Blog::create([
                'news_heading' => $request->news_heading,
                'news_description' => $request->news_description,
                'authur' => $request->authur,
                'date' => $request->date,
                'news_image' => $imagePath,
            ]);

            return redirect()->back()->with('success', 'News added successfully!');
        }

        return view('admin::add-section.add-blogs');
    }
}
