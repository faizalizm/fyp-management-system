<?php

namespace App\View\Components;

use Illuminate\View\Component;

class sidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $act;
    public function __construct($data)
    {
        $this->act = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar');
    }
}
