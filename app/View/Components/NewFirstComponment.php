<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NewFirstComponment extends Component
{
    public $name, $author;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name,$author)
    {
        $this->name = $name;
        $this->author = $author;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.new-first-componment');
    }
}
