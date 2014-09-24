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
     * @param string $content
     * @param string $styleKey
     * @return string
     */
    public function style($content, $styleKey)
    {
        return $content;
    }

    /**
     * @return string
     */
    public function start() {
        return '';
    }

    /**
     * @return string
     */
    public function ending() {
        return '';
    }
}
