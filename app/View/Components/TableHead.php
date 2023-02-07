<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TableHead extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
	public $tableHeads;
    public function __construct($tableHeads)
    {
        $this->tableHeads = $tableHeads;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table-head');
    }
}
