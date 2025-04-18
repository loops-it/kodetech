<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;


class SlugController extends Controller
{
    public function ProductsShow($slug)
    {
        // Fetch the post by slug
        $products = Product::where('slug', $slug)->firstOrFail();
        return view('bind-pages.our-products', compact('products'));
    }


    public function ServicesShow($slug)
    {
        // Fetch the post by slug
        $services = Service::where('slug', $slug)->firstOrFail();
        return view('bind-pages.our-services', compact('services'));
    }


    public function ProjectShow($slug)
    {
        // Fetch the post by slug
        $projects = Project::where('slug', $slug)->firstOrFail();
        return view('bind-pages.project-details', compact('projects'));
    }
}
