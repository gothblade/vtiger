<?php /* Smarty version 2.6.18, created on 2013-01-29 07:28:59
         compiled from ImportStep2.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'ImportStep2.tpl', 222, false),array('function', 'math', 'ImportStep2.tpl', 300, false),)), $this); ?>


<script type="text/javascript" src="include/js/general.js"></script>
<script type="text/javascript" src="include/js/Merge.js"></script>
<script>

function getImportSavedMap(impoptions)
{
	var mapping = impoptions.options[impoptions.options.selectedIndex].value;

	//added to show the delete link
	if(mapping != -1)
		document.getElementById("delete_mapping").style.visibility = "visible";
	else
		document.getElementById("delete_mapping").style.visibility = "hidden";

	new Ajax.Request(
		'index.php',
		{queue: {position: 'end', scope: 'command'},
			method: 'post',
			postBody: 'module=Import&mapping='+mapping+'&action=ImportAjax',
			onComplete: function(response) {
					$("importmapform").innerHTML = response.responseText;
				}
			}
		);
}
function deleteMapping()
{
	var options_collection = document.getElementById("saved_source").options;
	var mapid = options_collection[options_collection.selectedIndex].value;

	new Ajax.Request(
		'index.php',
		{queue: {position: 'end', scope: 'command'},
			method: 'post',
			postBody: 'module=Import&mapping='+mapid+'&action=ImportAjax&delete_map='+mapid,
			onComplete: function(response) {
					$("importmapform").innerHTML = response.responseText;
				}
			}
		);

	//we have emptied the map name from the select list
	document.getElementById("saved_source").options[options_collection.selectedIndex] = null;
	document.getElementById("delete_mapping").style.visibility = "hidden";
	alert("<?php echo $this->_tpl_vars['APP']['MAP_DELETED_INFO']; ?>
");
}
<?php echo '
function check_submit()
{
    var selectedColStr = "";
    if(document.getElementById("merge_check").checked == true)
    {
    	setObjects();
    	for (i=0;i<selectedColumnsObj.options.length;i++) 
	        selectedColStr += selectedColumnsObj.options[i].value + ",";
	    if (selectedColStr == "")
	    {
	    	'; ?>

	    	alert('<?php echo $this->_tpl_vars['APP']['LBL_MERGE_SHOULDHAVE_INFO']; ?>
');
	    	<?php echo '
	    	return false;
	    }
	    document.Import.selectedColumnsString.value = selectedColStr;
	}
	if(validate_import_map())
	{	
		if(document.getElementById("save_map").checked)
	        {
	                var name=document.getElementById("save_map_as").value
	                $("status").style.display="block";
	                new Ajax.Request(
	                \'index.php\',
	                {queue: {position: \'end\', scope: \'command\'},
	                method: \'post\',
                        postBody: \'module=Import&name=\'+name+\'&ajax_action=check_dup_map_name&action=ImportAjax\',
                        onComplete: function(response) {

			if(response.responseText == \'true\')
        	                document.Import.submit();
'; ?>
              else
				if(confirm("<?php echo $this->_tpl_vars['APP']['MAP_NAME_EXISTS']; ?>
"))
<?php echo '					document.Import.submit();
	                	$("status").style.display="none";

                			                }
                        }
			                );


		}
		else
			document.Import.submit();
	}
}

//added for duplicate handling -srini
function show_option(obj)
{
	var sel_value = obj.value;
	if(sel_value == \'auto\')
	{
		$("auto_option").innerHTML = $("option_div").innerHTML;	
	}
	else
		$("auto_option").innerHTML = "&nbsp;";
}

function showMergeOptions(curObj, arg)
{
	var ele = curObj;
	var mergeoptions = document.getElementsByName(\'dup_type\');
	if (mergeoptions != null && ele != null) {
		if (ele.checked == true) {
			mergeoptions[0].checked = true;
			mergeoptions[1].checked = false;
		} else {
			mergeoptions[0].checked = false;
			mergeoptions[1].checked = false;
		}
		mergeshowhide(arg);
	}
}
'; ?>

      var moveupLinkObj,moveupDisabledObj,movedownLinkObj,movedownDisabledObj;
        function setObjects() 
        {
            availListObj=getObj("availList")
            selectedColumnsObj=getObj("selectedColumns")

        }

        function addColumn() 
        {
        setObjects();
            for (i=0;i<selectedColumnsObj.length;i++) 
            {
                selectedColumnsObj.options[i].selected=false
            }

            for (i=0;i<availListObj.length;i++) 
            {
                if (availListObj.options[i].selected==true) 
                {            	
                	var rowFound=false;
                	var existingObj=null;
                    for (j=0;j<selectedColumnsObj.length;j++) 
                    {
                        if (selectedColumnsObj.options[j].value==availListObj.options[i].value) 
                        {
                            rowFound=true
                            existingObj=selectedColumnsObj.options[j]
                            break
                        }
                    }

                    if (rowFound!=true) 
                    {
                        var newColObj=document.createElement("OPTION")
                        newColObj.value=availListObj.options[i].value
                        if (browser_ie) newColObj.innerText=availListObj.options[i].innerText
                        else if (browser_nn4 || browser_nn6) newColObj.text=availListObj.options[i].text
                        selectedColumnsObj.appendChild(newColObj)
                        availListObj.options[i].selected=false
                        newColObj.selected=true
                        rowFound=false
                    } 
                    else 
                    {
                        if(existingObj != null) existingObj.selected=true
                    }
                }
            }
        }

        function delColumn() 
        {
        setObjects();
            for (i=selectedColumnsObj.options.length;i>0;i--) 
            {
                if (selectedColumnsObj.options.selectedIndex>=0)
                selectedColumnsObj.remove(selectedColumnsObj.options.selectedIndex)
            }
        }
                        
        function formSelectColumnString()
        {
            var selectedColStr = "";
            setObjects();
            for (i=0;i<selectedColumnsObj.options.length;i++) 
            {
                selectedColStr += selectedColumnsObj.options[i].value + ",";
            }
            if (selectedColStr == "")
            {
            	alert('<?php echo $this->_tpl_vars['APP']['LBL_MERGE_SHOULDHAVE_INFO']; ?>
');
            	return false;
            }
            document.Import.selectedColumnsString.value = selectedColStr;
            return;
        }
	setObjects();	
</script>
<!-- header - level 2 tabs -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Buttons_List1.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	

<table align="center" border="0" cellpadding="0" cellspacing="0" width="98%" class="small">
<tbody>
   <tr>
	<td valign="top"><img src="<?php echo vtiger_imageurl('showPanelTopLeft.gif', $this->_tpl_vars['THEME']); ?>
" /></td>
	<td class="showPanelBg" valign="top" width="100%">
		<table  cellpadding="0" cellspacing="0" width="100%" class="small">
		   <tr>
			<td width="75%" valign=top>
				<form enctype="multipart/form-data" name="Import" method="POST" action="index.php" onsubmit="VtigerJS_DialogBox.block();">
				<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['MODULE']; ?>
">
				<input type="hidden" name="action" value="Import">
				<input type="hidden" name="step" value="3">
				<input type="hidden" name="has_header" value="<?php echo $this->_tpl_vars['HAS_HEADER']; ?>
">
				<input type="hidden" name="source" value="<?php echo $this->_tpl_vars['SOURCE']; ?>
">
				<input type="hidden" name="delimiter" value="<?php echo $this->_tpl_vars['DELIMITER']; ?>
">
				<input type="hidden" name="tmp_file" value="<?php echo $this->_tpl_vars['TMP_FILE']; ?>
">
				<input type="hidden" name="return_module" value="<?php echo $this->_tpl_vars['RETURN_MODULE']; ?>
">
				<input type="hidden" name="return_id" value="<?php echo $this->_tpl_vars['RETURN_ID']; ?>
">
				<input type="hidden" name="return_action" value="<?php echo $this->_tpl_vars['RETURN_ACTION']; ?>
">
				<input type="hidden" name="parenttab" value="<?php echo $this->_tpl_vars['CATEGORY']; ?>
">

				<!-- IMPORT LEADS STARTS HERE  -->
				<br />
				<table align="center" cellpadding="5" cellspacing="0" width="95%" class="mailClient importLeadUI small">
				   <tr>
					<td class="mailClientBg genHeaderSmall" height="50" valign="middle" align="left" ><?php echo $this->_tpl_vars['MOD']['LBL_MODULE_NAME']; ?>
 <?php echo $this->_tpl_vars['MODULELABEL']; ?>
</td>
				   </tr>
				   <tr>
					<td>&nbsp;</td>
				   </tr>
				   <tr>
					<td align="left"  style="padding-left:40px;">
							<span class="genHeaderGray"><?php echo $this->_tpl_vars['MOD']['LBL_STEP_2_4']; ?>
</span>&nbsp;
						<span class="genHeaderSmall"><?php echo $this->_tpl_vars['MODULELABEL']; ?>
 <?php echo $this->_tpl_vars['MOD']['LBL_LIST_MAPPING']; ?>
 </span>
					</td>
				   </tr>
				   <tr>
					<td align="left" style="padding-left:40px;"> 
					   <?php echo $this->_tpl_vars['MOD']['LBL_STEP_2_MSG']; ?>
 <?php echo $this->_tpl_vars['MODULELABEL']; ?>
 <?php echo $this->_tpl_vars['MOD']['LBL_STEP_2_MSG1']; ?>
 
					   <?php echo $this->_tpl_vars['MOD']['LBL_STEP_2_TXT']; ?>
 <?php echo $this->_tpl_vars['MODULELABEL']; ?>
. 
					</td>
				   </tr>
				   <tr>
					<td>&nbsp;</td>
				   </tr>
				   <tr>
					<td align="left" style="padding-left:40px;" >
						<input type="checkbox" name="use_saved_mapping" id="saved_map_checkbox" onclick="ActivateCheckBox()" />&nbsp;&nbsp;
						<?php echo $this->_tpl_vars['MOD']['LBL_USE_SAVED_MAPPING']; ?>
&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['SAVED_MAP_LISTS']; ?>

					</td>
				   </tr>
				   <tr>
					<td  align="left"style="padding-left:40px;padding-right:40px;">
						<table style="background-color: rgb(204, 204, 204);" class="small" border="0" cellpadding="5" cellspacing="1" width="100%" >
						   <tr bgcolor="white">
							<td width="25%" class="lvtCol" align="center"><b><?php echo $this->_tpl_vars['MOD']['LBL_MAPPING']; ?>
</b></td>
							<?php if ($this->_tpl_vars['HASHEADER'] == 1): ?>
							<td width="25%" bgcolor="#E1E1E1"  ><b><?php echo $this->_tpl_vars['MOD']['LBL_HEADERS']; ?>
</b></td>
							<td width="25%" ><b><?php echo $this->_tpl_vars['MOD']['LBL_ROW']; ?>
 1</b></td>
							<td width="25%" ><b><?php echo $this->_tpl_vars['MOD']['LBL_ROW']; ?>
 2</b></td>
							<?php else: ?>
							<td width="25%" ><b><?php echo $this->_tpl_vars['MOD']['LBL_ROW']; ?>
 1</b></td>
							<td width="25%" ><b><?php echo $this->_tpl_vars['MOD']['LBL_ROW']; ?>
 2</b></td>
							<td width="25%" ><b><?php echo $this->_tpl_vars['MOD']['LBL_ROW']; ?>
 3</b></td>
							<?php endif; ?>
						   </tr>
						</table>
						<?php $this->assign('Firstrow', $this->_tpl_vars['FIRSTROW']); ?>
						<?php $this->assign('Secondrow', $this->_tpl_vars['SECONDROW']); ?>
						<?php $this->assign('Thirdrow', $this->_tpl_vars['THIRDROW']); ?>				
						<table border="0" cellpadding="0" cellspacing="0" width="100%">
						   <tr>
							<td width="25%" valign="top">
								<div id="importmapform">
									<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ImportMap.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
								</div>
							</td>	
							<td valign="top">
								<table border="0" cellpadding="0" cellspacing="1" width="100%" valign="top"  class="small">
								   <?php $_from = $this->_tpl_vars['Firstrow']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['iter'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['iter']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['row1']):
        $this->_foreach['iter']['iteration']++;
?>
									<?php $this->assign('counter', $this->_foreach['iter']['iteration']); ?>
									<?php echo smarty_function_math(array('assign' => 'num','equation' => "x - y",'x' => $this->_tpl_vars['counter'],'y' => 1), $this);?>
	
								   <tr bgcolor="white" >
									<?php if ($this->_tpl_vars['HASHEADER'] == 1): ?>
										<td bgcolor="#E1E1E1" width="33%" height="30">&nbsp;<?php echo $this->_tpl_vars['row1']; ?>
</td>
										<td width="34%">&nbsp;<?php echo $this->_tpl_vars['Secondrow'][$this->_tpl_vars['num']]; ?>
</td>
										<td>&nbsp;<?php echo $this->_tpl_vars['Thirdrow'][$this->_tpl_vars['num']]; ?>
</td>
									<?php else: ?>
										<td width="31%" height="30">&nbsp;<?php echo $this->_tpl_vars['row1']; ?>
</td>
										<td width="30%">&nbsp;<?php echo $this->_tpl_vars['Secondrow'][$this->_tpl_vars['num']]; ?>
</td>
										<td>&nbsp;<?php echo $this->_tpl_vars['Thirdrow'][$this->_tpl_vars['num']]; ?>
</td>
									<?php endif; ?>	
								   </tr>
								   <?php endforeach; endif; unset($_from); ?>
								</table>
							</td>
						   </tr>
						</table>	
					</td>
				   </tr>
				   <tr>
					<td align="left" style="padding-left:40px;" >
						<input type="checkbox" name="save_map" id="save_map" onclick="set_readonly(this.form)" />&nbsp;&nbsp;
						<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_AS_CUSTOM']; ?>
 &nbsp;&nbsp;&nbsp;
						<input type="text" readonly name="save_map_as" id="save_map_as" value="" class="importBox" >
					</td>
				   </tr>
				   <!-- added for duplicate handling -srini -->
						<tr>
							<td>&nbsp;</td>
					   	</tr>
					   	<tr>
					   		<td align="left" style="padding-left:40px;" >
					   		<?php if ($this->_tpl_vars['DUPLICATESHANDLING'] == 'DuplicatesHandling'): ?>
					   			<input id="merge_check" type="checkbox" onclick="showMergeOptions(this, 'importMergeDup')"/>
								<span class="genHeaderGray"><?php echo $this->_tpl_vars['MOD']['LBL_STEP_3_4']; ?>
 </span>
								<span class="genHeaderSmall"><?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_MERGING']; ?>
 </span>
								<span>(<?php echo $this->_tpl_vars['APP']['LBL_SELECT_TO_ENABLE_MERGING']; ?>
)</span> 
							<?php else: ?>	
					   			<input id="merge_check" type="checkbox" disabled="true" onclick="mergeshowhide(this, 'importMergeDup')"/>
								<span class="genHeaderGray"><?php echo $this->_tpl_vars['MOD']['LBL_STEP_3_4']; ?>
 </span>
								<span class="genHeaderSmall"><?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_MERGING']; ?>
 </span>
								<span style="color:red;">(<?php echo $this->_tpl_vars['APP']['LBL_PERMISSION']; ?>
)</span>
					   		<?php endif; ?>
							</td>
					   	</tr>
					   	<tr>
	                   		<td align="left"  style="padding-left:40px;">
							<div id="importMergeDup" style="z-index:1;display:none;position:relative;">
		                        
		                        <span  style="padding-left:40px;font-weight:bold;"><?php echo $this->_tpl_vars['MOD']['Select_Criteria_For_Duplicate']; ?>
</span>
	                         
								<table align="middle" border=0 width=100%>
					           		<tr>
		                           		<td align="left" style="padding-left:50px;">
		                                	<input name="dup_type" value="manual" type="radio" onClick="show_option(this);"><?php echo $this->_tpl_vars['MOD']['Manual_Merging']; ?>
<br>
											<input name="dup_type" value="auto" type="radio" onClick="show_option(this);"><?php echo $this->_tpl_vars['MOD']['Auto_Merging']; ?>

		                                </td>
		                            </tr>
		                            <tr>
										<td id='auto_option' align="left" style="padding-left:50px;">&nbsp;</td>
						   			</tr>
								</table>
									<div id='option_div' style="display:none;">
										&nbsp;&nbsp;&nbsp;&nbsp;<input name="auto_type" value="ignore" type="radio" checked><?php echo $this->_tpl_vars['MOD']['Ignore_Duplicate']; ?>
<br>
	                                                        &nbsp;&nbsp;&nbsp;&nbsp;<input name="auto_type" value="overwrite" type="radio"><?php echo $this->_tpl_vars['MOD']['Overwrite_Duplicate']; ?>

									</div>
								<input type="hidden" name="selectedColumnsString"/>
								<table class="searchUIBasic small" border="0" cellpadding="5" cellspacing="0" width="80%" height="10" align="center">
									<tbody>
										<tr class="lvtCol" style="Font-Weight: normal"><br>
											<td colspan="3">
												<span class="moduleName"><?php echo $this->_tpl_vars['APP']['LBL_SELECT_MERGECRITERIA_HEADER']; ?>
</span><br>
												<span font-weight:normal><?php echo $this->_tpl_vars['APP']['LBL_SELECT_MERGECRITERIA_TEXT']; ?>
</span>
											</td>
				   						   </tr>
				   						   <tr><td colspan="3"></td></tr>
										   <tr>
											<td><b><?php echo $this->_tpl_vars['APP']['LBL_AVAILABLE_FIELDS']; ?>
</b></td>
											<td></td>
											<td><b><?php echo $this->_tpl_vars['APP']['LBL_SELECTED_FIELDS']; ?>
</b></td>
										   </tr>
										   <tr>
											<td width=47%>
												<select id="availList" multiple size="10" name="availList" class="txtBox" Style="width: 100%"><?php echo $this->_tpl_vars['AVALABLE_FIELDS']; ?>
</select>
											</td>
											<td width="6%">
												<div align="center">
													<input type="button" name="Button" value="&nbsp;&rsaquo;&rsaquo;&nbsp;" onClick="addColumn()" class="crmButton small" width="100%" /><br /><br />
													<input type="button" name="Button1" value="&nbsp;&lsaquo;&lsaquo;&nbsp;" onClick="delColumn()" class="crmButton small" width="100%" /><br /><br />
												</div>
											</td>
											<td width="47%">
												<select id="selectedColumns" size="10" name="selectedColumns" multiple class="txtBox" Style="width: 100%"><?php echo $this->_tpl_vars['FIELDS_TO_MERGE']; ?>
</select>
											</td>
										   </tr>
									</tbody>
								</table>
							</div>
							</td>
					   	</tr>
				<!-- duplicate handling ends -->
				   <tr>
					<td align="right" style="padding-right:40px;" class="reportCreateBottom" >
						<input type="submit" name="button"  value=" &nbsp;&lsaquo; <?php echo $this->_tpl_vars['MOD']['LBL_BACK']; ?>
 &nbsp; " class="crmbutton small cancel" onclick="this.form.action.value='Import';this.form.step.value='1'; return true;" />
						&nbsp;&nbsp;
						<input type="button" name="button"  value=" &nbsp; <?php echo $this->_tpl_vars['MOD']['LBL_IMPORT_NOW']; ?>
 &rsaquo; &nbsp; " class="crmbutton small save" onclick="this.form.action.value='Import';this.form.step.value='3'; check_submit();" />
					</td>
				   </tr>
				  </table>
				</form>
				<!-- IMPORT LEADS ENDS HERE -->	
			</td>
		   </tr>
		</table>
	</td>
   </tr>
</table>
