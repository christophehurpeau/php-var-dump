<?php
namespace VarDump\Dumpers;

interface Dumper
{

    /**
     * Dump a value into a string
     *
     * @param mixed value
     * @param int the depth of this call
     * @return string
     */
    function dump($value, $currentDepth);
}
