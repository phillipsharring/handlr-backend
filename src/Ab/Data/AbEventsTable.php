<?php

declare(strict_types=1);

namespace Handlr\Ab\Data;

use Handlr\Ab\Domain\AbEventRecord;
use Handlr\Database\Table;

class AbEventsTable extends Table
{
    protected string $tableName = 'ab_events';
    protected string $recordClass = AbEventRecord::class;
}
