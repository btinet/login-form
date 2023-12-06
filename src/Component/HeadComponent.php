<?php

namespace App\Component;

class HeadComponent
{

    private array $metaData = [];

    public function __construct(array $metaArray = [])
    {
        foreach ($metaArray as $meta => $value) {
            if ($meta instanceof MetaType) {
                $this->metaData[$meta->name] = $value;
            }
        }
    }

    public function get(MetaType $meta): string
    {
        return $this->metaData[$meta->name] ?: $meta->value;

    }

}