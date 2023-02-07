<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SubmitButton extends InputField
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
	public $classes;
	public $id;
	public $type;
	public $label;
	
    public function __construct($classes,$id,$type,$label)
    {
        parent::__construct($classes,$id,$type,null,$label);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.submit-button');
    }
}
