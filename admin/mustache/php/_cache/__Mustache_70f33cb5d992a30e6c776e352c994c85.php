<?php

class __Mustache_70f33cb5d992a30e6c776e352c994c85 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<head>';
        $buffer .= "\n";
        $buffer .= $indent . '	<meta charset="utf-8" />';
        $buffer .= "\n";
        $buffer .= $indent . '	<title>';
        $value = $this->resolveValue($context->findDot('page.title'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= ' - ';
        $value = $this->resolveValue($context->findDot('site.title'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= '</title>';
        $buffer .= "\n";
        $buffer .= $indent . '	<meta name="description" content="';
        $value = $this->resolveValue($context->findDot('page.description'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= '" />';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<meta name="viewport" content="width=device-width, initial-scale=1.0" />';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<!-- basic styles -->';
        $buffer .= "\n";
        $buffer .= $indent . '	<link href="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/css/bootstrap.min.css" rel="stylesheet" />';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<link rel="stylesheet" href="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/css/font-awesome.min.css" />';
        $buffer .= "\n";
        $buffer .= $indent . '	<!--[if IE 7]>';
        $buffer .= "\n";
        $buffer .= $indent . '	  <link rel="stylesheet" href="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/css/font-awesome-ie7.min.css" />';
        $buffer .= "\n";
        $buffer .= $indent . '	<![endif]-->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<!-- page specific plugin styles -->';
        $buffer .= "\n";
        // 'page.styles' section
        $buffer .= $this->section03ebb48715a7e5bf49db7050ed1be8d7($context, $indent, $context->findDot('page.styles'));
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '	<!-- fonts -->';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('layout._template.fonts')) {
            $buffer .= $partial->renderInternal($context, '	');
        }
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '	<!-- ace styles -->';
        $buffer .= "\n";
        $buffer .= $indent . '	<link rel="stylesheet" href="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/css/ace.min.css" />';
        $buffer .= "\n";
        $buffer .= $indent . '	<link rel="stylesheet" href="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/css/ace-rtl.min.css" />';
        $buffer .= "\n";
        $buffer .= $indent . '	<link rel="stylesheet" href="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/css/ace-skins.min.css" />';
        $buffer .= "\n";
        $buffer .= $indent . '	<!--[if lte IE 8]>';
        $buffer .= "\n";
        $buffer .= $indent . '	  <link rel="stylesheet" href="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/css/ace-ie.min.css" />';
        $buffer .= "\n";
        $buffer .= $indent . '	<![endif]-->';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '	<!-- inline styles related to this page -->';
        $buffer .= "\n";
        // 'page.inline_styles' section
        $buffer .= $this->section8ca2b22c9fbde6cf7c2a16803ba2e695($context, $indent, $context->findDot('page.inline_styles'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<!-- ace settings handler -->';
        $buffer .= "\n";
        $buffer .= $indent . '	<script src="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/js/ace-extra.min.js"></script>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->';
        $buffer .= "\n";
        $buffer .= $indent . '	<!--[if lt IE 9]>';
        $buffer .= "\n";
        $buffer .= $indent . '	<script src="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/js/html5shiv.js"></script>';
        $buffer .= "\n";
        $buffer .= $indent . '	<script src="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/js/respond.min.js"></script>';
        $buffer .= "\n";
        $buffer .= $indent . '	<![endif]-->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '</head>';
        $buffer .= "\n";

        return $buffer;
    }

    private function section03ebb48715a7e5bf49db7050ed1be8d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<link rel="stylesheet" href="{{{path.assets}}}/css/{{{.}}}" />
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	<link rel="stylesheet" href="';
                $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
                $buffer .= $value;
                $buffer .= '/css/';
                $value = $this->resolveValue($context->last(), $context, $indent);
                $buffer .= $value;
                $buffer .= '" />';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ca2b22c9fbde6cf7c2a16803ba2e695(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<style>
	{{{page.inline_styles}}}
	</style>
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	<style>';
                $buffer .= "\n";
                $buffer .= $indent . '	';
                $value = $this->resolveValue($context->findDot('page.inline_styles'), $context, $indent);
                $buffer .= $value;
                $buffer .= '';
                $buffer .= "\n";
                $buffer .= $indent . '	</style>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
