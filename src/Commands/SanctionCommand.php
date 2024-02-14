<?php

namespace Fintech\Sanction\Commands;

use Illuminate\Console\Command;

class SanctionCommand extends Command
{
    public $signature = 'sanction';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
