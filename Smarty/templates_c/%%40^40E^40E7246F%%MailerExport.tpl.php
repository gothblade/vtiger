<?php /* Smarty version 2.6.18, created on 2013-01-29 03:08:47
         compiled from MailerExport.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'MailerExport.tpl', 21, false),array('function', 'html_options', 'MailerExport.tpl', 56, false),)), $this); ?>


<script type="text/javascript" src="modules/<?php echo $this->_tpl_vars['MODULE']; ?>
/<?php echo $this->_tpl_vars['SINGLE_MOD']; ?>
.js"></script>

<!-- header - level 2 tabs -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Buttons_List1.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	

<table align="center" border="0" cellpadding="0" cellspacing="0" width="98%" class="small">
   <tr>
	<td valign="top"><img src="<?php echo vtiger_imageurl('showPanelTopLeft.gif', $this->_tpl_vars['THEME']); ?>
" /></td>
	<td class="showPanelBg" valign="top" width="100%">

		<table  cellpadding="0" cellspacing="0" width="100%" border=0>
		   <tr>
			<td width="50%" valign=top>
				<form enctype="multipart/form-data" name="SelectExports" method="POST" action="modules/Accounts/MailerExport.php">
				<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['MODULE']; ?>
">
				<input type="hidden" name="step" value="export">
				<input type="hidden" name="action" value="MailerExport">
				<input type="hidden" name="exportwhere" value="<?php echo $this->_tpl_vars['EXPORTWHERE']; ?>
">
				<input type="hidden" name="from" value="<?php echo $this->_tpl_vars['FROM']; ?>
">
				<input type="hidden" name="fieldlist" value="<?php echo $this->_tpl_vars['FIELDLIST']; ?>
">
				<input type="hidden" name="typelist" value="<?php echo $this->_tpl_vars['TYPELIST']; ?>
">

				<br />
				<table align="center" cellpadding="5" cellspacing="0" width="80%" class="mailClient importLeadUI small" border="0">
				   <tr>
					<td colspan="2" height="50" valign="middle" align="left" class="mailClientBg  genHeaderSmall"><?php echo $this->_tpl_vars['MOD']['LBL_MAILER_EXPORT']; ?>
</td>
				   </tr>
				   <tr >
					<td colspan="2" align="left" valign="top" style="padding-left:40px;">
					<br>
						<span class="genHeaderGray"><?php echo $this->_tpl_vars['MOD']['LBL_MAILER_EXPORT_CONTACTS_TYPE']; ?>
</span>&nbsp; 
						<span class="genHeaderSmall"><?php echo $this->_tpl_vars['MOD']['LBL_MAILER_EXPORT_CONTACTS_DESCR']; ?>
</span> 
					</td>
				   </tr>
				   <?php $_from = $this->_tpl_vars['QUERYFIELDS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['querysel'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['querysel']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['myVal']):
        $this->_foreach['querysel']['iteration']++;
?>
				     <?php if (($this->_foreach['querysel']['iteration']-1) % 2 == 0): ?>
				       <tr>
				     <?php endif; ?>
				     <td align="left" valign="top" width="25%" class=small  style="padding-left:40px;">
				     <?php if ($this->_tpl_vars['myVal']['uitype'] == 1): ?>
					<input type=text name=<?php echo $this->_tpl_vars['myVal']['columnname']; ?>
 size=13>
					<?php elseif ($this->_tpl_vars['myVal']['uitype'] == 15 || $this->_tpl_vars['myVal']['uitype'] == 56): ?>
				       		<?php echo smarty_function_html_options(array('name' => $this->_tpl_vars['myVal']['columnname'],'options' => $this->_tpl_vars['myVal']['value']), $this);?>

				     <?php endif; ?>
			            &nbsp;<b><?php echo $this->_tpl_vars['myVal']['fieldlabel']; ?>
</b></td>
				     <?php if (($this->_foreach['querysel']['iteration']-1) % 2 > 0): ?>
				       </tr>
				     <?php endif; ?>
				   <?php endforeach; endif; unset($_from); ?>
				   <input type="hidden" name="query" value="<?php echo $this->_tpl_vars['fieldList']; ?>
">
				   <tr ><td align="left" valign="top" colspan="2">&nbsp;</td></tr>
          <tr >
					<td colspan="2" align="left" valign="top" style="padding-left:40px;">
					<br>
						<span class="genHeaderGray"><?php echo $this->_tpl_vars['MOD']['LBL_MAILER_EXPORT_RESULTS_TYPE']; ?>
</span>&nbsp; 
						<span class="genHeaderSmall"><?php echo $this->_tpl_vars['MOD']['LBL_MAILER_EXPORT_RESULTS_DESCR']; ?>
</span> 
					</td>
				   </tr>
				   <tr >
					<td align="right" valign="top" width="50%" class=small><b><?php echo $this->_tpl_vars['MOD']['LBL_EXPORT_RESULTS_EMAIL']; ?>
 </b></td>
					<td align="left" valign="top" width="50%" style="padding-left:40px;">
          <input type="radio" name="export_type" checked value="email">
					</td>
				   </tr>
				   <tr >
					<td align="right" valign="top" width="50%" class=small style="padding-left:40px;"><b><?php echo $this->_tpl_vars['MOD']['LBL_EXPORT_RESULTS_EMAIL_CORP']; ?>
 </b></td>
					<td align="left" valign="top" width="50%" style="padding-left:40px;">
				        <input type="radio" name="export_type" value="emailplus"> </td>
				   </tr>
				   <tr >
					<td align="right" valign="top" width="50%" class=small style="padding-left:40px;"><b><?php echo $this->_tpl_vars['MOD']['LBL_EXPORT_RESULTS_FULL']; ?>
 </b></td>
					<td align="left" valign="top" width="50%" style="padding-left:40px;">
          <input type="radio" name="export_type" value="full"></td>
				   </tr>
			   <tr ><td colspan="2" height="50" style="padding-left:40px;">&nbsp;</td></tr>
				    <tr >
						<td colspan="2" align="right" style="padding-right:40px;" class="reportCreateBottom">
							<input title="<?php echo $this->_tpl_vars['MOD']['LBL_EXPORT_RESULTS_GO']; ?>
" accessKey="" class="crmButton small save" type="submit" name="button" value="  <?php echo $this->_tpl_vars['MOD']['LBL_EXPORT_RESULTS_GO']; ?>
 &rsaquo; ">
						</td>
						<!-- ADDED FOR 5.0.4 GA; STARTS-->
						<td colspan="2" align="right" style="padding-right:40px;" class="reportCreateBottom">
							<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="crmbutton small cancel" onclick="window.history.back()" type="button" name="button" value="  <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
  " style="width:70px">
						</td>
						<!-- ADDED FOR 5.0.4 GA ; ENDS-->
				   </tr>				</form>
				 </table>
				<br>
			</td>
		   </tr>
		</table>

	</td>
	<td valign="top"><img src="<?php echo vtiger_imageurl('showPanelTopRight.gif', $this->_tpl_vars['THEME']); ?>
" /></td>
   </tr>
</table>