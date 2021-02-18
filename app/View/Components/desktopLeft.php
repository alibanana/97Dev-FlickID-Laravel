<?php

namespace App\View\Components;

use Illuminate\View\Component;

class desktopLeft extends Component
{   
    public $flag;
    public $featuredProject;
    public $relatedProject;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($flag, $featuredProject,$relatedProject)
    {   
        $this->flag = $flag;
        $this->featuredProject = $featuredProject;
        $this->relatedProject = $relatedProject;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.desktop-left');
    }
}
