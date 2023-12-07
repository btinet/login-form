<?php

namespace App\Form;

class TextType extends AbstractInputType
{

    public function __construct()
    {
        parent::__construct(InputType::text);
    }

}