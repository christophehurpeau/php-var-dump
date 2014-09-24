<?php
namespace VarDump\Dumpers;

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
            $res = $this->color('empty', 'FFF;font-weight:bold');
        } else {
            $count = count($value);
            $res = $this->color('size=' . $count, 'AAA');
            if ($count > 100) {
                $res .= ' (> 100)';
                $value = array_slice($value, 0, 100, true);
            }
        }
        if ($currentDepth < $this->varDump->getMaxDepth()) {
            $res .= $this->newLine();
            foreach ($value as $k => &$v) {
                $res .= str_repeat($this->color('| ', '333'), $currentDepth+1)
                        ./*$this->color($k,'6BCEDE')*/
                         $this->dumpValue($k, $currentDepth)
                        . ' => ' . $this->dumpValue($v, $currentDepth+1)
                        . $this->newLine();
            }
            if ($count > 100) {
                $res .= str_repeat($this->color('| ', '333'), $currentDepth+1)
                        . $this->color('And more...','FFF')
                        . $this->newLine();
            }
            $res = rtrim($res);
        }
        return $this->color('Array: ','BD74BE') . $res;
    }
}
