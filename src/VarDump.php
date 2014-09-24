<?php
namespace VarDump;

use VarDump\Formatters\Formatter;

class VarDump
{
    /**
     * @var Formatter
     */
    private $formatter;

    /**
     * @var int
     */
    private $maxDepth;

    /**
     * @param Formatter $formatter
     */
    public function __construct(Formatter $formatter, $maxDepth = 4)
    {
        $this->formatter = $formatter;
        $this->maxDepth = $maxDepth;
        $this->objectDumper = new Dumpers\ObjectDumper($this);
        $this->resourceDumper = new Dumpers\ResourceDumper($this);
        $this->arrayDumper = new Dumpers\ArrayDumper($this);
        $this->stringDumper = new Dumpers\StringDumper($this);
        $this->floatDumper = new Dumpers\FloatDumper($this);
        $this->numericDumper = new Dumpers\NumericDumper($this);
        $this->booleanDumper = new Dumpers\BooleanDumper($this);
        $this->nullDumper = new Dumpers\NullDumper($this);
    }

    /**
     * @return Formatter
     */
    public function getFormatter()
    {
        return $this->formatter;
    }

    /**
     * @return int
     */
    public function getMaxDepth()
    {
        return $this->maxDepth;
    }

    /**
     * Dump a value into a string
     *
     * @param mixed value
     * @return string
     */

    public function dump($value) {
        return $this->formatter->start()
            . $this->dumpValue($value, 0)
            . $this->formatter->ending();
    }

    /**
     * Dump a value into a string
     *
     * @param mixed value
     * @return string
     */
    public function dumpValue($value, $currentDepth) {
        if (is_object($value)) {
            return $this->objectDumper->dump($value, $currentDepth);
        } else if (is_resource($value)) {
            return $this->ressourceDumper->dump($value, $currentDepth);
        } else if (is_array($value)) {
            return $this->arrayDumper->dump($value, $currentDepth);
        } else if (is_string($value)) {
            return $this->stringDumper->dump($value, $currentDepth);
        } else if (is_float($value)) {
            return $this->floatDumper->dump($value, $currentDepth);
        } else if (is_numeric($value)) {
            return $this->numericDumper->dump($value, $currentDepth);
        } else if (is_bool($value)) {
            return $this->booleanDumper->dump($value, $currentDepth);
        } else if (is_null($value)) {
            return $this->nullDumper->dump($value, $currentDepth);
        } else {
            return 'UNKNOWN : ' . print_r($value, true);
        }
    }
}
