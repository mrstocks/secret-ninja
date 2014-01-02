<?php

class __Mustache_c3aea5834bb261db8f6b078fd9e823f8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="dialogs">';
        $buffer .= "\n";
        // 'page.conversations' section
        $buffer .= $this->section6ed8147cfcd7b9013fd04005575edd7a($context, $indent, $context->findDot('page.conversations'));
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<form>';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="form-actions">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="input-group">';
        $buffer .= "\n";
        $buffer .= $indent . '		<input placeholder="Type your message here ..." type="text" class="form-control" name="message" />';
        $buffer .= "\n";
        $buffer .= $indent . '		<span class="input-group-btn">';
        $buffer .= "\n";
        $buffer .= $indent . '			<button class="btn btn-sm btn-info no-radius" type="button"><i class="icon-share-alt"></i> Send</button>';
        $buffer .= "\n";
        $buffer .= $indent . '		</span>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . ' </div>';
        $buffer .= "\n";
        $buffer .= $indent . '</form>';

        return $buffer;
    }

    private function section5f79292e3bb1a72ce8745dc9033c2622(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<span class="label label-info arrowed arrowed-in-right">admin</span>
				';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '				<span class="label label-info arrowed arrowed-in-right">admin</span>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6ed8147cfcd7b9013fd04005575edd7a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<div class="itemdiv dialogdiv">
		<div class="user">
			<img alt="{{name}}\'s Avatar" src="{{path.assets}}/avatars/{{avatar}}" />
		</div>

		<div class="body">
			<div class="time"><i class="icon-time"></i> <span class="{{time-color}}">{{time}}</span></div>
			<div class="name">
				<a href="#">{{name}}</a>
				{{#admin}}
				<span class="label label-info arrowed arrowed-in-right">admin</span>
				{{/admin}}
			</div>
			<div class="text">{{message}}</div>
			
			<div class="tools">
				<a href="#" class="btn btn-minier btn-info"><i class="icon-only icon-share-alt"></i></a>
			</div>
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
                $buffer .= $indent . '	<div class="itemdiv dialogdiv">';
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
                $buffer .= $indent . '';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="body">';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="time"><i class="icon-time"></i> <span class="';
                $value = $this->resolveValue($context->find('time-color'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '">';
                $value = $this->resolveValue($context->find('time'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</span></div>';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="name">';
                $buffer .= "\n";
                $buffer .= $indent . '				<a href="#">';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</a>';
                $buffer .= "\n";
                // 'admin' section
                $buffer .= $this->section5f79292e3bb1a72ce8745dc9033c2622($context, $indent, $context->find('admin'));
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="text">';
                $value = $this->resolveValue($context->find('message'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="tools">';
                $buffer .= "\n";
                $buffer .= $indent . '				<a href="#" class="btn btn-minier btn-info"><i class="icon-only icon-share-alt"></i></a>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
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
