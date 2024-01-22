<?php

namespace App\Http\Controllers;

use A17\Twill\Facades\TwillAppSettings;
use App\Repositories\ProjectRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProjectDisplayController extends Controller
{
    public function index(ProjectRepository $projectRepository): View
    {
        $projects = $projectRepository->get([], ['published' => 1]);

        return view('site.projects', ['title' => 'Projects', 'description' => 'Browse my current and past projects, that I did as a product designer with development skills.', 'items' => $projects]);
    }

    public function show(string $slug, ProjectRepository $projectRepository): View
    {
        $project = $projectRepository->forSlug($slug);

        if (!$project) {
            abort(404);
        }

        return view('site.project', ['title' => $project->title, 'description' => $project->description, 'item' => $project, 'item_next' => $projectRepository->next($project)]);
    }
}
