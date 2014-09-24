<?php
namespace VarDump\Formatters;

use VarDump\Style\Style;

class HtmlFormatter implements Formatter
{
    /**
     * @var Style
     */
    private $style;

    /**
     * @param Style $style
     */
    public function __construct(Style $style = null) {
        if ($style === null) {
            $style = new \VarDump\Style\DefaultStyle();
        }
        $this->style = $style;
    }

    /**
     * @return string
     */
    public function newLine()
    {
        return "<br/>"/* without \n */;
    }

    /**
     * @param string $content
     * @param string $styleKey
     * @return string
     */
    public function style($content, $styleKey)
    {
        $str = htmlentities($content, ENT_QUOTES|ENT_SUBSTITUTE, 'UTF-8', true);
        return '<span style="' . $this->style->get($styleKey) . '">' . $str . '</span>';
    }

    /**
     * @return string
     */
    public function start() {
        return '<pre style="' . $this->style->get(Style::WRAPPER) . '">';
    }

    /**
     * @return string
     */
    public function ending() {
        return '</pre>';
    }
}
