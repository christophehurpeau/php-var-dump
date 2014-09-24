<?php
namespace VarDump\Style;

class DefaultStyle extends ArrayStyle
{
    public function __construct() {
        parent::__construct(array(
            Style::WRAPPER => 'background:#1A1A1A;color:#FCFCFC;overflow:auto;padding:1px 2px;position:relative;',
            Style::EMPTY_LABEL => 'color:#FFF;font-weight:bold',
            Style::ARRAY_SIZE => 'color:#AAA',
            Style::INDENTATION_LINE => 'color:#333',
            Style::ARRAY_MORE_DATA => 'color:#FFF',
            Style::ARRAY_LABEL => 'color:#BD74BE',
            Style::BOOLEAN_VALUE => 'color:#93C763;font-weight:bold',
            Style::FLOAT_VALUE => 'color:#FFCD22',
            Style::NUMERIC_VALUE => 'color:#FFCD22',
            Style::NULL_VALUE => 'color:#93C763;font-weight:bold',
            Style::OBJECT_LABEL => 'color:#BD74BE',
            Style::CLASS_VALUE => 'color:#BD74BE;font-weight:bold',
            Style::STRING_VALUE => 'color:#EC7600',
            Style::STRING_ENCODING => 'color:#f2a04d',
        ));
    }
}
