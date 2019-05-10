<?php

namespace CupOfTea\Database\Eloquent;

use Illuminate\Database\Eloquent\Model as Eloquent;
use CupOfTea\Database\Eloquent\Concerns\HasSnakeCaseRelations;

abstract class Model extends Eloquent
{
    use HasSnakeCaseRelations;
}
