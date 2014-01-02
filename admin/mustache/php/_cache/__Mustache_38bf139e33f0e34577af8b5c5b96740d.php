<?php

class __Mustache_38bf139e33f0e34577af8b5c5b96740d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<!-- basic scripts -->';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('layout._template.jquery')) {
            $buffer .= $partial->renderInternal($context, '');
        }
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<script src="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/js/bootstrap.min.js"></script>';
        $buffer .= "\n";
        $buffer .= $indent . '<script src="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/js/typeahead-bs2.min.js"></script>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- page specific plugin scripts -->';
        $buffer .= "\n";
        // 'page.ie_scripts' section
        $buffer .= $this->sectionD1bea1300a91f8955474d723b0ca3fa9($context, $indent, $context->findDot('page.ie_scripts'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        // 'page.scripts' section
        $buffer .= $this->sectionF3807ae2748cd4c0767304a59de4fc36($context, $indent, $context->findDot('page.scripts'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- ace scripts -->';
        $buffer .= "\n";
        $buffer .= $indent . '<script src="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/js/ace-elements.min.js"></script>';
        $buffer .= "\n";
        $buffer .= $indent . '<script src="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/js/ace.min.js"></script>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- inline scripts related to this page -->';
        $buffer .= "\n";
        // 'page.inline_scripts' section
        $buffer .= $this->section458013a5eeea0061124ccd780977da71($context, $indent, $context->findDot('page.inline_scripts'));

        return $buffer;
    }

    private function sectionD1bea1300a91f8955474d723b0ca3fa9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<!--[if lte IE {{version}}]>
  <script src="{{{path.assets}}}/js/{{{file_name}}}"></script>
<![endif]-->
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<!--[if lte IE ';
                $value = $this->resolveValue($context->find('version'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= ']>';
                $buffer .= "\n";
                $buffer .= $indent . '  <script src="';
                $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
                $buffer .= $value;
                $buffer .= '/js/';
                $value = $this->resolveValue($context->find('file_name'), $context, $indent);
                $buffer .= $value;
                $buffer .= '"></script>';
                $buffer .= "\n";
                $buffer .= $indent . '<![endif]-->';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF3807ae2748cd4c0767304a59de4fc36(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<script src="{{{path.assets}}}/js/{{{.}}}"></script>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<script src="';
                $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
                $buffer .= $value;
                $buffer .= '/js/';
                $value = $this->resolveValue($context->last(), $context, $indent);
                $buffer .= $value;
                $buffer .= '"></script>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section458013a5eeea0061124ccd780977da71(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<script type="text/javascript">
{{{page.inline_scripts}}}
</script>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<script type="text/javascript">';
                $buffer .= "\n";
                $value = $this->resolveValue($context->findDot('page.inline_scripts'), $context, $indent);
                $buffer .= $indent . $value;
                $buffer .= '';
                $buffer .= "\n";
                $buffer .= $indent . '</script>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
