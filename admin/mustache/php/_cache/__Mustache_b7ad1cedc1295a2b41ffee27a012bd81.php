<?php

class __Mustache_b7ad1cedc1295a2b41ffee27a012bd81 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="clearfix">';
        $buffer .= "\n";
        // 'page.members' section
        $buffer .= $this->section27200e606aef1193c622f12560baac76($context, $indent, $context->findDot('page.members'));
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="center">';
        $buffer .= "\n";
        $buffer .= $indent . '	<i class="icon-group icon-2x green"></i> &nbsp; <a href="#">See all members &nbsp; <i class="icon-arrow-right"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="hr hr-double hr8"></div>';

        return $buffer;
    }

    private function sectionB15767a1036643c87455620466078dfc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<span class="label label-warning label-sm">pending</span>									
				<div class="inline position-relative">
					<button class="btn btn-minier bigger btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown"><i class="icon-angle-down icon-only bigger-120"></i></button>
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
                $buffer .= $indent . '				<span class="label label-warning label-sm">pending</span>									';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="inline position-relative">';
                $buffer .= "\n";
                $buffer .= $indent . '					<button class="btn btn-minier bigger btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown"><i class="icon-angle-down icon-only bigger-120"></i></button>';
                $buffer .= "\n";
                $buffer .= $indent . '					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">';
                $buffer .= "\n";
                $buffer .= $indent . '						<li><a href="#" class="tooltip-success" data-rel="tooltip" title="Approve"><span class="green"><i class="icon-ok bigger-110"></i></span></a></li>';
                $buffer .= "\n";
                $buffer .= $indent . '						<li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject"><span class="orange"><i class="icon-remove bigger-110"></i></span> </a></li>';
                $buffer .= "\n";
                $buffer .= $indent . '						<li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete"><span class="red"><i class="icon-trash bigger-110"></i></span> </a></li>';
                $buffer .= "\n";
                $buffer .= $indent . '					</ul>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d5750cb5200ac19b884ecd4451bcbd9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<span class="label label-danger label-sm">blocked</span>
				';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '				<span class="label label-danger label-sm">blocked</span>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section74601b474634a16d5a85b72fc114884e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<span class="label label-success label-sm arrowed-in">approved</span>
				';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '				<span class="label label-success label-sm arrowed-in">approved</span>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa44c298acc2ab86bd45ff67d1667dbf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<span class="label label-info label-sm arrowed-in arrowed-in-right">online</span>
				';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '				<span class="label label-info label-sm arrowed-in arrowed-in-right">online</span>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27200e606aef1193c622f12560baac76(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<div class="itemdiv memberdiv">
		<div class="user">
			<img alt="{{name}}\'s avatar" src="{{path.assets}}/avatars/{{avatar}}" />
		</div>
		
		<div class="body">
			<div class="name"><a href="#">{{name}}</a></div>
			<div class="time"><i class="icon-time"></i> <span class="green">{{time}}</span></div>
			<div>
				{{#pending}}
				<span class="label label-warning label-sm">pending</span>									
				<div class="inline position-relative">
					<button class="btn btn-minier bigger btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown"><i class="icon-angle-down icon-only bigger-120"></i></button>
					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
						<li><a href="#" class="tooltip-success" data-rel="tooltip" title="Approve"><span class="green"><i class="icon-ok bigger-110"></i></span></a></li>
						<li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject"><span class="orange"><i class="icon-remove bigger-110"></i></span> </a></li>
						<li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete"><span class="red"><i class="icon-trash bigger-110"></i></span> </a></li>
					</ul>
				</div>
				{{/pending}}
				{{#blocked}}
				<span class="label label-danger label-sm">blocked</span>
				{{/blocked}}
				{{#approved}}
				<span class="label label-success label-sm arrowed-in">approved</span>
				{{/approved}}
				{{#online}}
				<span class="label label-info label-sm arrowed-in arrowed-in-right">online</span>
				{{/online}}
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
                $buffer .= $indent . '	<div class="itemdiv memberdiv">';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="user">';
                $buffer .= "\n";
                $buffer .= $indent . '			<img alt="';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '\'s avatar" src="';
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
                $buffer .= $indent . '			<div class="time"><i class="icon-time"></i> <span class="green">';
                $value = $this->resolveValue($context->find('time'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</span></div>';
                $buffer .= "\n";
                $buffer .= $indent . '			<div>';
                $buffer .= "\n";
                // 'pending' section
                $buffer .= $this->sectionB15767a1036643c87455620466078dfc($context, $indent, $context->find('pending'));
                // 'blocked' section
                $buffer .= $this->section5d5750cb5200ac19b884ecd4451bcbd9($context, $indent, $context->find('blocked'));
                // 'approved' section
                $buffer .= $this->section74601b474634a16d5a85b72fc114884e($context, $indent, $context->find('approved'));
                // 'online' section
                $buffer .= $this->sectionFa44c298acc2ab86bd45ff67d1667dbf($context, $indent, $context->find('online'));
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
