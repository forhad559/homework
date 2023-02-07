<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TableBody extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
	public $tableBody;
    public function __construct($tableBody)
    {
       $this->tableBody = $tableBody;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table-body');
    }
}
