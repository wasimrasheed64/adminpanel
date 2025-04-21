<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class InputComponent extends Component
{
    public  $name,$label,$type,$placeholder,$value;


    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($name,$label,$type = "text",$value,$placeholder = "")
    {
        $this->name = $name;
        $this->label= $label;
        $this->type = $type ;
        $this->placeholder = $placeholder;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input-component');
    }
}
