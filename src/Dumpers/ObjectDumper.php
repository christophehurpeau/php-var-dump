<?php
namespace VarDump\Dumpers;

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
        $id = array_search($value, $this->_objects, true);
        $found = $id !== false;
        if (!$found) {
            $id = array_push($this->_objects, $value);
        } else {
            $id++;
        }
        $res = $this->color("Object #" . $id . ":", 'BD74BE') . $this->color(get_class($value), 'BD74BE;font-weight:bold');

        if ($found === false && $currentDepth < $this->varDump->getMaxDepth()){
            $objectVars = get_object_vars($value);
            if (!empty($objectVars)) {
                $res .= $this->newLine();
            }

            foreach ($objectVars as $key => &$value) {
                $res .= str_repeat($this->color('| ','666'), $currentDepth+1)
                        . $key . '= ' . $this->dumpValue($value, $currentDepth+1)
                        . $this->newLine();
            }
        }
        return $res;
    }
}
