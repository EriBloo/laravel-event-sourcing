<?php

namespace Spatie\EventSourcing\Console;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'make:storable-event')]
class MakeStorableEventCommand extends GeneratorCommand
{
    protected $name = 'make:storable-event';

    protected $description = 'Create a storable event';

    protected $type = 'Domain event';

    protected function getStub()
    {
        return __DIR__.'/../../stubs/event.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\StorableEvents';
    }
}
