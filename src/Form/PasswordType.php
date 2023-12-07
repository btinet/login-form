<?php

namespace App\Form;

class PasswordType extends AbstractInputType
{

    public function __construct()
    {
        parent::__construct(InputType::password);
    }

}
