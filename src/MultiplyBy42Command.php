<?php


namespace App;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MultiplyBy42Command extends Command
{

    /** @var Multiply **/
    private $multiply;

    public function __construct(Multiply $multiply)
    {
        $this->multiply = $multiply;
        parent::__construct('multiply:42');
    }

    /** {@inheritdoc} **/
    protected function configure()
    {
        $this
            ->setDescription('Multiply two number.')
            ->addArgument('number', InputArgument::REQUIRED);
    }

    /** {@inheritdoc} **/
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $arg = $input->getArgument('number');
        $output->writeln(
            $arg." * 42 = ".$this->multiply->multiplyBy42($arg)
        );
    }
}