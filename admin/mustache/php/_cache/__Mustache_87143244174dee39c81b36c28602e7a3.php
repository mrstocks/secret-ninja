<?php

class __Mustache_87143244174dee39c81b36c28602e7a3 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="sidebar-shortcuts" id="sidebar-shortcuts">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">';
        $buffer .= "\n";
        $buffer .= $indent . '		<button class="btn btn-success"><i class="icon-signal"></i></button>';
        $buffer .= "\n";
        $buffer .= $indent . '		<button class="btn btn-info"><i class="icon-pencil"></i></button>';
        $buffer .= "\n";
        $buffer .= $indent . '		<button class="btn btn-warning"><i class="icon-group"></i></button>';
        $buffer .= "\n";
        $buffer .= $indent . '		<button class="btn btn-danger"><i class="icon-cogs"></i></button>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">';
        $buffer .= "\n";
        $buffer .= $indent . '		<span class="btn btn-success"></span>';
        $buffer .= "\n";
        $buffer .= $indent . '		<span class="btn btn-info"></span>';
        $buffer .= "\n";
        $buffer .= $indent . '		<span class="btn btn-warning"></span>';
        $buffer .= "\n";
        $buffer .= $indent . '		<span class="btn btn-danger"></span>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div><!-- #sidebar-shortcuts -->';

        return $buffer;
    }
}
