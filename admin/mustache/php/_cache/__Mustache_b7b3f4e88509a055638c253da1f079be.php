<?php

class __Mustache_b7b3f4e88509a055638c253da1f079be extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<li class="green">';
        $buffer .= "\n";
        $buffer .= $indent . '	<a data-toggle="dropdown" class="dropdown-toggle" href="#">';
        $buffer .= "\n";
        $buffer .= $indent . '		<i class="icon-envelope icon-animated-vertical"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '		<span class="badge badge-success">';
        $value = $this->resolveValue($context->findDot('layout.topbar_messages.count'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= '</span>';
        $buffer .= "\n";
        $buffer .= $indent . '	</a>';
        $buffer .= "\n";
        $buffer .= $indent . '	<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">';
        $buffer .= "\n";
        $buffer .= $indent . '		<li class="dropdown-header">';
        $buffer .= "\n";
        $buffer .= $indent . '			<i class="icon-envelope-alt"></i> ';
        $value = $this->resolveValue($context->findDot('layout.topbar_messages.count'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= ' Messages';
        $buffer .= "\n";
        $buffer .= $indent . '		</li>';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        // 'layout.topbar_messages.latest' section
        $buffer .= $this->section7838c7cae3454fca403f558bdc528008($context, $indent, $context->findDot('layout.topbar_messages.latest'));
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '		<li>';
        $buffer .= "\n";
        $buffer .= $indent . '			<a href="';
        // 'createLinkFunction' section
        $buffer .= $this->sectionFc875a68f3095c7a553812dec53af0df($context, $indent, $context->find('createLinkFunction'));
        $buffer .= '">';
        $buffer .= "\n";
        $buffer .= $indent . '				See all messages';
        $buffer .= "\n";
        $buffer .= $indent . '				<i class="icon-arrow-right"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '			</a>';
        $buffer .= "\n";
        $buffer .= $indent . '		</li>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '</li>';

        return $buffer;
    }

    private function section7838c7cae3454fca403f558bdc528008(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<li>
			<a href="#">
				<img src="{{path.assets}}/avatars/{{img}}" class="msg-photo" alt="{{name}}\'s Avatar">
				<span class="msg-body">
					<span class="msg-title">
						<span class="blue">{{name}}:</span>
						{{summary}}
					</span>
					<span class="msg-time">
						<i class="icon-time"></i> <span>{{time}}</span>
					</span>
				</span>
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
                $buffer .= $indent . '				<img src="';
                $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '/avatars/';
                $value = $this->resolveValue($context->find('img'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '" class="msg-photo" alt="';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '\'s Avatar">';
                $buffer .= "\n";
                $buffer .= $indent . '				<span class="msg-body">';
                $buffer .= "\n";
                $buffer .= $indent . '					<span class="msg-title">';
                $buffer .= "\n";
                $buffer .= $indent . '						<span class="blue">';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= ':</span>';
                $buffer .= "\n";
                $buffer .= $indent . '						';
                $value = $this->resolveValue($context->find('summary'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '';
                $buffer .= "\n";
                $buffer .= $indent . '					</span>';
                $buffer .= "\n";
                $buffer .= $indent . '					<span class="msg-time">';
                $buffer .= "\n";
                $buffer .= $indent . '						<i class="icon-time"></i> <span>';
                $value = $this->resolveValue($context->find('time'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</span>';
                $buffer .= "\n";
                $buffer .= $indent . '					</span>';
                $buffer .= "\n";
                $buffer .= $indent . '				</span>';
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

    private function sectionFc875a68f3095c7a553812dec53af0df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'inbox';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= 'inbox';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
