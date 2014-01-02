<?php

class __Mustache_e60031fe205982d882c0d3e33ebe8cc1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'site.remote_jquery' section
        $buffer .= $this->section5a22052c8d2305be3232099b1d34c9c1($context, $indent, $context->findDot('site.remote_jquery'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<!--[if !IE]> -->';
        $buffer .= "\n";
        $buffer .= $indent . '<script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . ' window.jQuery || document.write("<script src=\'';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/js/jquery-2.0.3.min.js\'>"+"<"+"/script>");';
        $buffer .= "\n";
        $buffer .= $indent . '</script>';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- <![endif]-->';
        $buffer .= "\n";
        $buffer .= $indent . '<!--[if IE]>';
        $buffer .= "\n";
        $buffer .= $indent . '<script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . ' window.jQuery || document.write("<script src=\'';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/js/jquery-1.10.2.min.js\'>"+"<"+"/script>");';
        $buffer .= "\n";
        $buffer .= $indent . '</script>';
        $buffer .= "\n";
        $buffer .= $indent . '<![endif]-->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . '	if("ontouchend" in document) document.write("<script src=\'';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/js/jquery.mobile.custom.min.js\'>"+"<"+"/script>");';
        $buffer .= "\n";
        $buffer .= $indent . '</script>';
        $buffer .= "\n";

        return $buffer;
    }

    private function section5a22052c8d2305be3232099b1d34c9c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<!--[if !IE]> -->
<script src="{{{site.protocol}}}//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<!-- <![endif]-->
<!--[if IE]>
<script src="{{{site.protocol}}}//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<!--[if !IE]> -->';
                $buffer .= "\n";
                $buffer .= $indent . '<script src="';
                $value = $this->resolveValue($context->findDot('site.protocol'), $context, $indent);
                $buffer .= $value;
                $buffer .= '//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>';
                $buffer .= "\n";
                $buffer .= $indent . '<!-- <![endif]-->';
                $buffer .= "\n";
                $buffer .= $indent . '<!--[if IE]>';
                $buffer .= "\n";
                $buffer .= $indent . '<script src="';
                $value = $this->resolveValue($context->findDot('site.protocol'), $context, $indent);
                $buffer .= $value;
                $buffer .= '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>';
                $buffer .= "\n";
                $buffer .= $indent . '<![endif]-->';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
