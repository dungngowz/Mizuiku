<?php

namespace App\Widgets\Client;

use Illuminate\Http\Request;
use Arrilot\Widgets\AbstractWidget;
use App\Models\Category;
use App\Models\Article;
use App\Models\WebsiteLink;

class Footer extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run(Request $request)
    {
        $articlesAboutUs = Article::whereIn('keyword', ['co-organizingboard', 'program-introduction'])
            ->orderBy('id', 'desc')
            ->where('status', 1)->get();

        $categoriesNews = Category::orderBy('id', 'desc')->where('status', 1)->get();

        $websiteLink = WebsiteLink::orderBy('id', 'desc')->get();

        return view('widgets.client.footer', [
            'config' => $this->config,
            'segments' => empty($request->segments()) ? [''] : $request->segments(),
            'categoriesNews' => $categoriesNews,
            'articlesAboutUs' => $articlesAboutUs,
            'websiteLink' => $websiteLink
        ]);
    }
}
