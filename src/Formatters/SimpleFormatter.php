<?php
namespace VarDump\Formatters;

class HtmlFormatter implements Formatter
{

    /**
     * @return string
     */
    public function newLine()
    {
        return "\n";
    }

    /**
     * @param string
     * @param string
     * @return string
     */
    public function color($content, $color)
    {
        return $content;
    }
}
