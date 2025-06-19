<?php

namespace Jorgenb\TestSkeleton\Commands;

use Illuminate\Console\Command;

class TestSkeletonCommand extends Command
{
    public $signature = 'test-skeleton';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
