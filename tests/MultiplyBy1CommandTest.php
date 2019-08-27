<?php

namespace Tests;

use App\Multiply;
use App\MultiplyBy5Command;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * @group integration
 */
class MultiplyBy1CommandTest extends TestCase
{
  public function testExecute()
  {
     $command = new MultiplyBy1Command(new Multiply());
     $commandTester = new CommandTester($command);

     $commandTester->execute([
         'number' => '1',
     ]);
     $output = $commandTester->getDisplay();
     $this->assertSame("1 * 1 = 1\n", $output);
   }
}
