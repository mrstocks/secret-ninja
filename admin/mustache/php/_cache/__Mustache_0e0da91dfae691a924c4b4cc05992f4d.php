<?php

class __Mustache_0e0da91dfae691a924c4b4cc05992f4d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . ' <div class="col-sm-6">';
        $buffer .= "\n";
        $buffer .= $indent . '	<h3 class="header blue lighter smaller">';
        $buffer .= "\n";
        $buffer .= $indent . '		<i class="icon-calendar-empty smaller-90"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '		Datepicker';
        $buffer .= "\n";
        $buffer .= $indent . '	</h3>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '	  <div class="col-xs-6">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="input-group input-group-sm">';
        $buffer .= "\n";
        $buffer .= $indent . '			<input type="text" id="datepicker" class="form-control" />';
        $buffer .= "\n";
        $buffer .= $indent . '			<span class="input-group-addon"><i class="icon-calendar"></i></span>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	  </div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . ' </div><!-- ./span -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . ' <div class="col-sm-6">';
        $buffer .= "\n";
        $buffer .= $indent . '	<h3 class="header blue lighter smaller">';
        $buffer .= "\n";
        $buffer .= $indent . '		<i class="icon-list-alt smaller-90"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '		Dialogs';
        $buffer .= "\n";
        $buffer .= $indent . '	</h3>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<a href="#" id="id-btn-dialog2" class="btn btn-info btn-sm">Confirm Dialog</a>';
        $buffer .= "\n";
        $buffer .= $indent . '	<a href="#" id="id-btn-dialog1" class="btn btn-purple btn-sm">Modal Dialog</a>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div id="dialog-message" class="hide">';
        $buffer .= "\n";
        $buffer .= $indent . '		<p>';
        $buffer .= "\n";
        $buffer .= $indent . '			This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the \'x\' icon.';
        $buffer .= "\n";
        $buffer .= $indent . '		</p>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="hr hr-12 hr-double"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '		<p>';
        $buffer .= "\n";
        $buffer .= $indent . '			Currently using <b>36% of your storage space</b>.';
        $buffer .= "\n";
        $buffer .= $indent . '		</p>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div><!-- #dialog-message -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div id="dialog-confirm" class="hide">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="alert alert-info bigger-110">';
        $buffer .= "\n";
        $buffer .= $indent . '			These items will be permanently deleted and cannot be recovered.';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="space-6"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '		<p class="bigger-110 bolder center grey">';
        $buffer .= "\n";
        $buffer .= $indent . '			<i class="icon-hand-right blue bigger-120"></i> Are you sure?';
        $buffer .= "\n";
        $buffer .= $indent . '		</p>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div><!-- #dialog-confirm -->';
        $buffer .= "\n";
        $buffer .= $indent . ' </div><!-- ./span -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '</div><!-- ./row-fluid -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="space-12"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . ' <div class="col-sm-6">';
        $buffer .= "\n";
        $buffer .= $indent . '	<h3 class="header blue lighter smaller">';
        $buffer .= "\n";
        $buffer .= $indent . '		<i class="icon-terminal smaller-90"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '		Autocomplete';
        $buffer .= "\n";
        $buffer .= $indent . '	</h3>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '	 <div class="col-sm-8 col-md-7">';
        $buffer .= "\n";
        $buffer .= $indent . '		<input id="tags" type="text" class="form-control" />';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="space-4"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '		<input id="search" type="text" class="form-control" placeholder="Type \'a\' or \'h\'" />';
        $buffer .= "\n";
        $buffer .= $indent . '	 </div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '   ';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '	 <div class="col-xs-12">';
        $buffer .= "\n";
        $buffer .= $indent . '		<h3 class="header blue lighter smaller">';
        $buffer .= "\n";
        $buffer .= $indent . '			<i class="icon-info smaller-90"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '			Tooltip';
        $buffer .= "\n";
        $buffer .= $indent . '		</h3>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="bigger-110">';
        $buffer .= "\n";
        $buffer .= $indent . '			<p>';
        $buffer .= "\n";
        $buffer .= $indent . '				<a class="grey" id="show-option" href="#" title="slide down on show">';
        $buffer .= "\n";
        $buffer .= $indent . '					<i class="icon-hand-right"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '					slide down on show';
        $buffer .= "\n";
        $buffer .= $indent . '				</a>';
        $buffer .= "\n";
        $buffer .= $indent . '			</p>';
        $buffer .= "\n";
        $buffer .= $indent . '			<p>';
        $buffer .= "\n";
        $buffer .= $indent . '				<a class="blue" id="hide-option" href="#" title="explode on hide">';
        $buffer .= "\n";
        $buffer .= $indent . '					<i class="icon-hand-right"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '					explode on hide';
        $buffer .= "\n";
        $buffer .= $indent . '				</a>';
        $buffer .= "\n";
        $buffer .= $indent . '			</p>';
        $buffer .= "\n";
        $buffer .= $indent . '			<p>';
        $buffer .= "\n";
        $buffer .= $indent . '				<a class="pink" id="open-event" href="#" title="move down on show">';
        $buffer .= "\n";
        $buffer .= $indent . '					<i class="icon-hand-right"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '					move down on show';
        $buffer .= "\n";
        $buffer .= $indent . '				</a>';
        $buffer .= "\n";
        $buffer .= $indent . '			</p>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	 </div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div><!-- ./row-fluid -->';
        $buffer .= "\n";
        $buffer .= $indent . ' </div><!-- ./span -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . ' <div class="col-sm-6">';
        $buffer .= "\n";
        $buffer .= $indent . '	<h3 class="header blue lighter smaller">';
        $buffer .= "\n";
        $buffer .= $indent . '		<i class="icon-reorder smaller-90"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '		Menu';
        $buffer .= "\n";
        $buffer .= $indent . '	</h3>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('page.menu')) {
            $buffer .= $partial->renderInternal($context, '	');
        }
        $buffer .= $indent . ' </div><!-- ./span -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '</div><!-- ./row-fluid -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="space-12"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . ' <div class="col-sm-6">';
        $buffer .= "\n";
        $buffer .= $indent . '	<h3 class="header blue lighter smaller">';
        $buffer .= "\n";
        $buffer .= $indent . '		<i class="icon-retweet smaller-90"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '		Spinner';
        $buffer .= "\n";
        $buffer .= $indent . '	</h3>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<input id="spinner" name="value" type="text" />';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . ' </div><!-- ./span -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . ' <div class="col-sm-6">';
        $buffer .= "\n";
        $buffer .= $indent . '	<h3 class="header blue lighter smaller">';
        $buffer .= "\n";
        $buffer .= $indent . '		<i class="icon-resize-horizontal smaller-90"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '		Slider';
        $buffer .= "\n";
        $buffer .= $indent . '	</h3>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<p>';
        $buffer .= "\n";
        $buffer .= $indent . '		Please see <a href="';
        // 'createLinkFunction' section
        $buffer .= $this->section00e6a173dc883164e26d0d926904d0ce($context, $indent, $context->find('createLinkFunction'));
        $buffer .= '">form elements page</a> for more slider examples.';
        $buffer .= "\n";
        $buffer .= $indent . '	</p>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="space-4"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div id="slider"></div>';
        $buffer .= "\n";
        $buffer .= $indent . ' </div><!-- ./span -->';
        $buffer .= "\n";
        $buffer .= $indent . '</div><!-- ./row-fluid -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="space-12"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . ' <div class="col-sm-6">';
        $buffer .= "\n";
        $buffer .= $indent . '	<h3 class="header blue lighter smaller">';
        $buffer .= "\n";
        $buffer .= $indent . '		<i class="icon-list smaller-90"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '		Sortable Accordion';
        $buffer .= "\n";
        $buffer .= $indent . '	</h3>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('page.accordion')) {
            $buffer .= $partial->renderInternal($context, '	');
        }
        $buffer .= $indent . ' </div><!-- ./span -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . ' <div class="col-sm-6">';
        $buffer .= "\n";
        $buffer .= $indent . '	<h3 class="header blue lighter smaller">';
        $buffer .= "\n";
        $buffer .= $indent . '		<i class="icon-folder-close-alt smaller-90"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '		Tabs';
        $buffer .= "\n";
        $buffer .= $indent . '	</h3>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('page.tabs')) {
            $buffer .= $partial->renderInternal($context, '	');
        }
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . ' </div><!-- ./span -->';
        $buffer .= "\n";
        $buffer .= $indent . '</div><!-- ./row-fluid -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="space-12"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . ' <div class="col-sm-6">';
        $buffer .= "\n";
        $buffer .= $indent . '	<h3 class="header blue lighter smaller">';
        $buffer .= "\n";
        $buffer .= $indent . '		<i class="icon-spinner"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '		Progressbar';
        $buffer .= "\n";
        $buffer .= $indent . '	</h3>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div id="progressbar"></div>';
        $buffer .= "\n";
        $buffer .= $indent . ' </div><!-- ./span -->';
        $buffer .= "\n";
        $buffer .= $indent . '</div><!-- ./row-fluid -->';
        $buffer .= "\n";

        return $buffer;
    }

    private function section00e6a173dc883164e26d0d926904d0ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'form-elements';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= 'form-elements';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
