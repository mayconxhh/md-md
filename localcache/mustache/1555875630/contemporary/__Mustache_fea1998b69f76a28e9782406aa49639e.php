<?php

class __Mustache_fea1998b69f76a28e9782406aa49639e extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $blocksContext = array();

        $value = $this->resolveValue($context->find('subject'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';

        return $buffer;
    }
}
