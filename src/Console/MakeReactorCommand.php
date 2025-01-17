<?php

namespace Spatie\EventSourcing\Console;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'make:reactor')]
class MakeReactorCommand extends GeneratorCommand
{
    protected $name = 'make:reactor';

    protected $description = 'Create a new reactor';

    protected $type = 'Reactor';

    protected function getStub()
    {
        return __DIR__.'/../../stubs/reactor.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Reactors';
    }
}
