<?php

class __Mustache_95576042aa369720612070098a2924e2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<li';
        // 'class' section
        $buffer .= $this->section0a5f15f888b57871f529847cdcbb8074($context, $indent, $context->find('class'));
        $buffer .= '>';
        $buffer .= '';
        $buffer .= "\n";
        $buffer .= $indent . '  <a href="';
        // 'link' section
        $buffer .= $this->section3d8a44e46ea0b712150bdb510600bbbc($context, $indent, $context->find('link'));
        // 'link' inverted section
        $value = $context->find('link');
        if (empty($value)) {
            
            $buffer .= '#';
        }
        $buffer .= '"';
        // 'submenu?' section
        $buffer .= $this->section2fd0628d963daf86d2fde973edd59498($context, $indent, $context->find('submenu?'));
        $buffer .= '>';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        // 'icon' section
        $buffer .= $this->sectionF1b76670df495f33609951d1f9e98327($context, $indent, $context->find('icon'));
        $buffer .= '';
        $buffer .= "\n";
        // 'level-1' section
        $buffer .= $this->section51ab3b199aeee5f6e11b22899ca7af87($context, $indent, $context->find('level-1'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        // 'level-2' section
        $buffer .= $this->section22bbd076b5e9a654d257befb7ff5a601($context, $indent, $context->find('level-2'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	  ';
        $value = $this->resolveValue($context->find('title'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= '';
        $buffer .= "\n";
        // 'badge' section
        $buffer .= $this->section47369a13a2e9a5c40adea3b89006caf7($context, $indent, $context->find('badge'));
        // 'label' section
        $buffer .= $this->section09878732b0a9c926ec8b470979839ef0($context, $indent, $context->find('label'));
        // 'level-1' section
        $buffer .= $this->section0518c6287955afe01cb30f41a790ea3b($context, $indent, $context->find('level-1'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        // 'submenu?' section
        $buffer .= $this->sectionAd1a46197596c8dc73bfadaedf9bcf40($context, $indent, $context->find('submenu?'));
        $buffer .= '';
        $buffer .= "\n";
        $buffer .= $indent . '  </a>';
        $buffer .= "\n";
        $buffer .= $indent . '  ';
        $buffer .= "\n";
        // 'submenu?' section
        $buffer .= $this->sectionDde2145ca6771e8dab36bd136932a8a5($context, $indent, $context->find('submenu?'));
        $buffer .= $indent . '</li>';

        return $buffer;
    }

    private function section0a5f15f888b57871f529847cdcbb8074(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' class="{{class}}"';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= ' class="';
                $value = $this->resolveValue($context->find('class'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF4e79cc86c3196e5bf3c56812364fd5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{link}}';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $value = $this->resolveValue($context->find('link'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d8a44e46ea0b712150bdb510600bbbc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#createLinkFunction}}{{link}}{{/createLinkFunction}}';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                // 'createLinkFunction' section
                $buffer .= $this->sectionF4e79cc86c3196e5bf3c56812364fd5d($context, $indent, $context->find('createLinkFunction'));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2fd0628d963daf86d2fde973edd59498(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' class="dropdown-toggle"';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= ' class="dropdown-toggle"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF1b76670df495f33609951d1f9e98327(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '<i class="{{icon}}"></i>';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= '<i class="';
                $value = $this->resolveValue($context->find('icon'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '"></i>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51ab3b199aeee5f6e11b22899ca7af87(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	 <span class="menu-text">
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	 <span class="menu-text">';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22bbd076b5e9a654d257befb7ff5a601(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{! if level-2 and no icon assigned, use this icon}}
		{{^icon}}<i class="icon-double-angle-right"></i>{{/icon}}
	 ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '		';
                // 'icon' inverted section
                $value = $context->find('icon');
                if (empty($value)) {
                    
                    $buffer .= '<i class="icon-double-angle-right"></i>';
                }
                $buffer .= '';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFfb33b09a80b4b4bfb257c3df2325e2b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' title="{{{tooltip}}}"';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= ' title="';
                $value = $this->resolveValue($context->find('tooltip'), $context, $indent);
                $buffer .= $value;
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47369a13a2e9a5c40adea3b89006caf7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<span class="badge {{badge-class}} {{tooltip-class}}"{{#tooltip}} title="{{{tooltip}}}"{{/tooltip}}>{{{badge}}}</span>
	  ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '			<span class="badge ';
                $value = $this->resolveValue($context->find('badge-class'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('tooltip-class'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '"';
                // 'tooltip' section
                $buffer .= $this->sectionFfb33b09a80b4b4bfb257c3df2325e2b($context, $indent, $context->find('tooltip'));
                $buffer .= '>';
                $value = $this->resolveValue($context->find('badge'), $context, $indent);
                $buffer .= $value;
                $buffer .= '</span>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCf19b645c02b374feac25bdf8e7b96da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' title="{{label-title}}"';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= ' title="';
                $value = $this->resolveValue($context->find('label-title'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section09878732b0a9c926ec8b470979839ef0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<span class="label {{label-class}}"{{#label-title}} title="{{label-title}}"{{/label-title}}>{{{label}}}</span>
	  ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '			<span class="label ';
                $value = $this->resolveValue($context->find('label-class'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '"';
                // 'label-title' section
                $buffer .= $this->sectionCf19b645c02b374feac25bdf8e7b96da($context, $indent, $context->find('label-title'));
                $buffer .= '>';
                $value = $this->resolveValue($context->find('label'), $context, $indent);
                $buffer .= $value;
                $buffer .= '</span>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0518c6287955afe01cb30f41a790ea3b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	 </span>
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	 </span>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd1a46197596c8dc73bfadaedf9bcf40(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '<b class="arrow icon-angle-down"></b>';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= '<b class="arrow icon-angle-down"></b>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF03067bf6a6612fbe2d592db24dffd26(Mustache_Context $context, $indent, $value)
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
                    $buffer .= $partial->renderInternal($context, '		');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDde2145ca6771e8dab36bd136932a8a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{! if we have submenu items, print them recursively }}
	<ul class="submenu">
	{{#submenu}}
		{{> layout.sidenav.items}}
	{{/submenu}}
	</ul>
  ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	<ul class="submenu">';
                $buffer .= "\n";
                // 'submenu' section
                $buffer .= $this->sectionF03067bf6a6612fbe2d592db24dffd26($context, $indent, $context->find('submenu'));
                $buffer .= $indent . '	</ul>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
