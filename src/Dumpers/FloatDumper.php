<?php
namespace VarDump\Dumpers;

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
        return $this->color(strpos($value, '.') === false ? $value.'.0' : $value, 'FFCD22');
    }
}
