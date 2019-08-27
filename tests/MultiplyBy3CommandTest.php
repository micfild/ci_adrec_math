<?php


namespace Tests;


use App\Multiply;
use App\MultiplyBy3Command;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

class MultiplyBy3CommandTest extends TestCase
{
    public function testExecute()
    {
        $command = new MultiplyBy3Command(new Multiply());
        $commandTester = new CommandTester($command);

        $commandTester->execute([
            'number' => '3',
        ]);
        $output = $commandTester->getDisplay();
        $this->assertSame("3 * 3 = 9".PHP_EOL, $output);
    }
}
