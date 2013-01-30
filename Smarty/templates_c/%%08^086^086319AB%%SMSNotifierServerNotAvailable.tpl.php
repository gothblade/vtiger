<?php /* Smarty version 2.6.18, created on 2013-01-29 03:08:44
         compiled from modules/SMSNotifier/SMSNotifierServerNotAvailable.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'modules/SMSNotifier/SMSNotifierServerNotAvailable.tpl', 21, false),)), $this); ?>

<div style="width: 400px;">

	<form method="POST" action="javascript:void(0);">

	<table width="100%" cellpadding="5" cellspacing="0" border="0" class="layerHeadingULine">
	<tr>
		<td class="genHeaderSmall" width="90%" align="left">Server Not Configured?</td>
		<td width="10%" align="right">
			<a href="javascript:void(0);" onclick="SMSNotifierCommon.hideSelectWizard();"><img src="<?php echo vtiger_imageurl('close.gif', $this->_tpl_vars['THEME']); ?>
" border="0"/></a>
		</td>
	</table>
	
	<table width="95%" cellpadding="5" cellspacing="0" border="0" align="center">
	<tr>
		<td>
		
			<table width="100%" cellpadding="5" cellspacing="0" border="0" align="center" bgcolor="white">
			<tr>
				<td align="left"><strong>We could not find any active server configuration.</strong><br/><br/>
				
					<?php if ($this->_tpl_vars['IS_ADMIN']): ?>Please review under <?php echo $this->_tpl_vars['MODULE']; ?>
 Settings.<?php else: ?>Please contact your administrator.<?php endif; ?>
									
				</td>			
			</tr>			
			</table>			
		
		</td>
	</tr>
	</table>
	
	<table width="100%" cellpadding="5" cellspacing="0" border="0" class="layerPopupTransport">
	<tr>
		<td class="small" align="center">
			<input type="button" class="small crmbutton cancel" onclick="SMSNotifierCommon.hideSelectWizard();" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"/>
		</td>
	</tr>
	</table>
	
	</form>

</div>