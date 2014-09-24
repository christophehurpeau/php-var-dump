<?php
namespace VarDump\Dumpers;

use VarDump\VarDump;
use VarDump\Style\Style;

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
     * @param int $depth
     * @return string
     */
    public function indent($depth) {
        return str_repeat($this->style('| ', Style::INDENTATION_LINE), $depth);
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
    public function style($content, $styleKey) {
        return $this->varDump->getFormatter()->style($content, $styleKey);
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
