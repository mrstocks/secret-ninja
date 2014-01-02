<?php

class __Mustache_f103569916dbdeee2ee348aee40523bb extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<li class="grey">';
        $buffer .= "\n";
        $buffer .= $indent . '	<a data-toggle="dropdown" class="dropdown-toggle" href="#">';
        $buffer .= "\n";
        $buffer .= $indent . '		<i class="icon-tasks"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '		<span class="badge badge-grey">';
        $value = $this->resolveValue($context->findDot('layout.topbar_tasks.count'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= '</span>';
        $buffer .= "\n";
        $buffer .= $indent . '	</a>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">';
        $buffer .= "\n";
        $buffer .= $indent . '		<li class="dropdown-header">';
        $buffer .= "\n";
        $buffer .= $indent . '			<i class="icon-ok"></i> ';
        $value = $this->resolveValue($context->findDot('layout.topbar_tasks.count'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= ' Tasks to complete';
        $buffer .= "\n";
        $buffer .= $indent . '		</li>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        // 'layout.topbar_tasks.latest' section
        $buffer .= $this->section8e1ea408bcc13da7c6d580a8609c5138($context, $indent, $context->findDot('layout.topbar_tasks.latest'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '		<li>';
        $buffer .= "\n";
        $buffer .= $indent . '			<a href="#">';
        $buffer .= "\n";
        $buffer .= $indent . '				See tasks with details';
        $buffer .= "\n";
        $buffer .= $indent . '				<i class="icon-arrow-right"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '			</a>';
        $buffer .= "\n";
        $buffer .= $indent . '		</li>';
        $buffer .= "\n";
        $buffer .= $indent . '	</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '</li>';

        return $buffer;
    }

    private function section8e1ea408bcc13da7c6d580a8609c5138(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<li>
			<a href="#">
				<div class="clearfix">
					<span class="pull-left">{{title}}</span>
					<span class="pull-right">{{percentage}}%</span>
				</div>
				<div class="progress progress-mini {{progress-class}}">
					<div style="width:{{percentage}}%" class="progress-bar {{progress-bar-class}}"></div>
				</div>
			</a>
		</li>
		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '		<li>';
                $buffer .= "\n";
                $buffer .= $indent . '			<a href="#">';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="clearfix">';
                $buffer .= "\n";
                $buffer .= $indent . '					<span class="pull-left">';
                $value = $this->resolveValue($context->find('title'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</span>';
                $buffer .= "\n";
                $buffer .= $indent . '					<span class="pull-right">';
                $value = $this->resolveValue($context->find('percentage'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '%</span>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="progress progress-mini ';
                $value = $this->resolveValue($context->find('progress-class'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '					<div style="width:';
                $value = $this->resolveValue($context->find('percentage'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '%" class="progress-bar ';
                $value = $this->resolveValue($context->find('progress-bar-class'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '"></div>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			</a>';
                $buffer .= "\n";
                $buffer .= $indent . '		</li>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
