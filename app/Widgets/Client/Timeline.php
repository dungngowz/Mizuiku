<?php

namespace App\Widgets\Client;

use Arrilot\Widgets\AbstractWidget;
use App\Models\ProgramTimeline;

class Timeline extends AbstractWidget
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
        $timeline = ProgramTimeline::orderBy('priority', 'desc')->orderBy('id', 'desc')->get();

        return view('widgets.client.timeline', [
            'config' => $this->config,
            'timeline' => $timeline
        ]);
    }
}
