<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class modalFormAdmin extends Component
{
    public $id;
    public $title;
    /**
     * Create a new component instance.
     */
    public function __construct($id , $title)
     {
        $this->id = $id;
        $this->title = $title;
     }

     /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal-editForm-admin', [
            "id" => $this->id,
            "title" => $this->title
        ]);
    }
}
