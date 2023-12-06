<?php

namespace App\Component;

enum MetaType : string
{
    case title = "title";
    case description = "description";
    case author = "author";
    case lang = "de";
    case charset = "UTF-8";
}