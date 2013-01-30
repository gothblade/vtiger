<?php /* Smarty version 2.6.18, created on 2013-01-29 02:59:24
         compiled from CustomView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'CustomView.tpl', 114, false),)), $this); ?>
<!--*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
*
 ********************************************************************************/
-->
<link rel="stylesheet" type="text/css" media="all" href="jscalendar/calendar-win2k-cold-1.css">
<?php echo $this->_tpl_vars['DATE_JS']; ?>

<script type="text/javascript" src="jscalendar/calendar.js"></script>
<script type="text/javascript" src="jscalendar/lang/calendar-<?php echo $this->_tpl_vars['APP']['LBL_JSCALENDAR_LANG']; ?>
.js"></script>
<script type="text/javascript" src="jscalendar/calendar-setup.js"></script>
<script type="text/javascript" src="modules/CustomView/CustomView.js"></script>
<script language="JavaScript" type="text/javascript" src="include/calculator/calc.js"></script>
<?php echo '
<form enctype="multipart/form-data" name="CustomView" method="POST" action="index.php" onsubmit="if(mandatoryCheck()){VtigerJS_DialogBox.block();} else{ return false; }">
'; ?>

<input type="hidden" name="module" value="CustomView">
<input type="hidden" name="action" value="Save">
<input type="hidden" name="parenttab" value="<?php echo $this->_tpl_vars['CATEGORY']; ?>
">
<input type="hidden" name="cvmodule" value="<?php echo $this->_tpl_vars['CVMODULE']; ?>
">
<input type="hidden" name="return_module" value="<?php echo $this->_tpl_vars['RETURN_MODULE']; ?>
">
<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['CUSTOMVIEWID']; ?>
">
<input type="hidden" name="return_action" value="<?php echo $this->_tpl_vars['RETURN_ACTION']; ?>
">
<input type="hidden" id="user_dateformat" name="user_dateformat" value="<?php echo $this->_tpl_vars['DATEFORMAT']; ?>
">
<script language="javascript" type="text/javascript">
var typeofdata = new Array();
typeofdata['V'] = ['e','n','s','ew','c','k'];
typeofdata['N'] = ['e','n','l','g','m','h'];
typeofdata['T'] = ['e','n','l','g','m','h'];
typeofdata['I'] = ['e','n','l','g','m','h'];
typeofdata['C'] = ['e','n'];
typeofdata['DT'] = ['e','n','l','g','m','h'];
typeofdata['D'] = ['e','n','l','g','m','h'];
typeofdata['NN'] = ['e','n','l','g','m','h'];
typeofdata['E'] = ['e','n','s','ew','c','k'];
var fLabels = new Array();
fLabels['e'] = alert_arr.EQUALS;
fLabels['n'] = alert_arr.NOT_EQUALS_TO;
fLabels['s'] = alert_arr.STARTS_WITH;
fLabels['ew'] = alert_arr.ENDS_WITH;
fLabels['c'] = alert_arr.CONTAINS;
fLabels['k'] = alert_arr.DOES_NOT_CONTAINS;
fLabels['l'] = alert_arr.LESS_THAN;
fLabels['g'] = alert_arr.GREATER_THAN;
fLabels['m'] = alert_arr.LESS_OR_EQUALS;
fLabels['h'] = alert_arr.GREATER_OR_EQUALS;
var noneLabel;
function goto_CustomAction(module)
{
        document.location.href = "index.php?module="+module+"&action=CustomAction&record=<?php echo $this->_tpl_vars['CUSTOMVIEWID']; ?>
";
}

function mandatoryCheck()
{

        var mandatorycheck = false;
        var i,j;
        var manCheck = new Array(<?php echo $this->_tpl_vars['MANDATORYCHECK']; ?>
);
        var showvalues = "<?php echo $this->_tpl_vars['SHOWVALUES']; ?>
";
        if(manCheck)
        {
                var isError = false;
                var errorMessage = "";
                if (trim(document.CustomView.viewName.value) == "") {
                        isError = true;
                        errorMessage += "\n<?php echo $this->_tpl_vars['MOD']['LBL_VIEW_NAME']; ?>
";
                }
                // Here we decide whether to submit the form.
                if (isError == true) {
                        alert("<?php echo $this->_tpl_vars['MOD']['Missing_required_fields']; ?>
:" + errorMessage);
                        return false;
                }
		
		for(i=1;i<=9;i++)
                {
                        var columnvalue = document.getElementById("column"+i).value;
                        if(columnvalue != null)
                        {
                                for(j=0;j<manCheck.length;j++)
                                {
                                        if(columnvalue == manCheck[j])
                                        {
                                                mandatorycheck = true;
                                        }
                                }
                                if(mandatorycheck == true)
                                {
					if(($("jscal_field_date_start").value.replace(/^\s+/g, '').replace(/\s+$/g, '').length!=0) || ($("jscal_field_date_end").value.replace(/^\s+/g, '').replace(/\s+$/g, '').length!=0))
						return stdfilterdateValidate();
					else
						return true;
                                }else
                                {
                                        mandatorycheck = false;
                                }
                        }
                }
        }
        if(mandatorycheck == false)
        {
                alert("<?php echo $this->_tpl_vars['APP']['MUSTHAVE_ONE_REQUIREDFIELD']; ?>
"+showvalues);
        }
        
        return false;
}
</script>

<table align="center" border="0" cellpadding="0" cellspacing="0" width="98%">
 <tbody><tr>
  <td valign="top"><img src="<?php echo vtiger_imageurl('showPanelTopLeft.gif', $this->_tpl_vars['THEME']); ?>
"></td>
  <td class="showPanelBg" valign="top" width="100%">
   <div class="small" style="padding: 20px;">
	<span class="lvtHeaderText"><a class="hdrLink" href="index.php?action=ListView&module=<?php echo $this->_tpl_vars['MODULE']; ?>
&parenttab=<?php echo $this->_tpl_vars['CATEGORY']; ?>
"><?php echo $this->_tpl_vars['MODULELABEL']; ?>
</a> &gt;
	<?php if ($this->_tpl_vars['EXIST'] == 'true' && $this->_tpl_vars['EXIST'] != ''): ?>
		<?php echo $this->_tpl_vars['MOD']['Edit_Custom_View']; ?>

	<?php else: ?>
	 	<?php echo $this->_tpl_vars['MOD']['New_Custom_View']; ?>

	<?php endif; ?>
	</span> <br>
      <hr noshade="noshade" size="1">
      <form name="EditView" method="post" enctype="multipart/form-data" action="index.php">
      <table align="center" border="0" cellpadding="0" cellspacing="0" width="95%">
      <tbody><tr>
      <td align="left" valign="top">
      <table width="100%"  border="0" cellspacing="0" cellpadding="5">
		<tr>
		 	<td colspan="4" class="detailedViewHeader"><strong><?php echo $this->_tpl_vars['MOD']['Details']; ?>
</strong></td>
		</tr>
		<tr>
			<td colspan=4 width="100%" style="padding:0px">
			<table cellpadding=4 cellspacing=0 width=100% border=0>
				<tr>
					<td class="dvtCellInfo" width="10%" align="right"><span class="style1">*</span><?php echo $this->_tpl_vars['MOD']['LBL_VIEW_NAME']; ?>

					</td>
					<td class="dvtCellInfo" width="30%">
						<input class="detailedViewTextBox" type="text" name='viewName' value="<?php echo $this->_tpl_vars['VIEWNAME']; ?>
" onfocus="this.className='detailedViewTextBoxOn'" onblur="this.className='detailedViewTextBox'" size="40"/>
		 			</td>
		 			<td class="dvtCellInfo" width="20%">
		  			<?php if ($this->_tpl_vars['CHECKED'] == 'checked'): ?>
		      			<input type="checkbox" name="setDefault" value="1" checked/><?php echo $this->_tpl_vars['MOD']['LBL_SETDEFAULT']; ?>

		  			<?php else: ?>
		      			<input type="checkbox" name="setDefault" value="0" /><?php echo $this->_tpl_vars['MOD']['LBL_SETDEFAULT']; ?>

		  			<?php endif; ?>
		 			</td>
		 			<td class="dvtCellInfo" width="20%">
		  			<?php if ($this->_tpl_vars['MCHECKED'] == 'checked'): ?>
		      			<input type="checkbox" name="setMetrics" value="1" checked/><?php echo $this->_tpl_vars['MOD']['LBL_LIST_IN_METRICS']; ?>

		  			<?php else: ?>
		      			<input type="checkbox" name="setMetrics" value="0" /><?php echo $this->_tpl_vars['MOD']['LBL_LIST_IN_METRICS']; ?>

		  			<?php endif; ?>
		 			</td>
					<td class="dvtCellInfo" width="20%">
					<?php if ($this->_tpl_vars['STATUS'] == '' || $this->_tpl_vars['STATUS'] == 1): ?>
						<input type="checkbox" name="setStatus" value="1"/>
					<?php elseif ($this->_tpl_vars['STATUS'] == 2): ?>
						<input type="checkbox" name="setStatus" value="2" checked/>
					<?php elseif ($this->_tpl_vars['STATUS'] == 3 || $this->_tpl_vars['STATUS'] == 0): ?>
						<input type="checkbox" name="setStatus" value="3" checked/>
					<?php endif; ?>
						<?php echo $this->_tpl_vars['MOD']['LBL_SET_AS_PUBLIC']; ?>

					</td>
				</tr>
			</table>
			</td>
		</tr>
		<tr><td colspan="4">&nbsp;</td></tr>
		<tr>
		 <td colspan="4" class="detailedViewHeader">
		  <b><?php echo $this->_tpl_vars['MOD']['LBL_STEP_2_TITLE']; ?>
 </b>
		 </td>
		</tr>
		<tr class="dvtCellLabel">
		  <td><select name="column1" id="column1" onChange="checkDuplicate();" class="small">
	                <option value=""><?php echo $this->_tpl_vars['MOD']['LBL_NONE']; ?>
</option>
			<?php $_from = $this->_tpl_vars['CHOOSECOLUMN1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['filteroption']):
?>
				<optgroup label="<?php echo $this->_tpl_vars['label']; ?>
" class=\"select\" style=\"border:none\">
					<?php $_from = $this->_tpl_vars['filteroption']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['text']):
?>
					 <?php $this->assign('option_values', $this->_tpl_vars['text']['text']); ?>
		   		         <option <?php echo $this->_tpl_vars['text']['selected']; ?>
 value=<?php echo $this->_tpl_vars['text']['value']; ?>
>
			<?php if ($this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']] != ''): ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']]; ?>
   <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']]; ?>

                                <?php endif; ?>
                        <?php elseif ($this->_tpl_vars['APP'][$this->_tpl_vars['option_values']] != ''): ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['APP'][$this->_tpl_vars['option_values']]; ?>
   <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['APP'][$this->_tpl_vars['option_values']]; ?>

                                <?php endif; ?>
                        <?php else: ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['option_values']; ?>
    <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['option_values']; ?>

                                <?php endif; ?>
                        <?php endif; ?>
					</option>
				<?php endforeach; endif; unset($_from); ?>
			<?php endforeach; endif; unset($_from); ?>
          	        <?php echo $this->_tpl_vars['CHOOSECOLUMN1']; ?>

	              </select></td>
		   <td><select name="column2" id="column2" onChange="checkDuplicate();" class="small">
                        <option value=""><?php echo $this->_tpl_vars['MOD']['LBL_NONE']; ?>
</option>
                        <?php $_from = $this->_tpl_vars['CHOOSECOLUMN2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['filteroption']):
?>
                                <optgroup label="<?php echo $this->_tpl_vars['label']; ?>
" class=\"select\" style=\"border:none\">
                                <?php $_from = $this->_tpl_vars['filteroption']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['text']):
?>
                              	 <?php $this->assign('option_values', $this->_tpl_vars['text']['text']); ?>
		   		         <option <?php echo $this->_tpl_vars['text']['selected']; ?>
 value=<?php echo $this->_tpl_vars['text']['value']; ?>
>
			<?php if ($this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']] != ''): ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']]; ?>
   <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']]; ?>

                                <?php endif; ?>
                        <?php elseif ($this->_tpl_vars['APP'][$this->_tpl_vars['option_values']] != ''): ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['APP'][$this->_tpl_vars['option_values']]; ?>
   <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['APP'][$this->_tpl_vars['option_values']]; ?>

                                <?php endif; ?>
                        <?php else: ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['option_values']; ?>
    <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['option_values']; ?>

                                <?php endif; ?>
                        <?php endif; ?>
					</option>
                                <?php endforeach; endif; unset($_from); ?>
                        <?php endforeach; endif; unset($_from); ?>
                        <?php echo $this->_tpl_vars['CHOOSECOLUMN2']; ?>

                      </select></td>
		   <td><select name="column3" id="column3" onChange="checkDuplicate();" class="small">
                        <option value=""><?php echo $this->_tpl_vars['MOD']['LBL_NONE']; ?>
</option>
                        <?php $_from = $this->_tpl_vars['CHOOSECOLUMN3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['filteroption']):
?>
                                <optgroup label="<?php echo $this->_tpl_vars['label']; ?>
" class=\"select\" style=\"border:none\">
                                <?php $_from = $this->_tpl_vars['filteroption']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['text']):
?>
                                    	 <?php $this->assign('option_values', $this->_tpl_vars['text']['text']); ?>
		   		         <option <?php echo $this->_tpl_vars['text']['selected']; ?>
 value=<?php echo $this->_tpl_vars['text']['value']; ?>
>
			<?php if ($this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']] != ''): ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']]; ?>
   <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']]; ?>

                                <?php endif; ?>
                        <?php elseif ($this->_tpl_vars['APP'][$this->_tpl_vars['option_values']] != ''): ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['APP'][$this->_tpl_vars['option_values']]; ?>
   <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['APP'][$this->_tpl_vars['option_values']]; ?>

                                <?php endif; ?>
                        <?php else: ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['option_values']; ?>
    <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['option_values']; ?>

                                <?php endif; ?>
                        <?php endif; ?>
					</option>
                                <?php endforeach; endif; unset($_from); ?>
                        <?php endforeach; endif; unset($_from); ?>
                        <?php echo $this->_tpl_vars['CHOOSECOLUMN3']; ?>

                      </select></td>
		   <td><select name="column4" id="column4" onChange="checkDuplicate();" class="small">
                        <option value=""><?php echo $this->_tpl_vars['MOD']['LBL_NONE']; ?>
</option>
                        <?php $_from = $this->_tpl_vars['CHOOSECOLUMN4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['filteroption']):
?>
                                <optgroup label="<?php echo $this->_tpl_vars['label']; ?>
" class=\"select\" style=\"border:none\">
                                <?php $_from = $this->_tpl_vars['filteroption']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['text']):
?>
                                    	 <?php $this->assign('option_values', $this->_tpl_vars['text']['text']); ?>
		   		         <option <?php echo $this->_tpl_vars['text']['selected']; ?>
 value=<?php echo $this->_tpl_vars['text']['value']; ?>
>
			<?php if ($this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']] != ''): ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']]; ?>
   <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']]; ?>

                                <?php endif; ?>
                        <?php elseif ($this->_tpl_vars['APP'][$this->_tpl_vars['option_values']] != ''): ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['APP'][$this->_tpl_vars['option_values']]; ?>
   <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['APP'][$this->_tpl_vars['option_values']]; ?>

                                <?php endif; ?>
                        <?php else: ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['option_values']; ?>
    <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['option_values']; ?>

                                <?php endif; ?>
                        <?php endif; ?>
					</option>
                                <?php endforeach; endif; unset($_from); ?>
                        <?php endforeach; endif; unset($_from); ?>
                        <?php echo $this->_tpl_vars['CHOOSECOLUMN4']; ?>

                      </select></td>
			
		</tr>
		<tr class="dvtCellInfo">
		   <td><select name="column5" id="column5" onChange="checkDuplicate();" class="small">
                        <option value=""><?php echo $this->_tpl_vars['MOD']['LBL_NONE']; ?>
</option>
                        <?php $_from = $this->_tpl_vars['CHOOSECOLUMN5']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['filteroption']):
?>
                                <optgroup label="<?php echo $this->_tpl_vars['label']; ?>
" class=\"select\" style=\"border:none\">
                                <?php $_from = $this->_tpl_vars['filteroption']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['text']):
?>
                                    	 <?php $this->assign('option_values', $this->_tpl_vars['text']['text']); ?>
		   		         <option <?php echo $this->_tpl_vars['text']['selected']; ?>
 value=<?php echo $this->_tpl_vars['text']['value']; ?>
>
			<?php if ($this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']] != ''): ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']]; ?>
   <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']]; ?>

                                <?php endif; ?>
                        <?php elseif ($this->_tpl_vars['APP'][$this->_tpl_vars['option_values']] != ''): ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['APP'][$this->_tpl_vars['option_values']]; ?>
   <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['APP'][$this->_tpl_vars['option_values']]; ?>

                                <?php endif; ?>
                        <?php else: ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['option_values']; ?>
    <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['option_values']; ?>

                                <?php endif; ?>
                        <?php endif; ?>
					</option>
                                <?php endforeach; endif; unset($_from); ?>
                        <?php endforeach; endif; unset($_from); ?>
                        <?php echo $this->_tpl_vars['CHOOSECOLUMN5']; ?>

                      </select></td>
                   <td><select name="column6" id="column6" onChange="checkDuplicate();" class="small">
                        <option value=""><?php echo $this->_tpl_vars['MOD']['LBL_NONE']; ?>
</option>
                        <?php $_from = $this->_tpl_vars['CHOOSECOLUMN6']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['filteroption']):
?>
                                <optgroup label="<?php echo $this->_tpl_vars['label']; ?>
" class=\"select\" style=\"border:none\">
                                <?php $_from = $this->_tpl_vars['filteroption']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['text']):
?>
                                   	 <?php $this->assign('option_values', $this->_tpl_vars['text']['text']); ?>
		   		         <option <?php echo $this->_tpl_vars['text']['selected']; ?>
 value=<?php echo $this->_tpl_vars['text']['value']; ?>
>
			<?php if ($this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']] != ''): ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']]; ?>
   <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']]; ?>

                                <?php endif; ?>
                        <?php elseif ($this->_tpl_vars['APP'][$this->_tpl_vars['option_values']] != ''): ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['APP'][$this->_tpl_vars['option_values']]; ?>
   <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['APP'][$this->_tpl_vars['option_values']]; ?>

                                <?php endif; ?>
                        <?php else: ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['option_values']; ?>
    <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['option_values']; ?>

                                <?php endif; ?>
                        <?php endif; ?>
					</option>
                                <?php endforeach; endif; unset($_from); ?>
                        <?php endforeach; endif; unset($_from); ?>
                        <?php echo $this->_tpl_vars['CHOOSECOLUMN6']; ?>

                      </select></td>
                   <td><select name="column7" id="column7" onChange="checkDuplicate();" class="small">
                        <option value=""><?php echo $this->_tpl_vars['MOD']['LBL_NONE']; ?>
</option>
                        <?php $_from = $this->_tpl_vars['CHOOSECOLUMN7']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['filteroption']):
?>
                                <optgroup label="<?php echo $this->_tpl_vars['label']; ?>
" class=\"select\" style=\"border:none\">
                                <?php $_from = $this->_tpl_vars['filteroption']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['text']):
?>
                                    	 <?php $this->assign('option_values', $this->_tpl_vars['text']['text']); ?>
		   		         <option <?php echo $this->_tpl_vars['text']['selected']; ?>
 value=<?php echo $this->_tpl_vars['text']['value']; ?>
>
			<?php if ($this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']] != ''): ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']]; ?>
   <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']]; ?>

                                <?php endif; ?>
                        <?php elseif ($this->_tpl_vars['APP'][$this->_tpl_vars['option_values']] != ''): ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['APP'][$this->_tpl_vars['option_values']]; ?>
   <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['APP'][$this->_tpl_vars['option_values']]; ?>

                                <?php endif; ?>
                        <?php else: ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['option_values']; ?>
    <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['option_values']; ?>

                                <?php endif; ?>
                        <?php endif; ?>
					</option>
                                <?php endforeach; endif; unset($_from); ?>
                        <?php endforeach; endif; unset($_from); ?>
                        <?php echo $this->_tpl_vars['CHOOSECOLUMN7']; ?>

                      </select></td>
                   <td><select name="column8" id="column8" onChange="checkDuplicate();" class="small">
                        <option value=""><?php echo $this->_tpl_vars['MOD']['LBL_NONE']; ?>
</option>
                        <?php $_from = $this->_tpl_vars['CHOOSECOLUMN8']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['filteroption']):
?>
                                <optgroup label="<?php echo $this->_tpl_vars['label']; ?>
" class=\"select\" style=\"border:none\">
                                <?php $_from = $this->_tpl_vars['filteroption']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['text']):
?>
                                    	 <?php $this->assign('option_values', $this->_tpl_vars['text']['text']); ?>
		   		         <option <?php echo $this->_tpl_vars['text']['selected']; ?>
 value=<?php echo $this->_tpl_vars['text']['value']; ?>
>
			<?php if ($this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']] != ''): ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']]; ?>
   <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']]; ?>

                                <?php endif; ?>
                        <?php elseif ($this->_tpl_vars['APP'][$this->_tpl_vars['option_values']] != ''): ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['APP'][$this->_tpl_vars['option_values']]; ?>
   <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['APP'][$this->_tpl_vars['option_values']]; ?>

                                <?php endif; ?>
                        <?php else: ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['option_values']; ?>
    <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['option_values']; ?>

                                <?php endif; ?>
                        <?php endif; ?>
					</option>
                                <?php endforeach; endif; unset($_from); ?>
                        <?php endforeach; endif; unset($_from); ?>
                        <?php echo $this->_tpl_vars['CHOOSECOLUMN8']; ?>

			</select></td>
		</tr>
		<tr class="dvtCellLabel">
		   <td><select name="column9" id="column9" onChange="checkDuplicate();" class="small">
                        <option value=""><?php echo $this->_tpl_vars['MOD']['LBL_NONE']; ?>
</option>
                        <?php $_from = $this->_tpl_vars['CHOOSECOLUMN9']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['filteroption']):
?>
                                <optgroup label="<?php echo $this->_tpl_vars['label']; ?>
" class=\"select\" style=\"border:none\">
                                <?php $_from = $this->_tpl_vars['filteroption']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['text']):
?>
                                    	 <?php $this->assign('option_values', $this->_tpl_vars['text']['text']); ?>
		   		         <option <?php echo $this->_tpl_vars['text']['selected']; ?>
 value=<?php echo $this->_tpl_vars['text']['value']; ?>
>
			<?php if ($this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']] != ''): ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']]; ?>
   <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['MOD'][$this->_tpl_vars['option_values']]; ?>

                                <?php endif; ?>
                        <?php elseif ($this->_tpl_vars['APP'][$this->_tpl_vars['option_values']] != ''): ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['APP'][$this->_tpl_vars['option_values']]; ?>
   <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['APP'][$this->_tpl_vars['option_values']]; ?>

                                <?php endif; ?>
                        <?php else: ?>
                                <?php if ($this->_tpl_vars['DATATYPE']['0'][$this->_tpl_vars['option_values']] == 'M'): ?>
                                        <?php echo $this->_tpl_vars['option_values']; ?>
    <?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>

                                <?php else: ?>
                                        <?php echo $this->_tpl_vars['option_values']; ?>

                                <?php endif; ?>
                        <?php endif; ?>
					 </option>
                                <?php endforeach; endif; unset($_from); ?>
                        <?php endforeach; endif; unset($_from); ?>
                        <?php echo $this->_tpl_vars['CHOOSECOLUMN9']; ?>

                        </select></td>
		     <td>&nbsp;</td>
		     <td>&nbsp;</td>
		     <td>&nbsp;</td>
		</tr>	
				<tr><td colspan="4">&nbsp;</td></tr>
		<tr><td colspan="4"><table align="center" border="0" cellpadding="0" cellspacing="0" width="95%">
		<tbody><tr>
		 <td>
		  <table class="small" border="0" cellpadding="3" cellspacing="0" width="100%">
		   <tbody><tr>
		    <td class="dvtTabCache" style="width: 10px;" nowrap>&nbsp;</td>
		     <?php if ($this->_tpl_vars['STDCOLUMNSCOUNT'] != 0): ?>	
		    <td style="width: 100px;" nowrap class="dvtSelectedCell" id="pi" onclick="fnLoadCvValues('pi','mi','mnuTab','mnuTab2')">
		     <b><?php echo $this->_tpl_vars['MOD']['LBL_STEP_3_TITLE']; ?>
</b>
		    </td>
		    <td class="dvtUnSelectedCell" style="width: 100px;" align="center" nowrap id="mi" onclick="fnLoadCvValues('mi','pi','mnuTab2','mnuTab')">
		     <b><?php echo $this->_tpl_vars['MOD']['LBL_STEP_4_TITLE']; ?>
</b>
		    </td>
		    <?php else: ?>
                    <td class="dvtSelectedCell" style="width: 100px;" align="center" nowrap id="mi">
                     <b><?php echo $this->_tpl_vars['MOD']['LBL_STEP_4_TITLE']; ?>
</b>
                    </td>

                    <?php endif; ?>	
		    <td class="dvtTabCache" nowrap style="width:55%;">&nbsp;</td>
		   </tr>
		   </tbody>
	          </table>
		 </td>
	        </tr>
		<tr>
		 <td align="left" valign="top">
		<?php if ($this->_tpl_vars['STDCOLUMNSCOUNT'] == 0): ?>
                        <?php $this->assign('stddiv', "style=display:none"); ?>
                        <?php $this->assign('advdiv', "style=display:block"); ?>
                <?php else: ?>
                        <?php $this->assign('stddiv', "style=display:block"); ?>
                        <?php $this->assign('advdiv', "style=display:none"); ?>
                <?php endif; ?>
		  <div id="mnuTab" <?php echo $this->_tpl_vars['stddiv']; ?>
>
		     <table width="100%" cellspacing="0" cellpadding="5" class="dvtContentSpace">
                      <tr><td><br>
			<table width="75%" border="0" cellpadding="5" cellspacing="0" align="center">
			  <tr><td colspan="2" class="detailedViewHeader"><b><?php echo $this->_tpl_vars['MOD']['Simple_Time_Filter']; ?>
</b></td></tr>
			  <tr>
			     <td width="75%" align="right" class="dvtCellLabel"><?php echo $this->_tpl_vars['MOD']['LBL_Select_a_Column']; ?>
 :</td>
			     <td width="25%" class="dvtCellInfo">
				<select name="stdDateFilterField" class="select small" onchange="standardFilterDisplay();">
				<?php $_from = $this->_tpl_vars['STDFILTERCOLUMNS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['stdfilter']):
?>
					<option <?php echo $this->_tpl_vars['stdfilter']['selected']; ?>
 value=<?php echo $this->_tpl_vars['stdfilter']['value']; ?>
><?php echo $this->_tpl_vars['stdfilter']['text']; ?>
</option>	
				<?php endforeach; endif; unset($_from); ?>
                                </select>
			  </tr>
			  <tr>
			     <td align="right" class="dvtCellLabel"><?php echo $this->_tpl_vars['MOD']['Select_Duration']; ?>
 :</td>
			     <td class="dvtCellInfo">
			        <select name="stdDateFilter" id="stdDateFilter" class="select small" onchange='showDateRange(this.options[this.selectedIndex].value )'>
				<?php $_from = $this->_tpl_vars['STDFILTERCRITERIA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['duration']):
?>
					<option <?php echo $this->_tpl_vars['duration']['selected']; ?>
 value=<?php echo $this->_tpl_vars['duration']['value']; ?>
><?php echo $this->_tpl_vars['duration']['text']; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
				</select>
			     </td>
			  </tr>
			  <tr>
			     <td align="right" class="dvtCellLabel"><?php echo $this->_tpl_vars['MOD']['Start_Date']; ?>
 :</td>
			     <td width="25%" align=left class="dvtCellInfo">
			     <?php if ($this->_tpl_vars['STDFILTERCRITERIA']['0']['selected'] == 'selected' || $this->_tpl_vars['CUSTOMVIEWID'] == ""): ?>
				<?php $this->assign('img_style', "visibility:visible"); ?>
				<?php $this->assign('msg_style', ""); ?>
			     <?php else: ?>
				<?php $this->assign('img_style', "visibility:hidden"); ?>
				<?php $this->assign('msg_style', 'readonly'); ?>
			     <?php endif; ?>	
			     <input name="startdate" id="jscal_field_date_start" type="text" size="10" class="textField small" value="<?php echo $this->_tpl_vars['STARTDATE']; ?>
" <?php echo $this->_tpl_vars['msg_style']; ?>
>
			     <img src="<?php echo $this->_tpl_vars['IMAGE_PATH']; ?>
btnL3Calendar.gif" id="jscal_trigger_date_start" style=<?php echo $this->_tpl_vars['img_style']; ?>
>
			     <font size=1><em old="(yyyy-mm-dd)">(<?php echo $this->_tpl_vars['DATEFORMAT']; ?>
)</em></font>
			     <script type="text/javascript">
			  		Calendar.setup ({
			 		inputField : "jscal_field_date_start", ifFormat : "<?php echo $this->_tpl_vars['JS_DATEFORMAT']; ?>
", showsTime : false, button : "jscal_trigger_date_start", singleClick : true, step : 1
					})
			     </script></td>
	            	  </tr>
			  <tr>
			     <td align="right" class="dvtCellLabel"><?php echo $this->_tpl_vars['MOD']['End_Date']; ?>
 :</td> 
  			     <td width="25%" align=left class="dvtCellInfo">
			     <input name="enddate" <?php echo $this->_tpl_vars['msg_style']; ?>
 id="jscal_field_date_end" type="text" size="10" class="textField small" value="<?php echo $this->_tpl_vars['ENDDATE']; ?>
">
			     <img src="<?php echo $this->_tpl_vars['IMAGE_PATH']; ?>
btnL3Calendar.gif" id="jscal_trigger_date_end" style=<?php echo $this->_tpl_vars['img_style']; ?>
>
			     <font size=1><em old="(yyyy-mm-dd)">(<?php echo $this->_tpl_vars['DATEFORMAT']; ?>
)</em></font>
			     <script type="text/javascript">
					Calendar.setup ({
					inputField : "jscal_field_date_end", ifFormat : "<?php echo $this->_tpl_vars['JS_DATEFORMAT']; ?>
", showsTime : false, button : "jscal_trigger_date_end", singleClick : true, step : 1
					})
			     </script></td>
			  </tr>
			</table>
		      </td></tr>
		      <tr><td>&nbsp;</td></tr>
            </table>
   </div>
   <div id="mnuTab2" <?php echo $this->_tpl_vars['advdiv']; ?>
 >
      <table width="100%" cellspacing="0" cellpadding="5" class="dvtContentSpace">
       <tr><td>&nbsp;</td></tr>
       <tr><td class="dvtCellInfo"><?php echo $this->_tpl_vars['MOD']['LBL_AF_HDR1']; ?>
<br /><br />
	<li style="margin-left:30px;"><?php echo $this->_tpl_vars['MOD']['LBL_AF_HDR2']; ?>
</li>
	<li style="margin-left:30px;"><?php echo $this->_tpl_vars['MOD']['LBL_AF_HDR3']; ?>
</li>
	<br /><br />
       </td></tr>
       <tr><td>
	<table width="75%" border="0" cellpadding="5" cellspacing="0" align="center">
	  <tr><td colspan="3" class="detailedViewHeader"><b><?php echo $this->_tpl_vars['MOD']['LBL_RULE']; ?>
</b></td></tr>
	  
	  <tr class="dvtCellLabel">
          <td><nobr><select name="fcol1" id="fcol1" onchange="updatefOptions(this, 'fop1');" class="small">
              <option value=""><?php echo $this->_tpl_vars['MOD']['LBL_NONE']; ?>
</option>
              <?php $_from = $this->_tpl_vars['BLOCK1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['filteroption']):
?>
                <optgroup label="<?php echo $this->_tpl_vars['label']; ?>
" class=\"select\" style=\"border:none\">
                <?php $_from = $this->_tpl_vars['filteroption']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['text']):
?>
                  <option <?php echo $this->_tpl_vars['text']['selected']; ?>
 value=<?php echo $this->_tpl_vars['text']['value']; ?>
><?php echo $this->_tpl_vars['text']['text']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
              <?php endforeach; endif; unset($_from); ?>
              </select> &nbsp; <select name="fop1" id="fop1" class="small">
              <option value=""><?php echo $this->_tpl_vars['MOD']['LBL_NONE']; ?>
</option>
              <?php $_from = $this->_tpl_vars['FOPTION1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['criteria']):
?>
                <option <?php echo $this->_tpl_vars['criteria']['selected']; ?>
 value=<?php echo $this->_tpl_vars['criteria']['value']; ?>
><?php echo $this->_tpl_vars['criteria']['text']; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
              </select>&nbsp; <input name="fval1" id="fval1" type="text" size=30 maxlength=80 value="<?php echo $this->_tpl_vars['VALUE1']; ?>
" class="small">
	      <span id="andfcol1"><?php echo $this->_tpl_vars['AND_TEXT1']; ?>
</span></nobr>
            </td>
        </tr>
	<tr class="dvtCellInfo">
          <td><nobr><select name="fcol2" id="fcol2" onchange="updatefOptions(this, 'fop2');" class="small">
              <option value=""><?php echo $this->_tpl_vars['MOD']['LBL_NONE']; ?>
</option>
              <?php $_from = $this->_tpl_vars['BLOCK2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['filteroption']):
?>
                <optgroup label="<?php echo $this->_tpl_vars['label']; ?>
" class=\"select\" style=\"border:none\">
                <?php $_from = $this->_tpl_vars['filteroption']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['text']):
?>
                  <option <?php echo $this->_tpl_vars['text']['selected']; ?>
 value=<?php echo $this->_tpl_vars['text']['value']; ?>
><?php echo $this->_tpl_vars['text']['text']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
              <?php endforeach; endif; unset($_from); ?>
              </select> &nbsp; <select name="fop2" id="fop2" class="small">
              <option value=""><?php echo $this->_tpl_vars['MOD']['LBL_NONE']; ?>
</option>
              <?php $_from = $this->_tpl_vars['FOPTION2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['criteria']):
?>
                <option <?php echo $this->_tpl_vars['criteria']['selected']; ?>
 value=<?php echo $this->_tpl_vars['criteria']['value']; ?>
><?php echo $this->_tpl_vars['criteria']['text']; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
              </select>&nbsp; <input name="fval2" id="fval2" type="text" size=30 maxlength=80 value="<?php echo $this->_tpl_vars['VALUE2']; ?>
" class="small">
	      <span id="andfcol2"><?php echo $this->_tpl_vars['AND_TEXT2']; ?>
</span></nobr>
            </td>
        </tr>
	<tr class="dvtCellLabel">
          <td><nobr><select name="fcol3" id="fcol3" onchange="updatefOptions(this, 'fop3');" class="small">
              <option value=""><?php echo $this->_tpl_vars['MOD']['LBL_NONE']; ?>
</option>
              <?php $_from = $this->_tpl_vars['BLOCK3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['filteroption']):
?>
                <optgroup label="<?php echo $this->_tpl_vars['label']; ?>
" class=\"select\" style=\"border:none\">
                <?php $_from = $this->_tpl_vars['filteroption']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['text']):
?>
                  <option <?php echo $this->_tpl_vars['text']['selected']; ?>
 value=<?php echo $this->_tpl_vars['text']['value']; ?>
><?php echo $this->_tpl_vars['text']['text']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
              <?php endforeach; endif; unset($_from); ?>
              </select> &nbsp; <select name="fop3" id="fop3" class="small">
              <option value=""><?php echo $this->_tpl_vars['MOD']['LBL_NONE']; ?>
</option>
              <?php $_from = $this->_tpl_vars['FOPTION3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['criteria']):
?>
                <option <?php echo $this->_tpl_vars['criteria']['selected']; ?>
 value=<?php echo $this->_tpl_vars['criteria']['value']; ?>
><?php echo $this->_tpl_vars['criteria']['text']; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
              </select>&nbsp; <input name="fval3" id="fval3" type="text" size=30 maxlength=80 value="<?php echo $this->_tpl_vars['VALUE3']; ?>
" class="small">
	      <span id="andfcol3"><?php echo $this->_tpl_vars['AND_TEXT3']; ?>
</span></nobr>
            </td>
        </tr>
	<tr class="dvtCellInfo">
          <td><nobr><select name="fcol4" id="fcol4" onchange="updatefOptions(this, 'fop4');" class="small">
              <option value=""><?php echo $this->_tpl_vars['MOD']['LBL_NONE']; ?>
</option>
              <?php $_from = $this->_tpl_vars['BLOCK4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['filteroption']):
?>
                <optgroup label="<?php echo $this->_tpl_vars['label']; ?>
" class=\"select\" style=\"border:none\">
                <?php $_from = $this->_tpl_vars['filteroption']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['text']):
?>
                  <option <?php echo $this->_tpl_vars['text']['selected']; ?>
 value=<?php echo $this->_tpl_vars['text']['value']; ?>
><?php echo $this->_tpl_vars['text']['text']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
              <?php endforeach; endif; unset($_from); ?>
              </select> &nbsp; <select name="fop4" id="fop4" class="small">
              <option value=""><?php echo $this->_tpl_vars['MOD']['LBL_NONE']; ?>
</option>
              <?php $_from = $this->_tpl_vars['FOPTION4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['criteria']):
?>
                <option <?php echo $this->_tpl_vars['criteria']['selected']; ?>
 value=<?php echo $this->_tpl_vars['criteria']['value']; ?>
><?php echo $this->_tpl_vars['criteria']['text']; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
              </select>&nbsp; <input name="fval4" id="fval4" type="text" size=30 maxlength=80 value="<?php echo $this->_tpl_vars['VALUE4']; ?>
" class="small">
	      <span id="andfcol4"><?php echo $this->_tpl_vars['AND_TEXT4']; ?>
</span></nobr>
            </td>
        </tr>
	<tr class="dvtCellLabel">
          <td><nobr><select name="fcol5" id="fcol5" onchange="updatefOptions(this, 'fop5');" class="small">
              <option value=""><?php echo $this->_tpl_vars['MOD']['LBL_NONE']; ?>
</option>
              <?php $_from = $this->_tpl_vars['BLOCK5']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['filteroption']):
?>
                <optgroup label="<?php echo $this->_tpl_vars['label']; ?>
" class=\"select\" style=\"border:none\">
                <?php $_from = $this->_tpl_vars['filteroption']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['text']):
?>
                  <option <?php echo $this->_tpl_vars['text']['selected']; ?>
 value=<?php echo $this->_tpl_vars['text']['value']; ?>
><?php echo $this->_tpl_vars['text']['text']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
              <?php endforeach; endif; unset($_from); ?>
              </select> &nbsp; <select name="fop5" id="fop5" class="small">
              <option value=""><?php echo $this->_tpl_vars['MOD']['LBL_NONE']; ?>
</option>
              <?php $_from = $this->_tpl_vars['FOPTION5']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['criteria']):
?>
                <option <?php echo $this->_tpl_vars['criteria']['selected']; ?>
 value=<?php echo $this->_tpl_vars['criteria']['value']; ?>
><?php echo $this->_tpl_vars['criteria']['text']; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
              </select>&nbsp; <input name="fval5" id="fval5" type="text" size=30 maxlength=80 value="<?php echo $this->_tpl_vars['VALUE5']; ?>
" class="small">
	      <span id="andfcol5"><?php echo $this->_tpl_vars['AND_TEXT5']; ?>
</span></nobr>
            </td>
        </tr>

	  	</table>
       </td></tr>
       <tr><td>&nbsp;</td></tr>
     </table>
   </div>
  </td></tr>
  </table>
  </td></tr>
  <tr><td colspan="4">&nbsp;</td></tr>
  <tr><td colspan="4" style="padding: 5px;">
	<div align="center">
	  <input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
 [Alt+S]" accesskey="S" class="crmbutton small save"  name="button2" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" style="width: 70px;" type="submit" onClick="return checkDuplicate();"/>
	  <input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
 [Alt+X]" accesskey="X" class="crmbutton small cancel" name="button2" onclick='window.history.back()' value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" style="width: 70px;" type="button" />
	</div>
  </td></tr>
  <tr><td colspan="4">&nbsp;</td></tr>
</table>
</table>
</table>
<?php echo $this->_tpl_vars['STDFILTER_JAVASCRIPT']; ?>

<?php echo $this->_tpl_vars['JAVASCRIPT']; ?>

<!-- to show the mandatory fields while creating new customview -->
<script language="javascript" type="text/javascript">
var k;
var colOpts;
var manCheck = new Array(<?php echo $this->_tpl_vars['MANDATORYCHECK']; ?>
);
<?php echo '
if(document.CustomView.record.value == \'\')
{
  for(k=0;k<manCheck.length;k++)
  {
      selname = "column"+(k+1);
      colOpts = document.getElementById(selname).options;
      for (l=0;l<colOpts.length;l++)
      {
        if(colOpts[l].value == manCheck[k])
        {
          colOpts[l].selected = true;
        }
      }
  }
}
function checkDuplicate()
{
	if(getObj(\'viewName\').value.toLowerCase() == \'all\')
	{
		alert(alert_arr.ALL_FILTER_CREATION_DENIED);
		return false;
	}
	var cvselect_array = new Array(\'column1\',\'column2\',\'column3\',\'column4\',\'column5\',\'column6\',\'column7\',\'column8\',\'column9\')
		for(var loop=0;loop < cvselect_array.length-1;loop++)
		{
			selected_cv_columnvalue = $(cvselect_array[loop]).options[$(cvselect_array[loop]).selectedIndex].value;
			if(selected_cv_columnvalue != \'\')
			{	
				for(var iloop=0;iloop < cvselect_array.length;iloop++)
				{
					if(iloop == loop)
						iloop++;
					selected_cv_icolumnvalue = $(cvselect_array[iloop]).options[$(cvselect_array[iloop]).selectedIndex].value;	
					if(selected_cv_columnvalue == selected_cv_icolumnvalue)
					{
						'; ?>

                                                alert('<?php echo $this->_tpl_vars['APP']['COLUMNS_CANNOT_BE_DUPLICATED']; ?>
');
                                                $(cvselect_array[iloop]).selectedIndex = 0;
                                                return false;
                                                <?php echo '
					}

				}
			}
		}

if(!checkval())
	return false;


		return true;
}
checkDuplicate();
function stdfilterdateValidate()
{
	if(!dateValidate("startdate",alert_arr.STDFILTER+" - "+alert_arr.STARTDATE,"OTH"))
	{
		getObj("startdate").focus()
		return false;
	}
	else if(!dateValidate("enddate",alert_arr.STDFILTER+" - "+alert_arr.ENDDATE,"OTH"))
	{
		getObj("enddate").focus()
		return false;
	}
	else
	{
		if (!dateComparison("enddate",alert_arr.STDFILTER+" - "+alert_arr.ENDDATE,"startdate",alert_arr.STDFILTER+" - "+alert_arr.STARTDATE,"GE")) {
                        getObj("enddate").focus()
                        return false
                } else return true;
	}
}
for(var i=1;i<=5;i++)
{
	var obj=document.getElementById("fcol"+i);
	if(obj.selectedIndex != 0)
		updatefOptions(obj, \'fop\'+i);
}
standardFilterDisplay();
'; ?>

</script>