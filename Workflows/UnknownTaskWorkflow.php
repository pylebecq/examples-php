<?php

use Zenaton\Interfaces\WorkflowInterface;
use Zenaton\Traits\Zenatonable;

class UnknownTaskWorkflow implements WorkflowInterface
{
    use Zenatonable;

    public function handle()
    {
        (new UnknownTask())->execute();
    }
}
