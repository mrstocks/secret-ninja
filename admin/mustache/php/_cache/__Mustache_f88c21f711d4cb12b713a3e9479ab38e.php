<?php

class __Mustache_f88c21f711d4cb12b713a3e9479ab38e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="comments">';
        $buffer .= "\n";
        // 'page.comments' section
        $buffer .= $this->sectionA17390a7b27357e5f28a16b05076dd6b($context, $indent, $context->findDot('page.comments'));
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="hr hr8"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="center">';
        $buffer .= "\n";
        $buffer .= $indent . '		<i class="icon-comments-alt icon-2x green"></i> &nbsp; <a href="#">See all comments &nbsp; <i class="icon-arrow-right"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="hr hr-double hr8"></div>';

        return $buffer;
    }

    private function section64b0a8acafacaaa2cb0aa97b71ad5488(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<div class="inline position-relative">
				<button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-angle-down icon-only bigger-120"></i></button>
				<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
					<li><a href="#" class="tooltip-success" data-rel="tooltip" title="Approve"><span class="green"><i class="icon-ok bigger-110"></i></span></a></li>
					<li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject"><span class="orange"><i class="icon-remove bigger-110"></i></span> </a></li>
					<li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete"><span class="red"><i class="icon-trash bigger-110"></i></span> </a></li>
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
                $buffer .= $indent . '			<div class="inline position-relative">';
                $buffer .= "\n";
                $buffer .= $indent . '				<button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-angle-down icon-only bigger-120"></i></button>';
                $buffer .= "\n";
                $buffer .= $indent . '				<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">';
                $buffer .= "\n";
                $buffer .= $indent . '					<li><a href="#" class="tooltip-success" data-rel="tooltip" title="Approve"><span class="green"><i class="icon-ok bigger-110"></i></span></a></li>';
                $buffer .= "\n";
                $buffer .= $indent . '					<li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject"><span class="orange"><i class="icon-remove bigger-110"></i></span> </a></li>';
                $buffer .= "\n";
                $buffer .= $indent . '					<li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete"><span class="red"><i class="icon-trash bigger-110"></i></span> </a></li>';
                $buffer .= "\n";
                $buffer .= $indent . '				</ul>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA17390a7b27357e5f28a16b05076dd6b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<div class="itemdiv commentdiv">
		<div class="user">
			<img alt="{{name}}\'s Avatar" src="{{path.assets}}/avatars/{{avatar}}" />
		</div>
		
		<div class="body">
			<div class="name"><a href="#">{{name}}</a></div>
			<div class="time"><i class="icon-time"></i> <span class="{{time-color}}">{{time}}</span></div>
			<div class="text">
				<i class="icon-quote-left"></i> {{comment}} &hellip;
			</div>
		</div>
		
		<div class="tools">
			{{#menu}}
			<div class="inline position-relative">
				<button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-angle-down icon-only bigger-120"></i></button>
				<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
					<li><a href="#" class="tooltip-success" data-rel="tooltip" title="Approve"><span class="green"><i class="icon-ok bigger-110"></i></span></a></li>
					<li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject"><span class="orange"><i class="icon-remove bigger-110"></i></span> </a></li>
					<li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete"><span class="red"><i class="icon-trash bigger-110"></i></span> </a></li>
				</ul>
			</div>
			{{/menu}}
			{{^menu}}
			<div class="action-buttons bigger-125">
				<a href="#"><i class="icon-pencil blue"></i></a>
				<a href="#"><i class="icon-trash red"></i></a>
			</div>
			{{/menu}}
		</div>
	</div>
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	<div class="itemdiv commentdiv">';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="user">';
                $buffer .= "\n";
                $buffer .= $indent . '			<img alt="';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '\'s Avatar" src="';
                $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '/avatars/';
                $value = $this->resolveValue($context->find('avatar'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '" />';
                $buffer .= "\n";
                $buffer .= $indent . '		</div>';
                $buffer .= "\n";
                $buffer .= $indent . '		';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="body">';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="name"><a href="#">';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</a></div>';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="time"><i class="icon-time"></i> <span class="';
                $value = $this->resolveValue($context->find('time-color'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '">';
                $value = $this->resolveValue($context->find('time'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</span></div>';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="text">';
                $buffer .= "\n";
                $buffer .= $indent . '				<i class="icon-quote-left"></i> ';
                $value = $this->resolveValue($context->find('comment'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= ' &hellip;';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $buffer .= $indent . '		</div>';
                $buffer .= "\n";
                $buffer .= $indent . '		';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="tools">';
                $buffer .= "\n";
                // 'menu' section
                $buffer .= $this->section64b0a8acafacaaa2cb0aa97b71ad5488($context, $indent, $context->find('menu'));
                // 'menu' inverted section
                $value = $context->find('menu');
                if (empty($value)) {
                    
                    $buffer .= $indent . '			<div class="action-buttons bigger-125">';
                    $buffer .= "\n";
                    $buffer .= $indent . '				<a href="#"><i class="icon-pencil blue"></i></a>';
                    $buffer .= "\n";
                    $buffer .= $indent . '				<a href="#"><i class="icon-trash red"></i></a>';
                    $buffer .= "\n";
                    $buffer .= $indent . '			</div>';
                    $buffer .= "\n";
                }
                $buffer .= $indent . '		</div>';
                $buffer .= "\n";
                $buffer .= $indent . '	</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
