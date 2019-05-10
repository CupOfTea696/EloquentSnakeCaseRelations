<?php

namespace CupOfTea\Database\Eloquent\Relations;

use CupOfTea\Database\Eloquent\Concerns\HasSnakeCaseRelations;
use Illuminate\Database\Eloquent\Relations\Pivot as EloquentPivot;

class Pivot extends EloquentPivot
{
    use HasSnakeCaseRelations;
}
