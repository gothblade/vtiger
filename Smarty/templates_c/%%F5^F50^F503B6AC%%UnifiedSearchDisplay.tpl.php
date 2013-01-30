<?php /* Smarty version 2.6.18, created on 2013-01-29 08:22:25
         compiled from UnifiedSearchDisplay.tpl */ ?>
<script language="JavaScript" type="text/javascript" src="include/js/general.js"></script>
<script language="JavaScript" type="text/javascript" src="include/js/search.js"></script>
<script language="JavaScript" type="text/javascript" src="include/js/ListView.js"></script>
<?php if ($this->_tpl_vars['MODULE'] == 'Contacts'): ?>
<?php echo $this->_tpl_vars['IMAGELISTS']; ?>

<script language="JavaScript" type="text/javascript" src="include/js/thumbnail.js"></script>
<div id="dynloadarea" style=float:left;position:absolute;left:350px;top:150px;></div>
<?php endif; ?>
<div id="searchResultContainerId">
<input name="globalSearchText" id="globalSearchText" type="hidden" value="<?php echo $this->_tpl_vars['SEARCH_STRING']; ?>
" />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'UnifiedSearchAjax.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>