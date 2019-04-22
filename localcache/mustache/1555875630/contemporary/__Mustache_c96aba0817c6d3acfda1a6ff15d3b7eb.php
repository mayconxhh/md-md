<?php

class __Mustache_c96aba0817c6d3acfda1a6ff15d3b7eb extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $blocksContext = array();

        $value = $this->resolveValue($context->find('body'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';

        return $buffer;
    }
}
