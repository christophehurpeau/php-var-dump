<?php
namespace VarDump\Dumpers;

use VarDump\VarDump;

abstract class AbstractDumper implements Dumper
{
    /**
     * @var VarDump
     */
    protected $varDump;

    /**
     * @param VarDump $varDump
     */
    public function __construct(VarDump $varDump) {
        $this->varDump = $varDump;
    }

    /**
     * @return string
     */
    public function newLine() {
        return $this->varDump->getFormatter()->newLine();
    }

    /**
     * @param string
     * @param string
     * @return string
     */
    public function color($content, $color) {
        return $this->varDump->getFormatter()->color($content, $color);
    }

    /**
     * @param string
     * @param string
     * @return string
     */
    public function dumpValue($value, $currentDepth) {
        return $this->varDump->dumpValue($value, $currentDepth);
    }
}
