<?php /* Smarty version 2.6.18, created on 2013-01-29 08:49:59
         compiled from modules/PBXManager/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'modules/PBXManager/EditView.tpl', 19, false),)), $this); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Buttons_List1.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table border=0 cellspacing=0 cellpadding=0 width=98% align=center>
	<tr>
		<td valign=top>
			<img src="<?php echo vtiger_imageurl('showPanelTopLeft.gif', $this->_tpl_vars['THEME']); ?>
">
		</td>
		<td class="showPanelBg" valign=top width=100%>
			<div class="small" style="padding:20px">
				<hr noshade size=1>
				<br>
				<h2>
				<?php echo $this->_tpl_vars['APP']['LBL_OPERATION_NOT_SUPPORTED']; ?>

				</h2> 
			</div>
		</td>
		<br>
	</tr>
</table>
</form>