<?php
namespace VarDump\Formatters;

interface Formatter
{

    /**
     * @return string
     */
    function newLine();

    /**
     * @param string $content
     * @param string $styleKey
     * @return string
     */
    function style($content, $styleKey);

    /**
     * @return string
     */
    function start();

    /**
     * @return string
     */
    function ending();
}
