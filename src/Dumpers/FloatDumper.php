<?php
namespace VarDump\Dumpers;

use VarDump\Style\Style;

class FloatDumper extends AbstractDumper
{
    /**
     * Dump a float into a string
     *
     * @param mixed value
     * @param int the depth of this call
     * @return string
     */
    public function dump($value, $currentDepth)
    {
        return $this->style(strpos($value, '.') === false ? $value.'.0' : $value, Style::FLOAT_VALUE);
    }
}
