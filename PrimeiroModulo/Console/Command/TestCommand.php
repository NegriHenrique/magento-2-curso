<?php

namespace Henrique\PrimeiroModulo\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends Command
{

    protected function configure () 
    {
        $this->setName("henrique:teste")
            ->setDescription("Primeiro comando de testes");

        parent::configure();
    }

    
    protected function execute (InputInterface $input, OutputInterface $output) 
    {
        $output->writeln("Olá Mundo!");
        $output->writeln($this->formatText('<', '>'));
    }

    public function formatText ($prefix, $suffix) 
    {
        return $prefix . "SOME TEXT" . $suffix;
    }
}