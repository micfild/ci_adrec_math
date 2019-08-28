<?php

namespace Tests;
use App\Multiply;
use App\MultiplyBy100Command;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;
/**
 * @group integration
 */
class MultiplyBy100CommandTest extends TestCase
{
    public function testExecute()
    {
        $command = new MultiplyBy100Command(new Multiply());
        $commandTester = new CommandTester($command);

        $commandTester->execute([
            'number' => '5',
        ]);
        $output = $commandTester->getDisplay();
        $this->assertSame("5 * 100 = 500".PHP_EOL, $output);
    }
}
