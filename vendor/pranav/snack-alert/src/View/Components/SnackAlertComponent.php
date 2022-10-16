<?php

namespace Pranav\SnackAlert\View\Components;

use Illuminate\Support\Facades\Log;
use Illuminate\View\Component;

class SnackAlertComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('snack-alert::snack-alert');
    }

}
