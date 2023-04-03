<?php

namespace App\View\Components;

use Illuminate\View\Component;

class header extends Component
{
    public $headerTitle;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($headerTitle)
    {
        $this->headerTitle = $headerTitle; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.header');
    }
}
