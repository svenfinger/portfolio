<?php

namespace App\Http\Controllers;

use A17\Twill\Facades\TwillAppSettings;
use App\Repositories\WorkRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class WorkDisplayController extends Controller
{
    public function index(WorkRepository $workRepository): View
    {
        $work = $workRepository->get([], ['published' => 1]);

        return view('site.work', ['title' => 'Work', 'description' => 'Browse my current and past projects, that I did as a product designer with development skills.', 'items' => $work]);
    }

    public function show(string $slug, WorkRepository $workRepository): View
    {
        $work = $workRepository->forSlug($slug);

        if (!$work) {
            abort(404);
        }

        return view('site.work.detail', ['title' => $work->title, 'description' => $work->description, 'item' => $work, 'item_next' => $workRepository->next($work)]);
    }
}
