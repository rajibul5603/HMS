<?php

namespace App\View\Components\form\input;

use Illuminate\View\Component;

class textCombo extends Component
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
    public $btnlabel;
    public $btnicon;

    public function __construct($id=null, $label=null, $value=null, $placeholder=null, $class=null, $style=null, $btnlabel=null,$btnicon=null)
    {
        //
        $this->id = $id;
        $this->label = $label;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->class = $class;
        $this->style = $style;
        $this->btnlabel = $btnlabel;
        $this->btnicon = $btnicon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.form.input.text-combo');
    }
}
