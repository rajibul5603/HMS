<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class form extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $id;
    public $action;
    public $class;
    public $style;
    public $otherattr;
    public $method;

    public function __construct($id=null, $label=null, $value=null, $placeholder=null, $class=null, $style=null, $otherattr=null, $action=null,$method=null)
    {
        //
        $this->id = $id;
        $this->action = $action;
        $this->class = $class;
        $this->style = $style;
        $this->otherattr = $otherattr;
        $this->method = $method;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.form.form');
    }
}
