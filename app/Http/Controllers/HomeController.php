<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProjects = Project::published()->featured()->orderBy('sort_order')->take(3)->get();
        $latestPosts = BlogPost::published()->latest('published_at')->take(3)->get();
        
        return view('home', compact('featuredProjects', 'latestPosts'));
    }

    public function about()
    {
        return view('about');
    }

    public function skills()
    {
        return view('skills');
    }

    public function education()
    {
        return view('education');
    }
}