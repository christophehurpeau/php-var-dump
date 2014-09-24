<?php
namespace VarDump\Dumpers;

class ResourceDumper extends AbstractDumper
{
    /**
     * Dump a ressource into a string
     *
     * @param mixed value
     * @param int the depth of this call
     * @return string
     */
    public function dump($value, $currentDepth)
    {
        return '[resource]';
    }
}
