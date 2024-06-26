<?php

namespace App\Http\Controllers;

use A17\Twill\Facades\TwillAppSettings;
use App\Repositories\PageRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PageDisplayController extends Controller
{
    public function show(string $slug, PageRepository $pageRepository): View
    {
        $page = $pageRepository->forSlug($slug);

        if (!$page) {
            abort(404);
        }

        return view('site.page', ['title' => $page->title, 'description' => $page->description, 'noindex' => $page->noindex, 'item' => $page, 'item_next' => $pageRepository->next($page)]);
    }

    public function home(): View
    {
        if (TwillAppSettings::get('homepage.homepage.page')->isNotEmpty()) {
            /** @var \App\Models\Page $frontPage */
            $frontPage = TwillAppSettings::get('homepage.homepage.page')->first();

            if ($frontPage->published) {
                return view('site.page', ['description' => 'Product Designer with more than 15 years of professional experience. Currently working remotely from Hamburg and creating an employee app changing desk-less work.', 'item' => $frontPage, 'is_frontpage' => true]);
            }
        }

        abort(404);
    }
}
