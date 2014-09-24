<?php
namespace VarDump\Formatters;

interface Formatter
{

    /**
     * @return string
     */
    function newLine();

    /**
     * @param string
     * @param string
     * @return string
     */
    function color($content, $color);
}
