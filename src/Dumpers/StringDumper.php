<?php
namespace VarDump\Dumpers;

use VarDump\Style\Style;

class StringDumper extends AbstractDumper
{
    /**
     * Dump an object into a string
     *
     * @param mixed value
     * @param int the depth of this call
     * @return string
     */
    public function dump($value, $currentDepth)
    {
        $str = $value;
        $enc = mb_detect_encoding($str, 'UTF-8, ISO-8859-15, ASCII, GBK');
        if($enc !== 'UTF-8') {
            $str = iconv($enc, 'UTF-8', $str);
        }
        return $this->style(var_export($str, true), Style::STRING_VALUE)
                 . ($enc !== 'UTF-8' ? $this->style('['.$enc.']', Style::STRING_ENCODING) : '');
    }
}
