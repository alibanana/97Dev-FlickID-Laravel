<?php

namespace App\View\Components;

use Illuminate\View\Component;

class mobileRight extends Component
{
    public $flag;
    public $featuredProject;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($flag, $featuredProject)
    {
        $this->flag = $flag;
        $this->featuredProject = $featuredProject;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.mobile-right');
    }
}
