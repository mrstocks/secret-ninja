<?php

class __Mustache_07ca2992ddaa588a3045c5d375e45720 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="navbar navbar-default" id="navbar">';
        $buffer .= "\n";
        $buffer .= $indent . ' <script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . '	try{ace.settings.check(\'navbar\' , \'fixed\')}catch(e){}';
        $buffer .= "\n";
        $buffer .= $indent . ' </script>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '  <div class="navbar-container" id="navbar-container">';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="navbar-header pull-left">';
        $buffer .= "\n";
        $buffer .= $indent . '	  <a href="#" class="navbar-brand">';
        $buffer .= "\n";
        $buffer .= $indent . '		<small>';
        $buffer .= "\n";
        $buffer .= $indent . '			<i class="';
        $value = $this->resolveValue($context->findDot('site.brand_icon'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= '"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '			';
        $value = $this->resolveValue($context->findDot('site.brand_text'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= '';
        $buffer .= "\n";
        $buffer .= $indent . '		</small>';
        $buffer .= "\n";
        $buffer .= $indent . '	  </a><!-- /.brand -->';
        $buffer .= "\n";
        $buffer .= $indent . '	</div><!-- /.navbar-header -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="navbar-header pull-right" role="navigation">';
        $buffer .= "\n";
        $buffer .= $indent . '	  <ul class="nav ace-nav">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('layout.topbar.tasks')) {
            $buffer .= $partial->renderInternal($context, '			');
        }
        if ($partial = $this->mustache->loadPartial('layout.topbar.notifications')) {
            $buffer .= $partial->renderInternal($context, '			');
        }
        if ($partial = $this->mustache->loadPartial('layout.topbar.messages')) {
            $buffer .= $partial->renderInternal($context, '			');
        }
        if ($partial = $this->mustache->loadPartial('layout.topbar.user_menu')) {
            $buffer .= $partial->renderInternal($context, '			');
        }
        $buffer .= $indent . '	  </ul><!-- /.ace-nav -->';
        $buffer .= "\n";
        $buffer .= $indent . '	</div><!-- /.navbar-header -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '  </div><!-- /.container -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
