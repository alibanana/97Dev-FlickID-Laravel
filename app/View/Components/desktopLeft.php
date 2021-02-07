<?php

namespace App\View\Components;

use Illuminate\View\Component;

class desktopLeft extends Component
{   
    public $flag;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($flag)
    {   
        $this->flag = $flag;
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
