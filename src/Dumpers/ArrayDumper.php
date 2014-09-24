<?php
namespace VarDump\Dumpers;

use VarDump\Style\Style;

class ArrayDumper extends AbstractDumper
{
    /**
     * Dump an array into a string
     *
     * @param mixed value
     * @param int the depth of this call
     * @return string
     */
    public function dump($value, $currentDepth)
    {
        reset($value);
        if (empty($value)) {
            $count = 0;
            $res = $this->style('empty', Style::EMPTY_LABEL);
        } else {
            $count = count($value);
            $res = $this->style('size=' . $count, Style::ARRAY_SIZE);
            if ($count > 100) {
                $res .= ' (> 100)';
                $value = array_slice($value, 0, 100, true);
            }
        }
        if ($currentDepth < $this->varDump->getMaxDepth()) {
            $res .= $this->newLine();
            foreach ($value as $k => &$v) {
                $res .= $this->indent($currentDepth+1)
                        . $this->dumpValue($k, $currentDepth)
                        . ' => ' . $this->dumpValue($v, $currentDepth+1)
                        . $this->newLine();
            }
            if ($count > 100) {
                $res .= $this->indent($currentDepth+1)
                        . $this->style('And more...', Style::ARRAY_MORE_DATA)
                        . $this->newLine();
            }
            $res = rtrim($res);
        }
        return $this->style('Array: ', Style::ARRAY_LABEL) . $res;
    }
}
