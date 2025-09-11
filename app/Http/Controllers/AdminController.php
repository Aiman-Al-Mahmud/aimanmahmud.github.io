<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\BlogPost;
use App\Models\Contact;

class AdminController extends Controller
{
    public function dashboard()
    {
        $projectsCount = Project::count();
        $blogsCount = BlogPost::count();
        $recentProjects = Project::latest()->take(3)->get();
        $recentBlogs = BlogPost::latest()->take(3)->get();

        return view('admin.dashboard', compact('projectsCount', 'blogsCount', 'recentProjects', 'recentBlogs'));
    }
}
