<?php

namespace Tests;

use App\Multiply;
use App\MultiplyBy69Command;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * @group integration
 */
class MultiplyBy69CommandTest extends TestCase
{
  public function testExecute()
  {
     $command = new MultiplyBy69Command(new Multiply());
     $commandTester = new CommandTester($command);

     $commandTester->execute([
         'number' => '69',
     ]);
     $output = $commandTester->getDisplay();
     $this->assertSame("69 * 69 = 4761".PHP_EOL, $output);
   }
}
