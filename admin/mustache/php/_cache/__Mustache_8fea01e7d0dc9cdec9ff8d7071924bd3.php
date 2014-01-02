<?php

class __Mustache_8fea01e7d0dc9cdec9ff8d7071924bd3 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<a class="menu-toggler" id="menu-toggler" href="#"><span class="menu-text"></span></a>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="sidebar" id="sidebar">';
        $buffer .= "\n";
        $buffer .= $indent . '	<script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . '	try{ace.settings.check(\'sidebar\' , \'fixed\')}catch(e){}';
        $buffer .= "\n";
        $buffer .= $indent . '	</script>';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('layout.sidenav.shortcuts')) {
            $buffer .= $partial->renderInternal($context, '	');
        }
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<ul class="nav nav-list">';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        // 'layout.sidenav_navList' section
        $buffer .= $this->section7cf8e9a33bdc71e85f74bc002f9ab2e8($context, $indent, $context->findDot('layout.sidenav_navList'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	</ul><!--/.nav-list-->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="sidebar-collapse" id="sidebar-collapse">';
        $buffer .= "\n";
        $buffer .= $indent . '		<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . '	try{ace.settings.check(\'sidebar\' , \'collapsed\')}catch(e){}';
        $buffer .= "\n";
        $buffer .= $indent . '	</script>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section7cf8e9a33bdc71e85f74bc002f9ab2e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			{{> layout.sidenav.items}}
		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('layout.sidenav.items')) {
                    $buffer .= $partial->renderInternal($context, '			');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
