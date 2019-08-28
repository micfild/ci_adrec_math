<?php

namespace Tests;

use App\Multiply;
use App\MultiplyBy9Command;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * @group integration
 */
class MultiplyBy9CommandTest extends TestCase
{
  public function testExecute()
  {
     $command = new MultiplyBy9Command(new Multiply());
     $commandTester = new CommandTester($command);

     $commandTester->execute([
         'number' => '4',
     ]);
     $output = $commandTester->getDisplay();
     $this->assertSame("4 * 9 = 36".PHP_EOL, $output);
   }
}
