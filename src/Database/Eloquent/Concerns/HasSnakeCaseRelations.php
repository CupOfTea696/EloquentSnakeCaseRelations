<?php

namespace CupOfTea\Database\Eloquent\Concerns;

use Illuminate\Support\Str;

trait HasSnakeCaseRelations
{
    /**
     * @param  string  $key
     * @return mixed
     *
     * @uses \Illuminate\Database\Eloquent\Concerns\HasAttributes::getRelationValue() to get a relationship.
     */
    public function getRelationValue($key)
    {
        return parent::getRelationValue(Str::camel($key));
    }
}
