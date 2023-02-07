<?php

namespace App\View\Components;

use Illuminate\View\Component;

class contact extends basecomponent
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $type;
	public $action;
	
    public function __construct($type,$action)
    {
        parent::__construct($type,$action);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.contact');
    }
}
