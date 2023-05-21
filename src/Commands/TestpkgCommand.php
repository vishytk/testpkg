<?php

namespace Vishy\Testpkg\Commands;

use Illuminate\Console\Command;

class TestpkgCommand extends Command
{
    public $signature = 'testpkg';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
