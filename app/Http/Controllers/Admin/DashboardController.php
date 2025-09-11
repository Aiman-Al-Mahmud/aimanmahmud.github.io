<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\BlogPost;
use App\Models\Contact;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'projects' => Project::count(),
            'published_projects' => Project::published()->count(),
            'blog_posts' => BlogPost::count(),
            'published_posts' => BlogPost::published()->count(),
            'contacts' => Contact::count(),
            'unread_contacts' => Contact::unread()->count(),
        ];

        $recentContacts = Contact::latest()->take(5)->get();
        $recentPosts = BlogPost::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentContacts', 'recentPosts'));
    }
}