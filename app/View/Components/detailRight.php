<?php

namespace App\View\Components;

use Illuminate\View\Component;

class detailRight extends Component
{
    public $projectDetail;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($projectDetail)
    {
        $this->projectDetail = $projectDetail;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.detail-right');
    }
}
