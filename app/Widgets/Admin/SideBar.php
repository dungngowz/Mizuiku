<?php

namespace App\Widgets\Admin;

use Arrilot\Widgets\AbstractWidget;
use App\Models\Category;

class SideBar extends AbstractWidget
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
        $cats = (object)[
            'news' => Category::where('type', 'news')->get()
        ];

        return view('widgets.admin.side_bar', [
            'config' => $this->config,
            'cats'   => $cats,
            'segments' => request()->segments()
        ]);
    }
}
