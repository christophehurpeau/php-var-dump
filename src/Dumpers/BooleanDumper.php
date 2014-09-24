<?php
namespace VarDump\Dumpers;

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
        return $this->color($value ? 'true' : 'false', '93C763;font-weight:bold');
    }
}
