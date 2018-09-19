<?php

use Zenaton\Interfaces\WorkflowInterface;
use Zenaton\Traits\Zenatonable;

class ErrorWorkflow implements WorkflowInterface
{
    use Zenatonable;

    public function handle()
    {
        $taskA = new TaskA();
        $taskA->cantTouchThis();
        $taskA->execute();
    }
}
