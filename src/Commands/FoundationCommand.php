<?php

namespace LaraUtil\Foundation\Commands;

use Illuminate\Console\Command;

class FoundationCommand extends Command
{
    public $signature = 'foundation';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
