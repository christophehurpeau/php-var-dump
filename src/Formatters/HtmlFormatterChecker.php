<?php
namespace VarDump\Formatters;

class HtmlFormatterChecker implements HtmlFormatter
{
    /**
     * @param string
     * @param string
     * @return string
     */
    public function color($content, $color)
    {
        $str = htmlentities($content, ENT_QUOTES|ENT_SUBSTITUTE, 'UTF-8', true);
        if (strpos($str,'�') !== false) {
            throw new \Exception('This string has a bad character in it : ' . $str);
        }
        return '<span style="color:#' . $color . ';">' . $str . '</span>';
    }
}
