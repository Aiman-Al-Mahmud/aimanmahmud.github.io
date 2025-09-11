<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::published()->orderBy('sort_order')->paginate(12);
        $tags = Project::published()->whereNotNull('tags')->get()->pluck('tags')->flatten()->unique()->values();
        
        return view('project.index', compact('projects', 'tags'));
    }

    public function show(Project $project)
    {
        if (!$project->is_published) {
            abort(404);
        }
        
        $relatedProjects = Project::published()
            ->where('id', '!=', $project->id)
            ->take(3)
            ->get();
        
        return view('projects.show', compact('project', 'relatedProjects'));
    }
}