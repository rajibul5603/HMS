<?php

namespace App\View\Components\form\input;

use Illuminate\Support\Facades\Hash;
use Illuminate\View\Component;

class password extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $id;
    public $label;
    public $value;
    public $placeholder;
    public $class;
    public $style;
    public $otherattr;

    public function __construct($id=null, $label=null, $value=null, $placeholder=null, $class=null, $style=null, $otherattr=null)
    {
        //
        $this->id = $id;
        $this->label = $label;
        if($value!=''){$this->value = Hash::make($value);}else{ $this->value = $value;}
        $this->placeholder = $placeholder;
        $this->class = $class;
        $this->style = $style;
        $this->otherattr = $otherattr;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input.password');
    }
}
