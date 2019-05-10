<?php

namespace CupOfTea\SnakeCaseRelations\Console\Commands;

use Illuminate\Foundation\Console\ModelMakeCommand as BaseCommand;

class ModelMakeCommand extends BaseCommand
{
    /**
     * {@inheritDoc}
     */
    protected function getStub()
    {
        if ($this->option('pivot')) {
            return __DIR__ . '/stubs/pivot.model.stub';
        }

        return __DIR__ . '/stubs/model.stub';
    }
}