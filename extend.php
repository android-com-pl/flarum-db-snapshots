<?php

namespace Acpl\FlarumDbSnapshots;

use Flarum\Extend;

return [
    (new Extend\Console())->command(DumbDbCommand::class),
];
