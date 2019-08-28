<?php
namespace Tests;
use App\Multiply;
use App\MultiplyBy10Command;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;
/**
 * @group integration
 */
class MultiplyBy10CommandTest extends TestCase
{
    public function testExecute()
    {
        $command = new MultiplyBy10Command(new Multiply());
        $commandTester = new CommandTester($command);
        $commandTester->execute([
            'number' => '5',
        ]);
        $output = $commandTester->getDisplay();
        $this->assertSame("5 * 10 = 50".PHP_EOL, $output);
    }
}
