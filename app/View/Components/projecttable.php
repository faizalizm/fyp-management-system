<?php

namespace App\View\Components;

use Illuminate\View\Component;

class projecttable extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $projectDisplay;
    public $lecturerDisplay;
    public $studentDisplay;
    public function __construct($title, $projectDisplay, $lecturerDisplay, $studentDisplay)
    {
        $this->title = $title;
        $this->projectDisplay = $projectDisplay;
        $this->lecturerDisplay = $lecturerDisplay;
        $this->studentDisplay = $studentDisplay;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.projecttable');
    }
}
