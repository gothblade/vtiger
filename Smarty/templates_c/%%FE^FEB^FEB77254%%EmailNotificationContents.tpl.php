<?php /* Smarty version 2.6.18, created on 2013-01-30 01:02:49
         compiled from Settings/EmailNotificationContents.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'Settings/EmailNotificationContents.tpl', 30, false),)), $this); ?>
<table width="100%" cellpadding="5" cellspacing="0" class="listTable" >
	<tr>
	<td class="colHeader small" width="5%">#</td>
	<td class="colHeader small" width="35%"><?php echo $this->_tpl_vars['MOD']['LBL_NOTIFICATION']; ?>
</td>
	<td class="colHeader small" width="50%"><?php echo $this->_tpl_vars['MOD']['LBL_DESCRIPTION']; ?>
</td>
	<td class="colHeader small" width="10%"><?php echo $this->_tpl_vars['MOD']['LBL_STATUS']; ?>
</td>
	<td class="colHeader small" width="10%"><?php echo $this->_tpl_vars['MOD']['LBL_TOOL']; ?>
</td>
	</tr>
	<?php $_from = $this->_tpl_vars['NOTIFICATION']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['notifyfor'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['notifyfor']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['elements']):
        $this->_foreach['notifyfor']['iteration']++;
?>
	<tr>
	<td class="listTableRow small"><?php echo $this->_foreach['notifyfor']['iteration']; ?>
</td>
	<td class="listTableRow small"><?php echo $this->_tpl_vars['elements']['label']; ?>
</td>
	<td class="listTableRow small"><?php echo $this->_tpl_vars['elements']['schedulename']; ?>
</td>
	<?php if ($this->_tpl_vars['elements']['active'] == 'Active'): ?>
	<td class="listTableRow small active"><?php echo $this->_tpl_vars['elements']['active']; ?>
</td>
	<?php else: ?>
	<td class="listTableRow small inactive"><?php echo $this->_tpl_vars['elements']['active']; ?>
</td>
	<?php endif; ?>
	<td class="listTableRow small"><img onClick="fnvshobj(this,'editdiv');fetchEditNotify('<?php echo $this->_foreach['notifyfor']['iteration']; ?>
');" style="cursor:pointer;" src="<?php echo vtiger_imageurl('editfield.gif', $this->_tpl_vars['THEME']); ?>
" title="<?php echo $this->_tpl_vars['APP']['LBL_EDIT']; ?>
" alt="<?php echo $this->_tpl_vars['APP']['LBL_EDIT']; ?>
"></td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
	</table>
