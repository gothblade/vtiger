<?php /* Smarty version 2.6.18, created on 2013-01-29 02:39:36
         compiled from OrgSharingDetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'OrgSharingDetailView.tpl', 39, false),array('modifier', 'getTranslatedString', 'OrgSharingDetailView.tpl', 111, false),array('modifier', 'cat', 'OrgSharingDetailView.tpl', 115, false),)), $this); ?>
<script language="JAVASCRIPT" type="text/javascript" src="include/js/smoothscroll.js"></script>
<?php echo '
<style>
DIV.fixedLay{
	border:3px solid #CCCCCC;
	background-color:#FFFFFF;
	width:500px;
	position:fixed;
	left:250px;
	top:98px;
	display:block;
}
</style>
'; ?>

<?php echo '
<!--[if lte IE 6]>
<STYLE type=text/css>
DIV.fixedLay {
	POSITION: absolute;
}
</STYLE>
<![endif]-->

'; ?>

<br>
<table align="center" border="0" cellpadding="0" cellspacing="0" width="98%">
<tbody><tr>
        <td valign="top"><img src="<?php echo vtiger_imageurl('showPanelTopLeft.gif', $this->_tpl_vars['THEME']); ?>
"></td>
        <td class="showPanelBg" style="padding: 10px;" valign="top" width="100%">
        <br>

	<div align=center>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "SetMenu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<!-- DISPLAY -->
				<table border=0 cellspacing=0 cellpadding=5 width=100% class="settingsSelUITopLine">
				<tr>
					<td width=50 rowspan=2 valign=top><img src="<?php echo vtiger_imageurl('shareaccess.gif', $this->_tpl_vars['THEME']); ?>
" alt="<?php echo $this->_tpl_vars['MOD']['LBL_USERS']; ?>
" width="48" height="48" border=0 title="<?php echo $this->_tpl_vars['MOD']['LBL_USERS']; ?>
"></td>
					<td class=heading2 valign=bottom><b><a href="index.php?module=Settings&action=index&parenttab=Settings"><?php echo $this->_tpl_vars['MOD']['LBL_SETTINGS']; ?>
</a> > <?php echo $this->_tpl_vars['MOD']['LBL_SHARING_ACCESS']; ?>
 </b></td>
					<td rowspan=2 class="small" align=right>&nbsp;</td>
				</tr>
				<tr>
					<td valign=top class="small"><?php echo $this->_tpl_vars['MOD']['LBL_SHARING_ACCESS_DESCRIPTION']; ?>
</td>
				</tr>
				</table>

				<br>
				<div class='helpmessagebox' style='margin-bottom: 4px;'>
					<b style='color: red;'><?php echo $this->_tpl_vars['APP']['NOTE']; ?>
</b> <?php echo $this->_tpl_vars['MOD']['LBL_SHARING_ACCESS_HELPNOTE']; ?>

				</div>				
			  	<!-- GLOBAL ACCESS MODULE -->
		  		<div id="globaldiv">
				<table border=0 cellspacing=0 cellpadding=5 width=100% class="tableHeading">
				<form action="index.php" method="post" name="new" id="orgSharingform" onsubmit="VtigerJS_DialogBox.block();">
				<input type="hidden" name="module" value="Users">
				<input type="hidden" name="action" value="OrgSharingEditView">
				<input type="hidden" name="parenttab" value="Settings">
				<tr>
					<td class="big"><strong>1. <?php echo $this->_tpl_vars['CMOD']['LBL_GLOBAL_ACCESS_PRIVILEGES']; ?>
</strong></td>
					<td class="small" align=right>
						<input class="crmButton small cancel" title="<?php echo $this->_tpl_vars['CMOD']['LBL_RECALCULATE_BUTTON']; ?>
"  type="button" name="recalculate" value="<?php echo $this->_tpl_vars['CMOD']['LBL_RECALCULATE_BUTTON']; ?>
" onclick="return freezeBackground();">	
	&nbsp;<input class="crmButton small edit" type="submit" name="Edit" value="<?php echo $this->_tpl_vars['CMOD']['LBL_CHANGE']; ?>
 <?php echo $this->_tpl_vars['CMOD']['LBL_PRIVILEGES']; ?>
" ></td>
					</td>
				</tr>
				</table>
				<table cellspacing="0" cellpadding="5" class="listTable" width="100%">
				<?php $_from = $this->_tpl_vars['DEFAULT_SHARING']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['module']):
?>	
				  <?php $this->assign('MODULELABEL', $this->_tpl_vars['module']['0']); ?>
				  <?php if ($this->_tpl_vars['APP'][$this->_tpl_vars['module']['0']] != ''): ?>
					<?php $this->assign('MODULELABEL', $this->_tpl_vars['APP'][$this->_tpl_vars['module']['0']]); ?>
				  <?php endif; ?>	
                  <tr>
                    <td width="20%" class="colHeader small" nowrap><?php echo $this->_tpl_vars['MODULELABEL']; ?>
</td>
                    <td width="30%" class="listTableRow small" nowrap>
					<?php if ($this->_tpl_vars['module']['1'] != 'Private' && $this->_tpl_vars['module']['1'] != 'Hide Details'): ?>
						<img src="<?php echo vtiger_imageurl('public.gif', $this->_tpl_vars['THEME']); ?>
" align="absmiddle">
					<?php else: ?>
						<img src="<?php echo vtiger_imageurl('private.gif', $this->_tpl_vars['THEME']); ?>
" align="absmiddle">
					<?php endif; ?>
						<?php echo $this->_tpl_vars['CMOD'][$this->_tpl_vars['module']['1']]; ?>

		    		</td>
                    <td width="50%" class="listTableRow small" nowrap><?php echo $this->_tpl_vars['module']['2']; ?>
</td>
                  </tr>
		  		<?php endforeach; endif; unset($_from); ?>
		</form>	
              </table>
		</div>	
		  <!-- END OF GLOBAL -->
				<br><br>
		  <!-- Custom Access Module Display Table -->
		  <div id="customdiv">
			
				<table border=0 cellspacing=0 cellpadding=5 width=100% class="tableHeading">
				<tr>
					<td class="big"><strong>2. <?php echo $this->_tpl_vars['CMOD']['LBL_CUSTOM_ACCESS_PRIVILEGES']; ?>
</strong></td>
					<td class="small" align=right>&nbsp;</td>
				</tr>
				</table>
				<!-- Start of Module Display -->
				<?php $_from = $this->_tpl_vars['MODSHARING']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['modulename'] => $this->_tpl_vars['details']):
?>
				<?php $this->assign('MODULELABEL', getTranslatedString($this->_tpl_vars['modulename'], $this->_tpl_vars['modulename'])); ?>
				<?php $this->assign('mod_display', $this->_tpl_vars['MODULELABEL']); ?>
				<?php if ($this->_tpl_vars['mod_display'] == $this->_tpl_vars['APP']['Accounts']): ?>
					<?php $this->assign('xx', $this->_tpl_vars['APP']['Contacts']); ?>
					<?php $this->assign('mod_display', ((is_array($_tmp=$this->_tpl_vars['mod_display'])) ? $this->_run_mod_handler('cat', true, $_tmp, " & ".($this->_tpl_vars['xx'])) : smarty_modifier_cat($_tmp, " & ".($this->_tpl_vars['xx'])))); ?>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['details']['0'] != ''): ?>
				<table width="100%" border="0" cellpadding="5" cellspacing="0" class="listTableTopButtons">
                  		<tr>
		                    <td  style="padding-left:5px;" class="big"><img src="<?php echo vtiger_imageurl('arrow.jpg', $this->_tpl_vars['THEME']); ?>
" width="19" height="21" align="absmiddle" />&nbsp; <b><?php echo $this->_tpl_vars['mod_display']; ?>
</b>&nbsp; </td>
                		    <td align="right">
					<input class="crmButton small save" type="button" name="Create" value="<?php echo $this->_tpl_vars['CMOD']['LBL_ADD_PRIVILEGES_BUTTON']; ?>
" onClick="callEditDiv(this,'<?php echo $this->_tpl_vars['modulename']; ?>
','create','')">
				    </td>
                  		</tr>
			  	</table>
				<table width="100%" cellpadding="5" cellspacing="0" class="listTable" >
                    		<tr>
                    		<td width="7%" class="colHeader small" nowrap><?php echo $this->_tpl_vars['CMOD']['LBL_RULE_NO']; ?>
</td>
                          	<td width="20%" class="colHeader small" nowrap><?php echo $this->_tpl_vars['mod_display']; ?>
 <?php echo $this->_tpl_vars['CMOD']['LBL_OF']; ?>
</td>
                          	<td width="25%" class="colHeader small" nowrap><?php echo $this->_tpl_vars['CMOD']['LBL_CAN_BE_ACCESSED']; ?>
</td>
                          	<td width="40%" class="colHeader small" nowrap><?php echo $this->_tpl_vars['CMOD']['LBL_PRIVILEGES']; ?>
</td>
                          	<td width="8%" class="colHeader small" nowrap><?php echo $this->_tpl_vars['APP']['Tools']; ?>
</td>
                        	</tr>
                        <tr >
			  <?php $_from = $this->_tpl_vars['details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sno'] => $this->_tpl_vars['elements']):
?>
                          <td class="listTableRow small"><?php echo $this->_tpl_vars['sno']+1; ?>
</td>
                          <td class="listTableRow small"><?php echo $this->_tpl_vars['elements']['1']; ?>
</td>
                          <td class="listTableRow small"><?php echo $this->_tpl_vars['elements']['2']; ?>
</td>
                          <td class="listTableRow small"><?php echo $this->_tpl_vars['elements']['3']; ?>
</td>
                          <td align="center" class="listTableRow small">
				<a href="javascript:void(0);" onClick="callEditDiv(this,'<?php echo $this->_tpl_vars['modulename']; ?>
','edit','<?php echo $this->_tpl_vars['elements']['0']; ?>
')"><img src="<?php echo vtiger_imageurl('editfield.gif', $this->_tpl_vars['THEME']); ?>
" title='edit' align="absmiddle" border=0 style="padding-top:3px;"></a>&nbsp;|<a href='javascript:confirmdelete("index.php?module=Users&action=DeleteSharingRule&shareid=<?php echo $this->_tpl_vars['elements']['0']; ?>
")'><img src="<?php echo vtiger_imageurl('delete.gif', $this->_tpl_vars['THEME']); ?>
" title='del' align="absmiddle" border=0></a></td>
                        </tr>

                     <?php endforeach; endif; unset($_from); ?> 
                    </table>
	<!-- End of Module Display -->
	<!-- Start FOR NO DATA -->

			<table border=0 cellspacing=0 cellpadding=5 width=100% class="tableHeading">
			<tr><td>&nbsp;</td></tr>
			</table>
		    <?php else: ?>
                    <table width="100%" cellpadding="0" cellspacing="0" class="listTable"><tr><td>
		      <table width="100%" border="0" cellpadding="5" cellspacing="0" class="listTableTopButtons">
                      <tr>
                        <td  style="padding-left:5px;" class="big"><img src="<?php echo vtiger_imageurl('arrow.jpg', $this->_tpl_vars['THEME']); ?>
" width="19" height="21" align="absmiddle" />&nbsp; <b><?php echo $this->_tpl_vars['mod_display']; ?>
</b>&nbsp; </td>
                        <td align="right">
				<input class="crmButton small save" type="button" name="Create" value="<?php echo $this->_tpl_vars['APP']['LBL_ADD_ITEM']; ?>
 <?php echo $this->_tpl_vars['CMOD']['LBL_PRIVILEGES']; ?>
" onClick="callEditDiv(this,'<?php echo $this->_tpl_vars['modulename']; ?>
','create','')">
			</td>
                      </tr>
			<table width="100%" cellpadding="5" cellspacing="0">
			<tr>
			<td colspan="2"  style="padding:20px ;" align="center" class="small">
			   <?php echo $this->_tpl_vars['CMOD']['LBL_CUSTOM_ACCESS_MESG']; ?>
 
			   <a href="javascript:void(0);" onClick="callEditDiv(this,'<?php echo $this->_tpl_vars['modulename']; ?>
','create','')"><?php echo $this->_tpl_vars['CMOD']['LNK_CLICK_HERE']; ?>
</a>
			   <?php echo $this->_tpl_vars['CMOD']['LBL_CREATE_RULE_MESG']; ?>

			</td>
			</tr>
		    </table>
		    </table>	
			<table border=0 cellspacing=0 cellpadding=5 width=100% class="tableHeading">
			<tr><td>&nbsp;</td></tr>
			</table>
		    <?php endif; ?>
		    <?php endforeach; endif; unset($_from); ?>			
		   </td></tr></table>
				<br>
		   </div>	
				<!-- Edit Button -->
				<table border=0 cellspacing=0 cellpadding=5 width=100% >
				<tr><td class="small" ><div align=right><a href="#top"><?php echo $this->_tpl_vars['MOD']['LBL_SCROLL']; ?>
</a></div></td></tr>				</table>
		 </td>
                  </tr>
				
                </table>
			
			
			
			</td>
			</tr>
			</table>
		</td>
	</tr>
	</table>
		
	</div>
</td>
        <td valign="top"><img src="<?php echo vtiger_imageurl('showPanelTopRight.gif', $this->_tpl_vars['THEME']); ?>
"></td>
   </tr>
</tbody>
</table>
<div id="tempdiv" style="display:block;position:absolute;width:400px;"></div>

<!-- For Disabling Window -->
<div id="confId"  class='veil_new small' style="display:none;">
<table class="options small" border="0" cellpadding="18" cellspacing="0">
<tr>
	<td align="center" nowrap style="color:#FFFFFF;font-size:15px;">
		<b><?php echo $this->_tpl_vars['CMOD']['LBL_RECALC_MSG']; ?>
</b>
	</td>
	<br>
	<tr>
		<td align="center"><input type="button" value="<?php echo $this->_tpl_vars['CMOD']['LBL_YES']; ?>
" onclick="return disableStyle('confId');">&nbsp;&nbsp;<input type="button" value="&nbsp;<?php echo $this->_tpl_vars['CMOD']['LBL_NO']; ?>
&nbsp;" onclick="showSelect();$('confId').style.display='none';document.body.removeChild($('freeze'));"></td>
	</tr>
</tr>
</table>
</div>

<div id="divId" class="veil_new" style="position:absolute;width:100%;display:none;top:0px;left:0px;">
<table border="5" cellpadding="0" cellspacing="0" align="center" style="vertical-align:middle;width:100%;height:100%;">
<tbody><tr>
		<td class="big" align="center">
		    <img src="<?php echo vtiger_imageurl('plsWaitAnimated.gif', $this->_tpl_vars['THEME']); ?>
">
		</td>
	</tr>
</tbody>
</table>
</div>


<script>
function callEditDiv(obj,modulename,mode,id)
{
        $("status").style.display="inline";
        new Ajax.Request(
                'index.php',
                {queue: {position: 'end', scope: 'command'},
                        method: 'post',
                        postBody: 'module=Settings&action=SettingsAjax&orgajax=true&mode='+mode+'&sharing_module='+modulename+'&shareid='+id,
                        onComplete: function(response) {
                                $("status").style.display="none";
                                $("tempdiv").innerHTML=response.responseText;
				fnvshobj(obj,"tempdiv");
                                if(mode == 'edit')
                                {
                                        setTimeout("",10000);
                                        var related = $('rel_module_lists').value;
                                        fnwriteRules(modulename,related);
                                }
                        }
                }
        );
}

function fnwriteRules(module,related)
{
		var modulelists = new Array();
		modulelists = related.split('###');
		var relatedstring ='';
		var relatedtag;
		var relatedselect;
		var modulename;
		for(i=0;i < modulelists.length-1;i++)
		{
			modulename = modulelists[i]+"_accessopt";
			relatedtag = document.getElementById(modulename);
			relatedselect = relatedtag.options[relatedtag.selectedIndex].text;
			relatedstring += modulelists[i]+':'+relatedselect+' ';
		}	
		var tagName = document.getElementById(module+"_share");
		var tagName2 = document.getElementById(module+"_access");
		var tagName3 = document.getElementById('share_memberType');
		var soucre =  document.getElementById("rules");
		var soucre1 =  document.getElementById("relrules");
		var select1 = tagName.options[tagName.selectedIndex].text;
		var select2 = tagName2.options[tagName2.selectedIndex].text;
		var select3 = tagName3.options[tagName3.selectedIndex].text;

		if(module == '<?php echo $this->_tpl_vars['APP']['Accounts']; ?>
')
		{
			module = '<?php echo $this->_tpl_vars['APP']['Accounts']; ?>
 & <?php echo $this->_tpl_vars['APP']['Contacts']; ?>
';	
		}

		soucre.innerHTML = module +" <?php echo $this->_tpl_vars['APP']['LBL_LIST_OF']; ?>
 <b>\"" + select1 + "\"</b> <?php echo $this->_tpl_vars['CMOD']['LBL_CAN_BE_ACCESSED']; ?>
 <b>\"" +select2 + "\"</b> <?php echo $this->_tpl_vars['CMOD']['LBL_IN_PERMISSION']; ?>
 "+select3;
		soucre1.innerHTML = "<b><?php echo $this->_tpl_vars['CMOD']['LBL_RELATED_MODULE_RIGHTS']; ?>
</b> " + relatedstring;
}


		function confirmdelete(url)
		{
			if(confirm("<?php echo $this->_tpl_vars['APP']['ARE_YOU_SURE']; ?>
"))
			{
				document.location.href=url;
			}
		}
	
	function disableStyle(id)
	{
			$('orgSharingform').action.value = 'RecalculateSharingRules';
			$('orgSharingform').submit();
 			$(id).style.display = 'none';

			if(browser_ie && (gBrowserAgent.indexOf("msie 7.")!=-1))//for IE 7
                        {
                                document.body.removeChild($('freeze'));
                        }else if(browser_ie)
                        {
                             var oDivfreeze = $('divId');
                             oDivfreeze.style.height = document.documentElement['clientHeight'] + 'px';

                        }
                        $('divId').style.display = 'block';
	}

	function freezeBackground()
	{
	    var oFreezeLayer = document.createElement("DIV");
	    oFreezeLayer.id = "freeze";
	    oFreezeLayer.className = "small veil";

	     if (browser_ie) oFreezeLayer.style.height = (document.body.offsetHeight + (document.body.scrollHeight - document.body.offsetHeight)) + "px";
	     else if (browser_nn4 || browser_nn6) oFreezeLayer.style.height = document.body.offsetHeight + "px";

	    oFreezeLayer.style.width = "100%";
	    document.body.appendChild(oFreezeLayer);
	    document.getElementById('confId').style.display = 'block';
	    hideSelect();
	}

</script>