<?php /* Smarty version 2.6.18, created on 2013-01-29 08:32:58
         compiled from modules/SMSNotifier/SMSConfigServerListContents.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'modules/SMSNotifier/SMSConfigServerListContents.tpl', 25, false),)), $this); ?>
<table width="100%" cellpadding="5" cellspacing="0" class="listTable" >
	<tr>
	<td class="colHeader small" width="30%" nowrap="nowrap"><?php echo $this->_tpl_vars['CMOD']['LBL_PROVIDER']; ?>
</td>
	<td class="colHeader small" width="25%" nowrap="nowrap"><?php echo $this->_tpl_vars['MOD']['LBL_USERNAME']; ?>
</td>
	<td class="colHeader small" width="10%" nowrap="nowrap"><?php echo $this->_tpl_vars['APP']['Active']; ?>
</td>
	<td class="colHeader small" width="10%"><?php echo $this->_tpl_vars['MOD']['Tools']; ?>
</td>
	</tr>
	<?php $_from = $this->_tpl_vars['SMSSERVERS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['SMSSERVER']):
?>
	<tr>
	<td class="listTableRow small"><?php echo $this->_tpl_vars['SMSSERVER']['providertype']; ?>
</td>
	<td class="listTableRow small"><?php echo $this->_tpl_vars['SMSSERVER']['username']; ?>
</td>
	<td class="listTableRow small"><?php if ($this->_tpl_vars['SMSSERVER']['isactive']): ?><?php echo $this->_tpl_vars['APP']['yes']; ?>
<?php else: ?><?php echo $this->_tpl_vars['APP']['no']; ?>
<?php endif; ?></td>
	<td class="listTableRow small">
		<img onClick="fnvshobj(this,'editdiv');_SMSConfigServerFetchEdit('<?php echo $this->_tpl_vars['SMSSERVER']['id']; ?>
');" style="cursor:pointer;" src="<?php echo vtiger_imageurl('editfield.gif', $this->_tpl_vars['THEME']); ?>
" title="<?php echo $this->_tpl_vars['APP']['LBL_EDIT']; ?>
">
		<img onClick="fnvshobj(this,'editdiv');_SMSConfigServerDelete('<?php echo $this->_tpl_vars['SMSSERVER']['id']; ?>
');" style="cursor:pointer;" src="<?php echo vtiger_imageurl('delete.gif', $this->_tpl_vars['THEME']); ?>
" title="<?php echo $this->_tpl_vars['APP']['LBL_DELETE']; ?>
">
	</td>

	</tr>
	<?php endforeach; endif; unset($_from); ?>
</table>
