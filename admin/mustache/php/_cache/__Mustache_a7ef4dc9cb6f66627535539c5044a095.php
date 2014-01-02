<?php

class __Mustache_a7ef4dc9cb6f66627535539c5044a095 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'site.remote_fonts' section
        $buffer .= $this->section4367b095f262954232116cc06602eaf2($context, $indent, $context->findDot('site.remote_fonts'));
        // 'site.remote_fonts' inverted section
        $value = $context->findDot('site.remote_fonts');
        if (empty($value)) {
            
            $buffer .= $indent . ' <link rel="stylesheet" href="';
            $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
            $buffer .= $value;
            $buffer .= '/css/ace-fonts.css" />';
            $buffer .= "\n";
        }

        return $buffer;
    }

    private function section4367b095f262954232116cc06602eaf2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
 <link rel="stylesheet" href="{{{site.protocol}}}//fonts.googleapis.com/css?family=Open+Sans:400,300" />
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . ' <link rel="stylesheet" href="';
                $value = $this->resolveValue($context->findDot('site.protocol'), $context, $indent);
                $buffer .= $value;
                $buffer .= '//fonts.googleapis.com/css?family=Open+Sans:400,300" />';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
