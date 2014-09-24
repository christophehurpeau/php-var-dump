<?php
namespace VarDump\Dumpers;

use VarDump\Style\Style;

class NumericDumper extends AbstractDumper
{
    /**
     * Dump a numeric into a string
     *
     * @param mixed value
     * @param int the depth of this call
     * @return string
     */
    public function dump($value, $currentDepth)
    {
        return $this->style($value, Style::NUMERIC_VALUE);
    }
}
