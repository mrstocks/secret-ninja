<?php

class __Mustache_0caf62c0ae42a07b26e7bd68bcbd2a70 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<ul id="tasks" class="item-list">';
        $buffer .= "\n";
        // 'page.tasks' section
        $buffer .= $this->section9c70f34163a97ed66299b56eb1f06a64($context, $indent, $context->findDot('page.tasks'));
        $buffer .= $indent . '</ul>';

        return $buffer;
    }

    private function section91f123b8467f1d28f105e647e0d3bb74(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="{{progress}}">
			<span class="percent">{{progress}}</span>%
		</div>
		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '		<div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="';
                $value = $this->resolveValue($context->find('progress'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '			<span class="percent">';
                $value = $this->resolveValue($context->find('progress'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</span>%';
                $buffer .= "\n";
                $buffer .= $indent . '		</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC0967fe0e3e27705b3de15d4da277109(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<div class="pull-right action-buttons">
			<a href="#" class="blue"><i class="icon-pencil bigger-130"></i></a>
			<span class="vbar"></span>
			<a href="#" class="red"><i class="icon-trash bigger-130"></i></a>
			<span class="vbar"></span>
			<a href="#" class="green"><i class="icon-flag bigger-130"></i></a>
		</div>
		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '		<div class="pull-right action-buttons">';
                $buffer .= "\n";
                $buffer .= $indent . '			<a href="#" class="blue"><i class="icon-pencil bigger-130"></i></a>';
                $buffer .= "\n";
                $buffer .= $indent . '			<span class="vbar"></span>';
                $buffer .= "\n";
                $buffer .= $indent . '			<a href="#" class="red"><i class="icon-trash bigger-130"></i></a>';
                $buffer .= "\n";
                $buffer .= $indent . '			<span class="vbar"></span>';
                $buffer .= "\n";
                $buffer .= $indent . '			<a href="#" class="green"><i class="icon-flag bigger-130"></i></a>';
                $buffer .= "\n";
                $buffer .= $indent . '		</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAcf3a48a06f1ad71bf878dfb1f4ea834(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<div class="inline pull-right position-relative dropdown-hover">
			<button class="btn btn-minier bigger btn-primary"><i class="icon-cog icon-only bigger-120"></i></button>
			<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-caret dropdown-close pull-right">
				<li><a href="#" class="tooltip-success" data-rel="tooltip" title="Mark&nbsp;as&nbsp;done"><span class="green"><i class="icon-ok bigger-110"></i></span></a></li>
				<li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete"><span class="red"><i class="icon-trash bigger-110"></i></span></a></li>
			</ul>
		</div>
		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '		<div class="inline pull-right position-relative dropdown-hover">';
                $buffer .= "\n";
                $buffer .= $indent . '			<button class="btn btn-minier bigger btn-primary"><i class="icon-cog icon-only bigger-120"></i></button>';
                $buffer .= "\n";
                $buffer .= $indent . '			<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-caret dropdown-close pull-right">';
                $buffer .= "\n";
                $buffer .= $indent . '				<li><a href="#" class="tooltip-success" data-rel="tooltip" title="Mark&nbsp;as&nbsp;done"><span class="green"><i class="icon-ok bigger-110"></i></span></a></li>';
                $buffer .= "\n";
                $buffer .= $indent . '				<li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete"><span class="red"><i class="icon-trash bigger-110"></i></span></a></li>';
                $buffer .= "\n";
                $buffer .= $indent . '			</ul>';
                $buffer .= "\n";
                $buffer .= $indent . '		</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c70f34163a97ed66299b56eb1f06a64(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<li class="item-{{color}} clearfix">
		<label class="inline"><input type="checkbox" class="ace" /><span class="lbl"> {{title}}</span></label>
		{{#progress}}
		<div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="{{progress}}">
			<span class="percent">{{progress}}</span>%
		</div>
		{{/progress}}
		{{#toolbar}}
		<div class="pull-right action-buttons">
			<a href="#" class="blue"><i class="icon-pencil bigger-130"></i></a>
			<span class="vbar"></span>
			<a href="#" class="red"><i class="icon-trash bigger-130"></i></a>
			<span class="vbar"></span>
			<a href="#" class="green"><i class="icon-flag bigger-130"></i></a>
		</div>
		{{/toolbar}}
		{{#menu}}
		<div class="inline pull-right position-relative dropdown-hover">
			<button class="btn btn-minier bigger btn-primary"><i class="icon-cog icon-only bigger-120"></i></button>
			<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-caret dropdown-close pull-right">
				<li><a href="#" class="tooltip-success" data-rel="tooltip" title="Mark&nbsp;as&nbsp;done"><span class="green"><i class="icon-ok bigger-110"></i></span></a></li>
				<li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete"><span class="red"><i class="icon-trash bigger-110"></i></span></a></li>
			</ul>
		</div>
		{{/menu}}
	</li>
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	<li class="item-';
                $value = $this->resolveValue($context->find('color'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= ' clearfix">';
                $buffer .= "\n";
                $buffer .= $indent . '		<label class="inline"><input type="checkbox" class="ace" /><span class="lbl"> ';
                $value = $this->resolveValue($context->find('title'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</span></label>';
                $buffer .= "\n";
                // 'progress' section
                $buffer .= $this->section91f123b8467f1d28f105e647e0d3bb74($context, $indent, $context->find('progress'));
                // 'toolbar' section
                $buffer .= $this->sectionC0967fe0e3e27705b3de15d4da277109($context, $indent, $context->find('toolbar'));
                // 'menu' section
                $buffer .= $this->sectionAcf3a48a06f1ad71bf878dfb1f4ea834($context, $indent, $context->find('menu'));
                $buffer .= $indent . '	</li>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
