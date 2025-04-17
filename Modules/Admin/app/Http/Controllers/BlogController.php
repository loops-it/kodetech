<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    
    // Store News Data
    public function addBlog(Request $request)
    {
        if ($request->isMethod('post')) {

            $request->validate([
                'news_heading' => 'required|string|max:255',
                'news_description' => 'required|string',
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
                'news_image' => $imagePath,
            ]);

            return redirect()->back()->with('success', 'News added successfully!');
        }

        return view('admin::add-section.add-blogs');
    }

    // Show All News
    // public function showNews()
    // {
    //     $newsList = Blog::all();
    //     return view('admin::blogs.index', compact('newsList'));
    // }
}









