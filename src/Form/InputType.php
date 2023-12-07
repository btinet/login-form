<?php

namespace App\Form;

enum InputType
{
    case text;
    case password;
    case number;
    case date;
    case hidden;
}