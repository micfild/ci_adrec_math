<?php

namespace Tests;

use App\Multiply;
use App\MultiplyBy8Command;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * @group integration
 */
class MultiplyBy8CommandTest extends TestCase
{
  public function testExecute()
  {
     $command = new MultiplyBy8Command(new Multiply());
     $commandTester = new CommandTester($command);

     $commandTester->execute([
         'number' => '8',
     ]);
     $output = $commandTester->getDisplay();
     $this->assertSame("8 * 8 = 64".PHP_EOL, $output);
   }
}
