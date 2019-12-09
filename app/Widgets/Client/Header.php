<?php

namespace App\Widgets\Client;

use Arrilot\Widgets\AbstractWidget;
use App\Models\Category;

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
    public function run()
    {
        $categoriesNews = Category::orderBy('priority', 'desc')->orderBy('id', 'desc')->where('status', 1)->get();

        return view('widgets.client.header', [
            'config' => $this->config,
            'categoriesNews' => $categoriesNews
        ]);
    }
}
