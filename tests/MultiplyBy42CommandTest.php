<?php


namespace Tests;


use App\Multiply;
use App\MultiplyBy42Command;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * @group integration
 */
class MultiplyBy42CommandTest extends TestCase
{
    public function testExecute()
    {
        $command = new MultiplyBy42Command(new Multiply());
        $commandTester = new CommandTester($command);

        $commandTester->execute([
            'number' => '5',
        ]);
        $output = $commandTester->getDisplay();
        $this->assertSame("5 * 42 = 210".PHP_EOL, $output);
    }
}