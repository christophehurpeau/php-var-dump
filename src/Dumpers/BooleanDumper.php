<?php
namespace VarDump\Dumpers;

use VarDump\Style\Style;

class BooleanDumper extends AbstractDumper
{
    /**
     * Dump a boolean into a string
     *
     * @param mixed value
     * @param int the depth of this call
     * @return string
     */
    public function dump($value, $currentDepth)
    {
        return $this->color($value ? 'true' : 'false', Style::BOOLEAN_VALUE);
    }
}
