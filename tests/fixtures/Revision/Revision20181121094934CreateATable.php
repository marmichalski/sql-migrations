<?php

declare(strict_types=1);

namespace Tests\Fixtures\BenChallis\SqlMigrations\Revision;

use Amp\Sql\Executor;
use BenChallis\SqlMigrations\Migration\Revision\Revision;

final class Revision20181121094934CreateATable implements Revision
{
    public function apply(Executor $executor): void
    {
    }

    public function revert(Executor $executor): void
    {
    }
}
