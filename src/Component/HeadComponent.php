<?php

namespace App\Component;

class HeadComponent
{

    private array $meta = [];

    public function __construct(array $metaArray = [])
    {
        foreach ($metaArray as $key => $value) {
            if ($key instanceof MetaType) {
                $this->meta[$key->name] = $value;
            }
        }
    }

    public function get(MetaType $name): string
    {
        return $this->meta[$name->name] ?: $name->value;

    }

}