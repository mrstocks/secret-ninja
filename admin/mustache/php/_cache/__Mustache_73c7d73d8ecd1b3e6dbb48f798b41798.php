<?php

class __Mustache_73c7d73d8ecd1b3e6dbb48f798b41798 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="alert alert-block alert-success">';
        $buffer .= "\n";
        $buffer .= $indent . '	<button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>';
        $buffer .= "\n";
        $buffer .= $indent . '	<i class="icon-ok green"></i> Welcome to <strong class="green">Ace <small>(v';
        $value = $this->resolveValue($context->findDot('site.version'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= ')</small></strong>,';
        $buffer .= "\n";
        $buffer .= $indent . '	the lightweight, feature-rich and easy to use admin template.';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . ' <div class="space-6"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . ' <div class="col-sm-7 infobox-container">';
        $buffer .= "\n";
        // 'page.stats1' section
        $buffer .= $this->section936caf211a929f929c7a0f57f2f7eb31($context, $indent, $context->findDot('page.stats1'));
        $buffer .= $indent . '	<div class="space-6"></div>';
        $buffer .= "\n";
        // 'page.stats2' section
        $buffer .= $this->section936caf211a929f929c7a0f57f2f7eb31($context, $indent, $context->findDot('page.stats2'));
        $buffer .= $indent . ' </div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . ' <div class="vspace-sm"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . ' <div class="col-sm-5">';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="widget-box">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="widget-header widget-header-flat widget-header-small">';
        $buffer .= "\n";
        $buffer .= $indent . '			<h5><i class="icon-signal"></i> Traffic Sources</h5>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="widget-toolbar no-border">';
        $buffer .= "\n";
        $buffer .= $indent . '				<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">';
        $buffer .= "\n";
        $buffer .= $indent . '					This Week <i class="icon-angle-down icon-on-right bigger-110"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '				</button>';
        $buffer .= "\n";
        $buffer .= $indent . '				<ul class="dropdown-menu pull-right dropdown-125 dropdown-lighter dropdown-caret">';
        $buffer .= "\n";
        $buffer .= $indent . '					<li class="active">';
        $buffer .= "\n";
        $buffer .= $indent . '						<a href="#" class="blue">';
        $buffer .= "\n";
        $buffer .= $indent . '							<i class="icon-caret-right bigger-110">&nbsp;</i> This Week';
        $buffer .= "\n";
        $buffer .= $indent . '						</a>';
        $buffer .= "\n";
        $buffer .= $indent . '					</li>';
        $buffer .= "\n";
        $buffer .= $indent . '					<li><a href="#"><i class="icon-caret-right bigger-110 invisible">&nbsp;</i> Last Week</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '					<li><a href="#"><i class="icon-caret-right bigger-110 invisible">&nbsp;</i> This Month</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '					<li><a href="#"><i class="icon-caret-right bigger-110 invisible">&nbsp;</i> Last Month</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '				</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="widget-body">';
        $buffer .= "\n";
        $buffer .= $indent . '		 <div class="widget-main">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div id="piechart-placeholder"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '			';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="hr hr8 hr-double"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '			';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="clearfix">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="grid3">';
        $buffer .= "\n";
        $buffer .= $indent . '					<span class="grey"><i class="icon-facebook-sign icon-2x blue"></i> &nbsp; likes</span>';
        $buffer .= "\n";
        $buffer .= $indent . '					<h4 class="bigger pull-right">1,255</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="grid3">';
        $buffer .= "\n";
        $buffer .= $indent . '					<span class="grey"><i class="icon-twitter-sign icon-2x purple"></i> &nbsp; tweets</span>';
        $buffer .= "\n";
        $buffer .= $indent . '					<h4 class="bigger pull-right">941</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="grid3">';
        $buffer .= "\n";
        $buffer .= $indent . '					<span class="grey"><i class="icon-pinterest-sign icon-2x red"></i> &nbsp; pins</span>';
        $buffer .= "\n";
        $buffer .= $indent . '					<h4 class="bigger pull-right">1,050</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		 </div><!--/widget-main-->';
        $buffer .= "\n";
        $buffer .= $indent . '		</div><!--/widget-body-->';
        $buffer .= "\n";
        $buffer .= $indent . '	</div><!--/widget-box-->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . ' </div><!--/span-->';
        $buffer .= "\n";
        $buffer .= $indent . ' ';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '</div><!--/row-->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="hr hr32 hr-dotted"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="col-sm-5">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="widget-box transparent">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="widget-header widget-header-flat">';
        $buffer .= "\n";
        $buffer .= $indent . '				<h4 class="lighter"><i class="icon-star orange"></i>Popular Domains</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="widget-toolbar">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="#" data-action="collapse"><i class="icon-chevron-up"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="widget-body">';
        $buffer .= "\n";
        $buffer .= $indent . '			 <div class="widget-main no-padding">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('page.domains')) {
            $buffer .= $partial->renderInternal($context, '				');
        }
        $buffer .= $indent . '			 </div><!--/widget-main-->';
        $buffer .= "\n";
        $buffer .= $indent . '			</div><!--/widget-body-->';
        $buffer .= "\n";
        $buffer .= $indent . '		</div><!--/widget-box-->';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="col-sm-7">';
        $buffer .= "\n";
        $buffer .= $indent . '	  <div class="widget-box transparent">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="widget-header widget-header-flat">';
        $buffer .= "\n";
        $buffer .= $indent . '			<h4 class="lighter"><i class="icon-signal"></i> Sale Stats</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="widget-toolbar">';
        $buffer .= "\n";
        $buffer .= $indent . '				<a href="#" data-action="collapse"><i class="icon-chevron-up"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="widget-body">';
        $buffer .= "\n";
        $buffer .= $indent . '		 <div class="widget-main padding-4">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div id="sales-charts"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '		 </div><!--/widget-main-->';
        $buffer .= "\n";
        $buffer .= $indent . '		</div><!--/widget-body-->';
        $buffer .= "\n";
        $buffer .= $indent . '	  </div><!--/widget-box-->';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="hr hr32 hr-dotted"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . ' <div class="col-sm-6">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="widget-box transparent" id="recent-box">';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="widget-header">';
        $buffer .= "\n";
        $buffer .= $indent . '			<h4 class="lighter smaller"><i class="icon-rss orange"></i>RECENT</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="widget-toolbar no-border">';
        $buffer .= "\n";
        $buffer .= $indent . '				<ul class="nav nav-tabs" id="recent-tab">';
        $buffer .= "\n";
        $buffer .= $indent . '					<li class="active"><a data-toggle="tab" href="#task-tab">Tasks</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '					<li><a data-toggle="tab" href="#member-tab">Members</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '					<li><a data-toggle="tab" href="#comment-tab">Comments</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '				</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="widget-body">';
        $buffer .= "\n";
        $buffer .= $indent . '		 <div class="widget-main padding-4">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="tab-content padding-8 overflow-visible">';
        $buffer .= '';
        $buffer .= "\n";
        $buffer .= $indent . '				<div id="task-tab" class="tab-pane active">';
        $buffer .= "\n";
        $buffer .= $indent . '					<h4 class="smaller lighter green"><i class="icon-list"></i> Sortable Lists</h4>';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('page.tasks')) {
            $buffer .= $partial->renderInternal($context, '					');
        }
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '				<div id="member-tab" class="tab-pane">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('page.members')) {
            $buffer .= $partial->renderInternal($context, '					');
        }
        $buffer .= $indent . '				</div><!-- member-tab -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '				<div id="comment-tab" class="tab-pane">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('page.comments')) {
            $buffer .= $partial->renderInternal($context, '					');
        }
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		 </div><!--/widget-main-->';
        $buffer .= "\n";
        $buffer .= $indent . '		</div><!--/widget-body-->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	</div><!--/widget-box-->';
        $buffer .= "\n";
        $buffer .= $indent . ' </div><!--/span-->';
        $buffer .= "\n";
        $buffer .= $indent . ' ';
        $buffer .= "\n";
        $buffer .= $indent . ' <div class="col-sm-6">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="widget-box ">';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="widget-header">';
        $buffer .= "\n";
        $buffer .= $indent . '			<h4 class="lighter smaller"><i class="icon-comment blue"></i>Conversation</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="widget-body">';
        $buffer .= "\n";
        $buffer .= $indent . '		 <div class="widget-main no-padding">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('page.conversations')) {
            $buffer .= $partial->renderInternal($context, '			');
        }
        $buffer .= $indent . '		 </div><!--/widget-main-->';
        $buffer .= "\n";
        $buffer .= $indent . '		</div><!--/widget-body-->';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '	</div><!--/widget-box-->';
        $buffer .= "\n";
        $buffer .= $indent . ' </div><!--/span-->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '</div><!--/row-->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";

        return $buffer;
    }

    private function section936caf211a929f929c7a0f57f2f7eb31(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	 {{> page.infobox}}
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('page.infobox')) {
                    $buffer .= $partial->renderInternal($context, '	 ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
