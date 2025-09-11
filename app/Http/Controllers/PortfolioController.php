<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\BlogPost;
use App\Models\Contact;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
        $featuredProjects = Project::published()->featured()->orderBy('sort_order')->take(3)->get();
        $latestPosts = BlogPost::published()->latest('published_at')->take(3)->get();
        
        return view('home.index', compact('featuredProjects', 'latestPosts'));
    }

    public function about()
    {
        return view('about.index');
    }

    public function skills()
    {
        return view('skills.index');
    }

    public function education()
    {
        return view('education.index');
    }

    public function contact()
    {
        return view('contact.index');
    }

    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        Contact::create($validated);

        return back()->with('success', 'Thank you for your message! I will get back to you soon.');
    }
}
