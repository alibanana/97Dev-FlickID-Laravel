<?php

namespace App\View\Components;

use Illuminate\View\Component;

class mcqQuestion extends Component
{
    public $question;
    public $index;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($question, $index)
    {
        $this->question = $question;
        $this->index = $index;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.mcq-question');
    }
}
