<?php

namespace Henrique\PrimeiroPlugin\Plugin;

class MeuPlugin 
{
    public function beforeFormatText(\Henrique\PrimeiroModulo\Console\Command\TestCommand $subject)
    {
        $prefix = '>>';
        $suffix = '<<';
        return [$prefix, $suffix];
    }

    public function afterFormatText(\Henrique\PrimeiroModulo\Console\Command\TestCommand $subject, $result, $prefix, $suffix)
    {
        $result = str_replace('>', "|", $result);
        $result = str_replace('<', "|", $result);
        return $result;
    }

    public function aroundFormatText(\Henrique\PrimeiroModulo\Console\Command\TestCommand $subject, callable $proceed, $prefix, $suffix)
    {
        $result = '@@@' . $proceed($prefix, $suffix);
        
        return $result;
    }
}