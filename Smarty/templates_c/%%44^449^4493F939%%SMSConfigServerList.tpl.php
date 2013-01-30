<?php /* Smarty version 2.6.18, created on 2013-01-29 08:32:58
         compiled from modules/SMSNotifier/SMSConfigServerList.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'modules/SMSNotifier/SMSConfigServerList.tpl', 50, false),)), $this); ?>
<script language="JAVASCRIPT" type="text/javascript" src="include/js/smoothscroll.js"></script>
<script language="JavaScript" type="text/javascript" src="include/js/menu.js"></script>
<?php echo '
<style>
DIV.fixedLay{
	border:3px solid #CCCCCC;
	background-color:#FFFFFF;
	width:500px;
	position:fixed;
	left:250px;
	top:200px;
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
	<tr>
        <td valign="top"><img src="<?php echo $this->_tpl_vars['IMAGE_PATH']; ?>
showPanelTopLeft.gif"></td>
        <td class="showPanelBg" style="padding: 10px;" valign="top" width="100%">
			<br>
			<div align=center>
	
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'SetMenu.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

			<!-- DISPLAY -->
			<table border=0 cellspacing=0 cellpadding=5 width=100% class="settingsSelUITopLine">
			<tr>
				<td width="50" rowspan="2" valign="top"><img src="<?php echo vtiger_imageurl('proxy.gif', $this->_tpl_vars['THEME']); ?>
" alt="<?php echo $this->_tpl_vars['CMOD']['SERVER_CONFIGURATION']; ?>
" width="48" height="48" border=0 title="<?php echo $this->_tpl_vars['CMOD']['SERVER_CONFIGURATION']; ?>
"></td>
				<td colspan="2" class="heading2" valign=bottom align="left"><b><a href="index.php?module=Settings&action=ModuleManager&parenttab=Settings"><?php echo $this->_tpl_vars['MOD']['VTLIB_LBL_MODULE_MANAGER']; ?>
</a> &gt; <?php echo $this->_tpl_vars['MODULE_LBL']; ?>
 > <?php echo $this->_tpl_vars['CMOD']['SERVER_CONFIGURATION']; ?>
 </b></td>
				<td rowspan=2 class="small" align=right>&nbsp;</td>
			</tr>
			<tr>
				<td valign=top class="small" align="left"><?php echo $this->_tpl_vars['CMOD']['SERVER_CONFIGURATION_DESCRIPTION']; ?>
</td>
			</tr>
			</table>
			
			<br/>
			<table width="100%" border="0" cellpadding="5" cellspacing="0" class="tableHeading">
			<tr>
				<td style="padding-left:5px;" class="big"><?php echo $this->_tpl_vars['MOD']['SMS_SERVER_CONFIGURATION']; ?>
</td>                    
				<td valign=top class="small" align="right">
				<input id="_smsserver_add_button_" type="button" class="small create" value="Add New" onclick="_SMSConfigServerFetchEdit('');fnvshobj(this,'editdiv');">
				</td>
			</tr>
			</table>
	
			<div id="_smsservers_">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules/SMSNotifier/SMSConfigServerListContents.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>
			
			<table border=0 cellspacing=0 cellpadding=5 width=100% >
			<tr><td class="small" nowrap align=right><a href="#top"><?php echo $this->_tpl_vars['MOD']['LBL_SCROLL']; ?>
</a></td></tr>
			</table>
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
        <td valign="top"><img src="<?php echo $this->_tpl_vars['IMAGE_PATH']; ?>
showPanelTopRight.gif"></td>
   </tr>
</tbody>
</table>

<form method="POST" action="javascript:void(0);">
	<div id="editdiv" class="fixedlay" style="display:none;position:absolute;width:450px;"></div>
</form>

<?php echo '
<script type="text/javascript">

function _SMSCongiServerShowReqParams(selectBox)
{
	var providers = selectBox.options;
	for(var index = 0; index < providers.length; ++index) {
		var provideropt = providers[index];
		
		if($(\'paramrows_\' + provideropt.value)) {	
			if(provideropt.selected) {
				$(\'paramrows_\' + provideropt.value).show();
			} else {
				$(\'paramrows_\' + provideropt.value).hide();
			}
		}
	}		
}

function _SMSConfigServerSaveForm(form)
{

	if(form.smsserver_provider.value == \'\') {
		form.smsserver_provider.style.background = \'#FFF4BF\';
		return false;
	} else {
		form.smsserver_provider.style.background = \'#FFFFFF\';
	}
	
	if(form.smsserver_username.value == \'\') {
		form.smsserver_username.className = \'detailedViewTextBoxOn\';
		form.smsserver_username.focus();
		return false;
	}
	
	if(form.smsserver_password.value == \'\') {
		form.smsserver_password.className = \'detailedViewTextBoxOn\';
		form.smsserver_password.focus();
		return false;
	}

	$("editdiv").style.display="none";
	var frmvalues = Form.serialize(form);

	$("status").show();
    new Ajax.Request(
    	\'index.php\',
        {queue: {position: \'end\', scope: \'command\'},
        	method: \'post\',
            postBody: \'action=SMSNotifierAjax&module=SMSNotifier&file=SMSConfigServer&mode=Save&\' + frmvalues,
            onComplete: function(response) {
            	$("status").style.display="none";
				$("_smsservers_").innerHTML = response.responseText;
        	}
     	}
	);
}

function _SMSConfigServerDelete(id)
{
	$("editdiv").style.display="none";
	$("status").style.display="inline";
    new Ajax.Request(
    	\'index.php\',
        {queue: {position: \'end\', scope: \'command\'},
        	method: \'post\',
            postBody: \'action=SMSNotifierAjax&module=SMSNotifier&file=SMSConfigServer&ajax=true&mode=Delete&record=\'+id,
            onComplete: function(response) {
            	$("status").style.display="none";
				$("_smsservers_").innerHTML = response.responseText;
        	}
     	}
	);
}

function _SMSConfigServerFetchEdit(id)
{
	$("status").style.display="inline";
	new Ajax.Request(
    	\'index.php\',
        {queue: {position: \'end\', scope: \'command\'},
        	method: \'post\',
            postBody: \'action=SMSNotifierAjax&module=SMSNotifier&file=SMSConfigServer&ajax=true&mode=Edit&record=\'+id,
            onComplete: function(response) {
            	$("status").style.display="none";
				$("editdiv").innerHTML=response.responseText;
				$("editdiv").show();
            }
        }
	);
}

</script>
'; ?>
