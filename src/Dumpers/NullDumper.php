<?php
namespace VarDump\Dumpers;

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
        return $this->color('null', '93C763;font-weight:bold');
    }
}
