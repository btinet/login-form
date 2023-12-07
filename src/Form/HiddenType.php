<?php

namespace App\Form;

class HiddenType extends AbstractInputType
{

    public function __construct()
    {
        parent::__construct(InputType::hidden);
    }

}