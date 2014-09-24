<?php
namespace VarDump\Formatters;

class HtmlFormatter implements Formatter
{

    /**
     * @return string
     */
    public function newLine()
    {
        return "<br/>"/* without \n */;
    }

    /**
     * @param string
     * @param string
     * @return string
     */
    public function color($content, $color)
    {
        $str = htmlentities($content, ENT_QUOTES|ENT_SUBSTITUTE, 'UTF-8', true);
        return '<span style="color:#' . $color . ';">' . $str . '</span>';
    }
}
