<?php

namespace App\Console\Commands;

use Fox\Console\Console;

/**
 * The sample command
 * PHP version >= 7.0
 *
 * @category Commands
 * @package  Fox
 */
class SampleCommand extends Console
{
    public const SIGNATURE = "command:test {mandatoryArgument} {?optionalArgument}";

    /**
     * Run the command
     *
     * @return void
     */
    public function run()
    {
        # run php console command:test firstArgument lastArgument
        echo $this->argument("mandatoryArgument");
        echo PHP_EOL;
        echo $this->argument("optionalArgument");
    }
}
