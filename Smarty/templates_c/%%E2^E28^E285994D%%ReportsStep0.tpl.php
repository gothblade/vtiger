<?php /* Smarty version 2.6.18, created on 2013-01-29 06:39:17
         compiled from ReportsStep0.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'ReportsStep0.tpl', 109, false),)), $this); ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['APP']['LBL_CHARSET']; ?>
">
	<title><?php echo $this->_tpl_vars['MOD']['TITLE_VTIGERCRM_CREATE_REPORT']; ?>
</title>
	<link href="<?php echo $this->_tpl_vars['THEME_PATH']; ?>
style.css" rel="stylesheet" type="text/css">
	<script language="JavaScript" type="text/javascript" src="include/js/general.js"></script>
	<script language="JavaScript" type="text/javascript" src="include/js/<?php  echo $_SESSION['authenticated_user_language']; ?>.lang.js?<?php  echo $_SESSION['vtiger_version']; ?>"></script>
	<script language="javascript" type="text/javascript" src="include/scriptaculous/prototype.js"></script>
	<script language="JavaScript" type="text/javascript" src="modules/Reports/Reports.js"></script>
</head>
<body topmargin="0" leftmargin="0" marginheight="0" marginwidth="0">
<table width="100%"  border="0" cellspacing="0" cellpadding="0" class="mailClient mailClientBg">
<tr>
	<td>
		<form name="NewRep" method="POST" ENCTYPE="multipart/form-data" action="index.php" style="margin:0px" onSubmit="return changeSteps();">
		<input type="hidden" name="module" value="Reports">
		<input type="hidden" name="primarymodule" value="<?php echo $this->_tpl_vars['REP_MODULE']; ?>
">
		<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['RECORDID']; ?>
">
		<input type="hidden" name="file" value="NewReport1">
		<input type="hidden" name="action" value="ReportsAjax">

		<table width="100%" border="0" cellspacing="0" cellpadding="5" >
			<tr>
				<td  class="moduleName" width="80%"><?php echo $this->_tpl_vars['MOD']['LBL_CREATE_REPORT']; ?>
 </td>
				<td  width=30% nowrap class="componentName" align=right><?php echo $this->_tpl_vars['MOD']['LBL_CUSTOM_REPORTS']; ?>
</td>
			</tr>
		</table>
	
	
		<table width="100%" border="0" cellspacing="0" cellpadding="5" class="homePageMatrixHdr"> 
		<tr>
		<td>
		
					<table width="100%" border="0" cellspacing="0" cellpadding="0" > 
						<tr>
							<td width="25%" valign="top" >
								<table width="100%" border="0" cellpadding="5" cellspacing="0" class="small">
									<tr><td id="step1label" class="settingsTabSelected" style="padding-left:10px;">1. <?php echo $this->_tpl_vars['MOD']['LBL_REPORT_DETAILS']; ?>
</td></tr>
									<tr><td id="step2label" class="settingsTabList" style="padding-left:10px;">2. <?php echo $this->_tpl_vars['MOD']['LBL_RELATIVE_MODULE']; ?>
 </td></tr>
									<tr><td class="settingsTabList" style="padding-left:10px;">3. <?php echo $this->_tpl_vars['MOD']['LBL_REPORT_TYPE']; ?>
 </td></tr>
									<tr><td class="settingsTabList" style="padding-left:10px;">4. <?php echo $this->_tpl_vars['MOD']['LBL_SELECT_COLUMNS']; ?>
</td></tr>
									<tr><td class="settingsTabList" style="padding-left:10px;">5. <?php echo $this->_tpl_vars['MOD']['LBL_SPECIFY_GROUPING']; ?>
</td></tr>
									<tr><td class="settingsTabList" style="padding-left:10px;">6. <?php echo $this->_tpl_vars['MOD']['LBL_CALCULATIONS']; ?>
</td></tr>
									<tr><td class="settingsTabList" style="padding-left:10px;">7. <?php echo $this->_tpl_vars['MOD']['LBL_FILTERS']; ?>
 </td></tr>
									<tr><td class="settingsTabList" style="padding-left:10px;">8. <?php echo $this->_tpl_vars['MOD']['LBL_SHARING']; ?>
 </td></tr>
								</table>
							</td>
							<td width="75%" valign="top"  bgcolor=white >
								<!-- STEP 1 -->
								<div id="step1" style="display:block;">
									<table width="100%" border="0" cellpadding="10" cellspacing="0" bgcolor="#FFFFFF" height="500" class="small">
										<tr>
											<td colspan="2">
												<span class="genHeaderGray"><?php echo $this->_tpl_vars['MOD']['LBL_REPORT_DETAILS']; ?>
</span><br>
												<?php echo $this->_tpl_vars['MOD']['LBL_TYPE_THE_NAME']; ?>
 &amp; <?php echo $this->_tpl_vars['MOD']['LBL_DESCRIPTION_FOR_REPORT']; ?>
<hr>
											</td>
										</tr>
										<tr>
											<td width="25%" align="right" style="padding-right:5px;"><b><?php echo $this->_tpl_vars['MOD']['LBL_REPORT_NAME']; ?>
 : </b></td>
											<td width="75%" align="left" style="padding-left:5px;"><input type="text" name="reportname" class="txtBox" value="<?php echo $this->_tpl_vars['REPORTNAME']; ?>
"></td>
										</tr>
										<tr>
											<td width="25%" align="right" style="padding-right:5px;"><b><?php echo $this->_tpl_vars['MOD']['LBL_REP_FOLDER']; ?>
 : </b></td>
											<td width="75%" align="left" style="padding-left:5px;">
												<select name="reportfolder" class="txtBox">
												<?php $_from = $this->_tpl_vars['REP_FOLDERS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['folder']):
?>
												<?php if ($this->_tpl_vars['FOLDERID'] == $this->_tpl_vars['folder']['id']): ?>
													<option value="<?php echo $this->_tpl_vars['folder']['id']; ?>
" selected><?php echo $this->_tpl_vars['folder']['name']; ?>
</option>
												<?php else: ?>
													<option value="<?php echo $this->_tpl_vars['folder']['id']; ?>
"><?php echo $this->_tpl_vars['folder']['name']; ?>
</option>
												<?php endif; ?>
												<?php endforeach; endif; unset($_from); ?>
												</select>
											</td>
										</tr>
										<tr>
											<td align="right" style="padding-right:5px;" valign="top"><b><?php echo $this->_tpl_vars['MOD']['LBL_DESCRIPTION']; ?>
: </b></td>
											<td align="left" style="padding-left:5px;"><textarea name="reportdes" class="txtBox" rows="5"><?php echo $this->_tpl_vars['REPORTDESC']; ?>
</textarea></td>
										</tr>
										<tr> 
							 	                        <td colspan="2" height="310">&nbsp;</td> 
										</tr>
										
									</table>
								</div>
								<!-- STEP 2 -->
								<div id="step2" style="display:none;">
									<table class="small" bgcolor="#ffffff" border="0" cellpadding="5" cellspacing="0" height="500" width="100%">
										<tr height='10%'>
										<td colspan="2">
											<span class="genHeaderGray"><?php echo $this->_tpl_vars['MOD']['LBL_RELATIVE_MODULE']; ?>
</span><br>
											<?php echo $this->_tpl_vars['MOD']['LBL_SELECT_RELATIVE_MODULE_FOR_REPORT']; ?>
<hr>
										</td>
										</tr>
										<tr class='small' height='5%'><td colspan="2"><?php if ($this->_tpl_vars['RESTRICTEDMODULES'] != ''): ?> <div class='dvtCellInfo' style='margin-left: 10px;'><?php echo $this->_tpl_vars['MOD']['LBL_NOT_ACTIVE']; ?>
<font color="red"><b> <?php echo $this->_tpl_vars['RESTRICTEDMODULES']; ?>
 </b></font> </div><?php endif; ?></td>
										</tr>
										<tr valign=top  height="70%">
											<?php if (count($this->_tpl_vars['RELATEDMODULES']) > 0): ?>
												<td style="padding-right: 5px;" align="right" nowrap width="25%"><b><?php echo $this->_tpl_vars['MOD']['LBL_NEW_REP0_HDR2']; ?>
</b></td>
												<td style="padding-left: 5px; " align="left" width="75%">
													<!--select name="secondarymodule" class="txtBox">
													<option value="">--None--</option -->
													<table class="small">
													<?php $_from = $this->_tpl_vars['RELATEDMODULES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['relmod']):
?>
														<?php if ($this->_tpl_vars['SEC_MODULE'][$this->_tpl_vars['relmod']] == 1): ?>
															<tr valign='top'><td><input type='checkbox' name="secondarymodule_<?php echo $this->_tpl_vars['relmod']; ?>
" checked value="<?php echo $this->_tpl_vars['relmod']; ?>
" />
																<?php if ($this->_tpl_vars['APP'][$this->_tpl_vars['relmod']] != ''): ?>
																	<?php echo $this->_tpl_vars['APP'][$this->_tpl_vars['relmod']]; ?>

																<?php else: ?>
																	<?php echo $this->_tpl_vars['relmod']; ?>

																<?php endif; ?>
															</td></tr>
														<?php else: ?>
															<tr valign='top'><td><input type='checkbox' name="secondarymodule_<?php echo $this->_tpl_vars['relmod']; ?>
" value="<?php echo $this->_tpl_vars['relmod']; ?>
" />
																<?php if ($this->_tpl_vars['APP'][$this->_tpl_vars['relmod']] != ''): ?>
																	<?php echo $this->_tpl_vars['APP'][$this->_tpl_vars['relmod']]; ?>

																<?php else: ?>
																	<?php echo $this->_tpl_vars['relmod']; ?>

																<?php endif; ?>
															</td></tr>
														<?php endif; ?>
													<?php endforeach; endif; unset($_from); ?>
													</table>
													<!--/select-->
												</td>
											<?php else: ?>
												<td style="padding-right: 5px;" align="left" nowrap width="25%"><b><?php echo $this->_tpl_vars['MOD']['NO_REL_MODULES']; ?>
</b></td>
											<?php endif; ?>
										</tr>
										<tr><td colspan="2" height="350">&nbsp;</td></tr> 
									</table>
							</div>
						</td>
					</tr>
				</table>


			</td>
		</tr>
		</table>
		
	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="reportCreateBottom">
		<tr>
			<td align="right" style="padding:10px;">
			<input type="button" name="back_rep" id="back_rep" value=" &nbsp;&lt;&nbsp;<?php echo $this->_tpl_vars['APP']['LBL_BACK']; ?>
&nbsp; " disabled="disabled" class="crmbutton small cancel" onClick="changeStepsback();">
			&nbsp;<input type="button" name="next" id="next" value=" &nbsp;<?php echo $this->_tpl_vars['APP']['LNK_LIST_NEXT']; ?>
&nbsp;&rsaquo;&nbsp; " onClick="changeSteps();" class="crmbutton small save">
			&nbsp;<input type="button" name="cancel" value=" &nbsp;<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
&nbsp; " class="crmbutton small cancel" onClick="self.close();">
			</td>
		</tr>
	</table>
		</form>	

</td>
</tr>
</table>
	
	
</body>
</html>
<?php if ($this->_tpl_vars['BACK_WALK'] == 'true'): ?>
<?php echo '
<script>
	hide(\'step1\');
	show(\'step2\');
	document.getElementById(\'back_rep\').disabled = false;
	getObj(\'step1label\').className = \'settingsTabList\'; 
	getObj(\'step2label\').className = \'settingsTabSelected\';
</script>
'; ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['BACK'] == 'false'): ?>
<?php echo '
<script>
	hide(\'step1\');
	show(\'step2\');
	document.getElementById(\'back_rep\').disabled = true;
	getObj(\'step1label\').className = \'settingsTabList\'; 
	getObj(\'step2label\').className = \'settingsTabSelected\';
</script>
'; ?>

<?php endif; ?>