<?php


namespace Tests;


use App\Multiply;
use App\MultiplyBy16Command;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * @group integration
 */
class MultiplyBy16CommandTest extends TestCase
{
    public function testExecute()
    {
        $command = new MultiplyBy16Command(new Multiply());
        $commandTester = new CommandTester($command);

        $commandTester->execute([
            'number' => '5',
        ]);
        $output = $commandTester->getDisplay();
        $this->assertSame("5 * 16 = 80\n", $output);
    }
}
