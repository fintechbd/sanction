<?php

namespace Fintech\Sanction\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    public $signature = 'sanction:install';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
