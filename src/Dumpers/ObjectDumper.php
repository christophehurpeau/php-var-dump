<?php
namespace VarDump\Dumpers;

use VarDump\Style\Style;

class ObjectDumper extends AbstractDumper
{
    private $objects = array();

    /**
     * Dump an object into a string
     *
     * @param mixed value
     * @param int the depth of this call
     * @return string
     */
    public function dump($value, $currentDepth)
    {
        $id = array_search($value, $this->objects, true);
        $found = $id !== false;
        if (!$found) {
            $id = array_push($this->objects, $value);
        } else {
            $id++;
        }
        $res = $this->style("Object #" . $id . ":", Style::OBJECT_LABEL) . $this->style(get_class($value), Style::CLASS_VALUE);

        if ($found === false && $currentDepth < $this->varDump->getMaxDepth()){
            $objectVars = get_object_vars($value);
            if (!empty($objectVars)) {
                $res .= $this->newLine();
            }

            foreach ($objectVars as $key => &$value) {
                $res .= $this->indent($currentDepth+1)
                        . $key . '= ' . $this->dumpValue($value, $currentDepth+1)
                        . $this->newLine();
            }
        }
        return $res;
    }
}
