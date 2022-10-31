<?php

namespace Eugene\HelloWorldLaravelPackage\Commands;

use Illuminate\Console\Command;

class HelloWorldLaravelPackageCommand extends Command
{
    public $signature = 'hello-world-laravel-package';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
