<?php

namespace App\Http\Controllers;

use A17\Twill\Facades\TwillAppSettings;
use App\Repositories\ProjectRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProjectDisplayController extends Controller
{
    public function show(string $slug, ProjectRepository $projectRepository): View
    {
        $project = $projectRepository->forSlug($slug);

        if (!$project) {
            abort(404);
        }

        return view('site.project', ['item' => $project]);
    }
}
