<?php

namespace App\Form;

abstract class AbstractInputType extends AbstractType
{
    protected InputType $inputType;

    public function __construct(InputType $inputType)
    {
        $this->inputType = $inputType;
    }

}