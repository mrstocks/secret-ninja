<?php

class __Mustache_e3e19ae91f6634dd1e828fa1208ee4d1 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '?page=';
        $value = $this->resolveValue($context->find('link'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');

        return $buffer;
    }
}
