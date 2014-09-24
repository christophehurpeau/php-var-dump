<?php
namespace VarDump\Style;

interface Style
{
    const WRAPPER = 'wrapper';
    const EMPTY_LABEL = 'empty';
    const ARRAY_SIZE = 'arraySize';
    const INDENTATION_LINE = 'indentationLine';
    const ARRAY_MORE_DATA = 'arrayMoreData';
    const ARRAY_LABEL = 'arrayLabel';
    const BOOLEAN_VALUE = 'booleanValue';
    const FLOAT_VALUE = 'floatValue';
    const NUMERIC_VALUE = 'numericValue';
    const NULL_VALUE = 'nullValue';
    const OBJECT_LABEL = 'objectLabel';
    const CLASS_VALUE = 'classValue';
    const STRING_VALUE = 'stringValue';
    const STRING_ENCODING = 'stringEncoding';

    /**
     * @param string $styleKey
     * @return string
     */
    function get($styleKey);
}
