<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
	public $classes;
	public $tableHeads;
	public $tableBody;
    public function __construct($classes,$tableHeads,$tableBody)
    {
       $this->classes = $classes;
	   $this->tableHeads = $tableHeads;
	   $this->tableBody = $tableBody;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table');
    }
}
