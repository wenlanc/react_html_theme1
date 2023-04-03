<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    public $layout;

    public function __construct($layout = '')
    {
        $this->layout = $layout;
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        switch($this->layout){
           
            case 'withoutrightsidebar':
                return view('layouts.withoutrightsidebar');
                break;
            case 'withoutleftsidebar':
                return view('layouts.withoutleftsidebar');
                    break;
            default:
                return view('layouts.dashboard');
            break;
            
        }
    }
}
