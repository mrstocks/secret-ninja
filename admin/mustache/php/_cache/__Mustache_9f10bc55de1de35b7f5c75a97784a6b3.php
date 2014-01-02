<?php

class __Mustache_9f10bc55de1de35b7f5c75a97784a6b3 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<li class="purple">';
        $buffer .= "\n";
        $buffer .= $indent . '	<a data-toggle="dropdown" class="dropdown-toggle" href="#">';
        $buffer .= "\n";
        $buffer .= $indent . '		<i class="icon-bell-alt icon-animated-bell"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '		<span class="badge badge-important">';
        $value = $this->resolveValue($context->findDot('layout.topbar_notifications.count'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= '</span>';
        $buffer .= "\n";
        $buffer .= $indent . '	</a>';
        $buffer .= "\n";
        $buffer .= $indent . '	<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">';
        $buffer .= "\n";
        $buffer .= $indent . '		<li class="dropdown-header">';
        $buffer .= "\n";
        $buffer .= $indent . '			<i class="icon-warning-sign"></i> ';
        $value = $this->resolveValue($context->findDot('layout.topbar_notifications.count'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= ' Notifications';
        $buffer .= "\n";
        $buffer .= $indent . '		</li>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        // 'layout.topbar_notifications.latest' section
        $buffer .= $this->sectionCb8d2a351da2e0b74169ac316d71e915($context, $indent, $context->findDot('layout.topbar_notifications.latest'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '		<li>';
        $buffer .= "\n";
        $buffer .= $indent . '			<a href="#">';
        $buffer .= "\n";
        $buffer .= $indent . '				See all notifications';
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

    private function section14892ff18a42f535cfe4b111b29ed6e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<div class="clearfix">
					<span class="pull-left"><i class="btn btn-xs no-hover {{icon-class}} {{icon}}"></i> {{title}}</span>
					<span class="pull-right badge {{badge-class}}">{{badge}}</span>					
				</div>
				';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '				<div class="clearfix">';
                $buffer .= "\n";
                $buffer .= $indent . '					<span class="pull-left"><i class="btn btn-xs no-hover ';
                $value = $this->resolveValue($context->find('icon-class'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('icon'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '"></i> ';
                $value = $this->resolveValue($context->find('title'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</span>';
                $buffer .= "\n";
                $buffer .= $indent . '					<span class="pull-right badge ';
                $value = $this->resolveValue($context->find('badge-class'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '">';
                $value = $this->resolveValue($context->find('badge'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</span>					';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCb8d2a351da2e0b74169ac316d71e915(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<li>
			<a href="#">
				{{#badge}}
				<div class="clearfix">
					<span class="pull-left"><i class="btn btn-xs no-hover {{icon-class}} {{icon}}"></i> {{title}}</span>
					<span class="pull-right badge {{badge-class}}">{{badge}}</span>					
				</div>
				{{/badge}}
				{{^badge}}
					<i class="btn btn-xs {{icon-class}} {{icon}}"></i> {{title}}
				{{/badge}}
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
                // 'badge' section
                $buffer .= $this->section14892ff18a42f535cfe4b111b29ed6e7($context, $indent, $context->find('badge'));
                // 'badge' inverted section
                $value = $context->find('badge');
                if (empty($value)) {
                    
                    $buffer .= $indent . '					<i class="btn btn-xs ';
                    $value = $this->resolveValue($context->find('icon-class'), $context, $indent);
                    $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                    $buffer .= ' ';
                    $value = $this->resolveValue($context->find('icon'), $context, $indent);
                    $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                    $buffer .= '"></i> ';
                    $value = $this->resolveValue($context->find('title'), $context, $indent);
                    $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                    $buffer .= '';
                    $buffer .= "\n";
                }
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
