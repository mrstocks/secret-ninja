<?php

class __Mustache_a23dcb6e2ce14317183d6975fb1c5045 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<!DOCTYPE html>';
        $buffer .= "\n";
        $buffer .= $indent . '<html lang="en">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('layout._template.header')) {
            $buffer .= $partial->renderInternal($context, '	');
        }
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<body>';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('layout.topbar')) {
            $buffer .= $partial->renderInternal($context, '	');
        }
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="main-container" id="main-container">';
        $buffer .= "\n";
        $buffer .= $indent . '		 <script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . '		 try{ace.settings.check(\'main-container\' , \'fixed\')}catch(e){}';
        $buffer .= "\n";
        $buffer .= $indent . '		 </script>';
        $buffer .= "\n";
        $buffer .= $indent . '		 <div class="main-container-inner">';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('layout.sidenav')) {
            $buffer .= $partial->renderInternal($context, '		 ');
        }
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="main-content">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('layout.breadcrumbs')) {
            $buffer .= $partial->renderInternal($context, '				');
        }
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="page-content">';
        $buffer .= "\n";
        // 'page.no-header' inverted section
        $value = $context->findDot('page.no-header');
        if (empty($value)) {
            
            $buffer .= $indent . '					<div class="page-header">';
            $buffer .= "\n";
            $buffer .= $indent . '						<h1>';
            $value = $this->resolveValue($context->findDot('page.title'), $context, $indent);
            $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
            $buffer .= ' ';
            // 'page.description' section
            $buffer .= $this->sectionEe5e79d5d4ce8324f5712e25474a1426($context, $indent, $context->findDot('page.description'));
            $buffer .= '</h1>';
            $buffer .= "\n";
            $buffer .= $indent . '					</div><!--/.page-header-->';
            $buffer .= "\n";
        }
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '					 <div class="col-xs-12">';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- PAGE CONTENT BEGINS -->';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('page.content')) {
            $buffer .= $partial->renderInternal($context, '');
        }
        $buffer .= $indent . '<!-- PAGE CONTENT ENDS -->';
        $buffer .= "\n";
        $buffer .= $indent . '					 </div><!--/.col-->';
        $buffer .= "\n";
        $buffer .= $indent . '					</div><!--/.row-->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '				</div><!--/.page-content-->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '			</div><!--/.main-content -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('layout.settings')) {
            $buffer .= $partial->renderInternal($context, '			');
        }
        $buffer .= $indent . '		 </div><!--/.main-container-inner-->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '		 <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">';
        $buffer .= "\n";
        $buffer .= $indent . '			<i class="icon-double-angle-up icon-only bigger-110"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '		 </a>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div><!--/.main-container-->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('layout._template.footer')) {
            $buffer .= $partial->renderInternal($context, '		');
        }
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	</body>';
        $buffer .= "\n";
        $buffer .= $indent . '</html>';
        $buffer .= "\n";

        return $buffer;
    }

    private function sectionEe5e79d5d4ce8324f5712e25474a1426(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '<small><i class="icon-double-angle-right"></i> {{page.description}}</small>';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= '<small><i class="icon-double-angle-right"></i> ';
                $value = $this->resolveValue($context->findDot('page.description'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</small>';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
