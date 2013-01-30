<?php /* Smarty version 2.6.18, created on 2013-01-30 01:02:49
         compiled from Settings/EmailNotification.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'Settings/EmailNotification.tpl', 40, false),)), $this); ?>
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
<tbody><tr>
        <td valign="top"><img src="<?php echo vtiger_imageurl('showPanelTopLeft.gif', $this->_tpl_vars['THEME']); ?>
"></td>
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
				<td width="50" rowspan="2" valign="top"><img src="<?php echo vtiger_imageurl('notification.gif', $this->_tpl_vars['THEME']); ?>
" alt="<?php echo $this->_tpl_vars['MOD']['LBL_MODULE_NAME']; ?>
" width="48" height="48" border=0 title="<?php echo $this->_tpl_vars['MOD']['LBL_MODULE_NAME']; ?>
"></td>
				<td colspan="2" class="heading2" valign=bottom align="left"><b><a href="index.php?module=Settings&action=index&parenttab=Settings"><?php echo $this->_tpl_vars['MOD']['LBL_SETTINGS']; ?>
</a> > <?php echo $this->_tpl_vars['MOD']['NOTIFICATIONSCHEDULERS']; ?>
 </b></td>
				<td rowspan=2 class="small" align=right>&nbsp;</td>
			</tr>
			<tr>
				<td valign=top class="small" align="left"><?php echo $this->_tpl_vars['MOD']['LBL_NOTIF_SCHED_DESCRIPTION']; ?>
</td>
			</tr>
			</table>
<table border=0 cellspacing=0 cellpadding=5 width=100% class="tableHeading">
						<tr><td>&nbsp;</td></tr>
				</table>

				<table width="100%" border="0" cellpadding="5" cellspacing="0" class="listTableTopButtons">
                  <tr >

                    <td  style="padding-left:5px;" class="big"><?php echo $this->_tpl_vars['MOD']['NOTIFICATIONSCHEDULERS']; ?>
</td>
                    <td align="right">&nbsp;</td>
                  </tr>
			  </table>


	
	<div id="notifycontents">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Settings/EmailNotificationContents.tpl', 'smarty_include_vars' => array()));
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
        <td valign="top"><img src="<?php echo vtiger_imageurl('showPanelTopRight.gif', $this->_tpl_vars['THEME']); ?>
"></td>
   </tr>
</tbody>
</table>
	<div id="editdiv" style="display:none;position:absolute;width:400px;"></div>
<?php echo '
<script>
function fetchSaveNotify(id)
{
	$("editdiv").style.display="none";
	$("status").style.display="inline";
	var active = $("notify_status").options[$("notify_status").options.selectedIndex].value;
	var subject = $("notifysubject").value;
        var body = $("notifybody").value;
	new Ajax.Request(
                \'index.php\',
                {queue: {position: \'end\', scope: \'command\'},
                        method: \'post\',
                        postBody: \'action=SettingsAjax&module=Settings&file=SaveNotification&active=\'+active+\'&notifysubject=\'+subject+\'&notifybody=\'+body+\'&record=\'+id,
                        onComplete: function(response) {
					if(response.responseText.indexOf(":#:FAILURE") > -1)
					{
						alert(alert_arr.VALID_DATA);
					}else
					{
						$("notifycontents").innerHTML=response.responseText;
					}
                                $("status").style.display="none";
                        }
                }
        );
}

function fetchEditNotify(id)
{
	$("status").style.display="inline";
	new Ajax.Request(
                \'index.php\',
                {queue: {position: \'end\', scope: \'command\'},
                        method: \'post\',
                        postBody:\'action=SettingsAjax&module=Settings&file=EditNotification&record=\'+id,
                        onComplete: function(response) {
                                $("status").style.display="none";
                                $("editdiv").innerHTML=response.responseText;
                        }
                }
        );
}
</script>
'; ?>
