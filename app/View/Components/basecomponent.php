<?php

namespace App\View\Components;

use Illuminate\View\Component;

class basecomponent extends Component
{
    public $type;
	public $action;
	
    public function __construct($type,$action)
    {
        $this->type = $type;
		$this->action = $action;
    }

	public function calucateProperty(){
		$rules = array(
			"text-size"=> array("plus"=> "font-plus","minus"=> "font-minus"),
			"font"=> array("brush"=> "font-brush"),
			"align"=> array("justify"=> "text-justify","left"=> "text-left","right"=> "text-right"),
			"spacing"=> array("plus"=> "font-space-plus","minus"=> "font-space-minus"),
			"mode"=> array("dark"=> "dark-mode"),
			"bgcolor"=> array("burlywood"=> "bg-burlywood","purple"=> "bg-purple","brown"=> "bg-brown")
		);
		return isset($rules[$this->type][$this->action])?$rules[$this->type][$this->action] : "";
	}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return '';
    }
}
