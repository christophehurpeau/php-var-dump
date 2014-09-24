<?php
namespace VarDump\Style;

class ArrayStyle implements Style
{
    /**
     * @var string[]
     */
    private $array;

    /**
     * @var array $array
     */
    public function __construct($array)
    {
        $this->array = $array;
    }

    /**
     * @param string $styleKey
     * @return string
     */
    public function get($styleKey)
    {
        if (!isset($this->array[$styleKey])) {
            return \Exception('The style for the key "' . $styleKey . '" is not defined');
        }
        return $this->array[$styleKey];
    }
}
