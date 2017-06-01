<?php

use Tasky\Interfaces\WorkflowInterface;
use Tasky\Tasks\Wait;

class HistoryFlow_a implements WorkflowInterface
{
    protected $max;

    public function __construct($max)
    {
        $this->max = $max;
    }

    public function handle()
    {
        $t = execute(new EchoDuration(1));

        execute((new Wait())->seconds($this->max));

        $t = execute(new EchoDuration(3));

        execute((new Wait())->seconds(5));

        $t = execute(new EchoDuration(3));

        execute((new Wait())->seconds(5));

        $t = execute(new EchoDuration(3));

        execute((new Wait())->seconds(5));

        $t = execute(new EchoDuration(3));

        execute((new Wait())->seconds(5));

        $t = execute(new EchoDuration(3));

        return $t;
    }
}