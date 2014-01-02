<?php

class __Mustache_077c0f3e347af44bbee81cce24e82ca2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="breadcrumbs" id="breadcrumbs">';
        $buffer .= "\n";
        $buffer .= $indent . '	<script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . '	try{ace.settings.check(\'breadcrumbs\' , \'fixed\')}catch(e){}';
        $buffer .= "\n";
        $buffer .= $indent . '	</script>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<ul class="breadcrumb">';
        $buffer .= "\n";
        $buffer .= $indent . '		<li><i class="icon-home home-icon"></i> <a href="#">Home</a></li>';
        $buffer .= "\n";
        // 'breadcrumbs.links' section
        $buffer .= $this->section7017aed8bdbb0eea7b883ffad94c2f7d($context, $indent, $context->findDot('breadcrumbs.links'));
        $buffer .= $indent . '		<li class="active">';
        $value = $this->resolveValue($context->findDot('breadcrumbs.title'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= '</li>';
        $buffer .= "\n";
        $buffer .= $indent . '	</ul><!--.breadcrumb-->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="nav-search" id="nav-search">';
        $buffer .= "\n";
        $buffer .= $indent . '		<form class="form-search">';
        $buffer .= "\n";
        $buffer .= $indent . '			<span class="input-icon">';
        $buffer .= "\n";
        $buffer .= $indent . '				<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />';
        $buffer .= "\n";
        $buffer .= $indent . '				<i class="icon-search nav-search-icon"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '			</span>';
        $buffer .= "\n";
        $buffer .= $indent . '		</form>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div><!--#nav-search-->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section7017aed8bdbb0eea7b883ffad94c2f7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<li><a href="{{link}}">{{title}}</a></li>
		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '		<li><a href="';
                $value = $this->resolveValue($context->find('link'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '">';
                $value = $this->resolveValue($context->find('title'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</a></li>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
