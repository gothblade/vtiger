<?php /* Smarty version 2.6.18, created on 2013-01-29 08:32:59
         compiled from modules/SMSNotifier/SMSConfigServerEdit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'modules/SMSNotifier/SMSConfigServerEdit.tpl', 23, false),)), $this); ?>
<div id="EditInv" class="layerPopup">
<table border=0 cellspacing=0 cellpadding=5 width=100% class=layerHeadingULine>
<tr>
	<td class="layerPopupHeading" align="left">
		<?php if ($this->_tpl_vars['SMSSERVERINFO']['id'] == ''): ?>
			<?php echo $this->_tpl_vars['CMOD']['LBL_ADDNEW']; ?>

		<?php else: ?>
			<?php echo $this->_tpl_vars['CMOD']['LBL_UPDATE']; ?>

			<input type="hidden" name="smsserver_id" value=<?php echo $this->_tpl_vars['SMSSERVERINFO']['id']; ?>
">
		<?php endif; ?>
	</td>
	<td align="right" class="small"><img onClick="hide('editdiv');" style="cursor:pointer;" src="<?php echo vtiger_imageurl('close.gif', $this->_tpl_vars['THEME']); ?>
" align="middle" border="0"></td>
</tr>
</table>
<table border=0 cellspacing=0 cellpadding=5 width=95% align=center> 
<tr>
	<td class="small">
	<table border=0 cellspacing=0 cellpadding=5 width=100% align=center bgcolor=white>
	<tr>
		<td width="33%" nowrap="nowrap" align="right" class="cellLabel small"><b><?php echo $this->_tpl_vars['CMOD']['LBL_PROVIDER']; ?>
</b></td>
		<td align="left" class="cellText small">
			<select name="smsserver_provider" class="small" onchange="_SMSCongiServerShowReqParams(this);">
				<option value="">-- <?php echo $this->_tpl_vars['CMOD']['LBL_SELECT_ONE']; ?>
 --</option>	
				<?php $_from = $this->_tpl_vars['SMSPROVIDERS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['SMSPROVIDER']):
?>
				<option <?php if ($this->_tpl_vars['SMSSERVERINFO']['providertype'] == $this->_tpl_vars['SMSPROVIDER']): ?>selected="true"<?php endif; ?> value="<?php echo $this->_tpl_vars['SMSPROVIDER']; ?>
"><?php echo $this->_tpl_vars['SMSPROVIDER']; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
			</select>
		</td>
	</tr>
	
	<tr>
		<td width="33%" nowrap="nowrap" align="right" class="cellLabel small"><b><?php echo $this->_tpl_vars['APP']['Active']; ?>
</b></td>
		<td align="left" class="cellText small">
			<input type="radio" class="small" name="smsserver_isactive" value="1" <?php if ($this->_tpl_vars['SMSSERVERINFO']['isactive']): ?>checked=true<?php endif; ?>> Yes
			<input type="radio" class="small" name="smsserver_isactive" value="0" <?php if ($this->_tpl_vars['SMSSERVERINFO']['isactive'] != 1): ?>checked=true<?php endif; ?>> No
		</td>
	</tr>

	<tr>
		<td width="33%" nowrap="nowrap" align="right" class="cellLabel small"><b><?php echo $this->_tpl_vars['MOD']['LBL_USERNAME']; ?>
</b></td>
		<td align="left" class="cellText small">
			<input type="text" class="detailedViewTextBox" name="smsserver_username" value="<?php echo $this->_tpl_vars['SMSSERVERINFO']['username']; ?>
" onfocus="this.className='detailedViewTextBoxOn'" onblur="this.className='detailedViewTextBox'">
		</td>
	</tr>
	
	<tr>
		<td width="33%" nowrap="nowrap" align="right" class="cellLabel small"><b><?php echo $this->_tpl_vars['MOD']['LBL_PASWRD']; ?>
</b></td>
		<td align="left" class="cellText small">
			<input type="password" class="detailedViewTextBox" name="smsserver_password" value="<?php echo $this->_tpl_vars['SMSSERVERINFO']['password']; ?>
" onfocus="this.className='detailedViewTextBoxOn'" onblur="this.className='detailedViewTextBox'">
		</td>
	</tr>

	<?php $_from = $this->_tpl_vars['SMSPROVIDERSPARAMS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['SMSPROVIDERPARAMKEY'] => $this->_tpl_vars['SMSPROVIDERPARAMS']):
?>
	<tr>
	<td colspan="2" class="cellLabel small" style="padding: 0; border-top: 0;">
	<div id="paramrows_<?php echo $this->_tpl_vars['SMSPROVIDERPARAMKEY']; ?>
" <?php if ($this->_tpl_vars['SMSSERVERINFO']['providertype'] != $this->_tpl_vars['SMSPROVIDERPARAMKEY']): ?>style="display: none;"<?php endif; ?>>
		<table width="100%" cellpadding="5" cellspacing="0" border="0" bgcolor="white">
		<?php $_from = $this->_tpl_vars['SMSPROVIDERPARAMS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['SMSPROVIDERPARAM']):
?>
		
		<tr>
		<td width="33%" nowrap="nowrap" align="right" class="cellLabel small" style="border: none;"><b><?php echo $this->_tpl_vars['SMSPROVIDERPARAM']; ?>
</b></td>
		<td align="left" class="cellText small" style="border: none;">
			<input type="text" class="detailedViewTextBox" name="smsserverparam_<?php echo $this->_tpl_vars['SMSPROVIDERPARAMKEY']; ?>
_<?php echo $this->_tpl_vars['SMSPROVIDERPARAM']; ?>
" value="<?php echo $this->_tpl_vars['SMSSERVERPARAMS'][$this->_tpl_vars['SMSPROVIDERPARAM']]; ?>
" onfocus="this.className='detailedViewTextBoxOn'" onblur="this.className='detailedViewTextBox'">
		</td>
		</tr>
		
		<?php endforeach; endif; unset($_from); ?>
		
		</table>
	</div>
	
	</td>
	</tr>
	
	<?php endforeach; endif; unset($_from); ?>
	
	</table>
	</td>
</tr>
</table>
<table border=0 cellspacing=0 cellpadding=5 width=100% class="layerPopupTransport">
<tr>
	<td align="center" class="small">
		<input value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" class="crmButton small save" type="button" onClick="_SMSConfigServerSaveForm(this.form)">
		<input value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" class="crmButton small cancel" type="button" onClick="hide('editdiv');">
	</td>
	</tr>
</table>
</div>