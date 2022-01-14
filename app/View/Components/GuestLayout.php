<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GuestLayout extends Component
{

    public $pagetitle;

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */

    public function __construct($pagetitle = null){
        $titlePrefix = "San Quintín | Mantenimiento Industrial";
        $this->pagetitle = $pagetitle ? $pagetitle . ' - ' . $titlePrefix : $titlePrefix;
    }

    public function render()
    {
        return view('layouts.guest');
    }
}
