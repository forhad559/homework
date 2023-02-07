<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputField extends Component
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
	
    public function __construct($classes,$id,$type,$placeholder = null,$label)
    {
        $this->classes = $classes;
		$this->id = $id;
		$this->type = $type;
		$this->placeholder = $placeholder;
		$this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-field');
    }
}
