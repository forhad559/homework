<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TextArea extends InputField
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
	public $classes;
	public $id;
	public $type;
	public $placeholder;
	public $label;
	
    public function __construct($classes,$id,$type,$placeholder,$label)
    {
        parent::__construct($classes,$id,$type,$placeholder,$label);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.text-area');
    }
}
