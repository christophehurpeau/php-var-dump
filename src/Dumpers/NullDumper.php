<?php
namespace VarDump\Dumpers;

use VarDump\Style\Style;

class NullDumper extends AbstractDumper
{
    /**
     * Dump a null into a string
     *
     * @param mixed value
     * @param int the depth of this call
     * @return string
     */
    public function dump($value, $currentDepth)
    {
        return $this->style('null', Style::NULL_VALUE);
    }
}
