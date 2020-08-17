<?php

namespace Henrique\PrimeiraPreferencia\Models;

use Henrique\PrimeiroModulo\Console\Command\TestCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestPreference extends TestCommand
{
    protected function execute (InputInterface $input, OutputInterface $output) 
    {
        $output->writeln("Olá Henrique!");
        $output->writeln($this->formatText('<', '>'));
    }
}