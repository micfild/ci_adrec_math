<?php

namespace Tests;

use App\Multiply;
use App\MultiplyBy2Command;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * @group integration
 */
class MultiplyBy2CommandTest extends TestCase
{
    public function testExecute()
    {
        $command = new MultiplyBy2Command(new Multiply());
        $commandTester = new CommandTester($command);

        $commandTester->execute([
            'number' => '5',
        ]);
        $output = $commandTester->getDisplay();
        $this->assertSame("5 * 2 = 10".PHP_EOL, $output);
    }
}
