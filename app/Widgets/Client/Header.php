<?php

namespace App\Widgets\Client;

use Illuminate\Http\Request;
use Arrilot\Widgets\AbstractWidget;
use App\Models\Category;
use App\Models\Article;
use App\Models\AboutUs;

class Header extends AbstractWidget
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
        $articlesAboutUs = Article::whereIn('keyword', ['co-organizingboard', 'program-introduction'])->orderBy('id', 'desc')->where('status', 1)->get();
        $categoriesNews = Category::where('type', 'news')->orderBy('id', 'desc')->where('status', 1)->get();
        $courseListHeader = Category::where('status', 1)->where('type', 'course')->orderBy('created_at', 'desc')->get();
        $aboutUs = AboutUs::whereNotNull('slug_menu')->orderBy('created_at', 'desc')->get();

        return view('widgets.client.header', [
            'config' => $this->config,
            'segments' => empty($request->segments()) ? [''] : $request->segments(),
            'categoriesNews' => $categoriesNews,
            'articlesAboutUs' => $articlesAboutUs,
            'courseListHeader' => $courseListHeader,
            'aboutUs' => $aboutUs
        ]);
    }
}
