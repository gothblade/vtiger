<?php /* Smarty version 2.6.18, created on 2013-01-29 02:39:48
         compiled from OrgSharingEditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'OrgSharingEditView.tpl', 16, false),)), $this); ?>
<script language="JAVASCRIPT" type="text/javascript" src="include/js/smoothscroll.js"></script>
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
				<form action="index.php" method="post" name="def_org_share" id="form" onsubmit="VtigerJS_DialogBox.block();">
				<input type="hidden" name="module" value="Users">
				<input type="hidden" name="action" value="SaveOrgSharing">
				<input type="hidden" name="parenttab" value="Settings">
				<tr>
					<td width=50 rowspan=2 valign=top><img src="<?php echo vtiger_imageurl('shareaccess.gif', $this->_tpl_vars['THEME']); ?>
" alt="<?php echo $this->_tpl_vars['MOD']['LBL_USERS']; ?>
" width="48" height="48" border=0 title="<?php echo $this->_tpl_vars['MOD']['LBL_USERS']; ?>
"></td>
					<td class=heading2 valign=bottom><b><a href="index.php?module=Settings&action=index&parenttab=Settings"><?php echo $this->_tpl_vars['MOD']['LBL_SETTINGS']; ?>
</a> > <?php echo $this->_tpl_vars['MOD']['LBL_EDIT']; ?>
 <?php echo $this->_tpl_vars['MOD']['LBL_SHARING_ACCESS']; ?>
 </b></td>
					<td rowspan=2 class="small" align=right>&nbsp;</td>
				</tr>
				<tr>
					<td valign=top class="small"><?php echo $this->_tpl_vars['MOD']['LBL_SHARING_ACCESS_DESCRIPTION']; ?>
</td>
				</tr>
				</table>

				<br>
				<table border=0 cellspacing=0 cellpadding=5 width=100% class="tableHeading">
				<tr>
					<td class="big"><strong><?php echo $this->_tpl_vars['CMOD']['LBL_GLOBAL_ACCESS_PRIVILEGES']; ?>
</strong></td>
					<td class="small" align=right>
						<input class="crmButton small save" title="Save" accessKey="C" type="submit" name="Save" value="<?php echo $this->_tpl_vars['CMOD']['LBL_SAVE_PERMISSIONS']; ?>
">&nbsp;
						<input class="crmButton small cancel" title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" type="button" name="Cancel" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" onClick="window.history.back();">
					</td>
				</tr>
				</table>

	
				<table cellspacing="0" cellpadding="5" class="listTable" width="100%">
				<?php $_from = $this->_tpl_vars['ORGINFO']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['elements']):
?>	
				<?php $this->assign('MODULELABEL', $this->_tpl_vars['elements']['0']); ?>
				<?php if ($this->_tpl_vars['APP'][$this->_tpl_vars['elements']['0']] != ''): ?>
					<?php $this->assign('MODULELABEL', $this->_tpl_vars['APP'][$this->_tpl_vars['elements']['0']]); ?>
				<?php endif; ?>	
				<tr>
                    		    <td width="30%" class="colHeader small" nowrap><?php echo $this->_tpl_vars['MODULELABEL']; ?>
</td>
				    <td width="70%" class="listTable small"><?php echo $this->_tpl_vars['elements']['2']; ?>
</td>
				<tr>
				<?php endforeach; endif; unset($_from); ?>
				</table>
	</form>
	</table>

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
		


</td>
        <td valign="top"><img src="<?php echo vtiger_imageurl('showPanelTopRight.gif', $this->_tpl_vars['THEME']); ?>
"></td>
   </tr>
</tbody>
</table>
<script>

function checkAccessPermission(share_value)
{
	if (share_value == "3")
	{
		alert("<?php echo $this->_tpl_vars['APP']['ACCOUNT_ACCESS_INFO']; ?>
");
		document.getElementById('2_perm_combo').options[3].selected=true
		document.getElementById('13_perm_combo').options[3].selected=true
		document.getElementById('20_perm_combo').options[3].selected=true
		document.getElementById('22_perm_combo').options[3].selected=true
		document.getElementById('23_perm_combo').options[3].selected=true

	}
}
</script>

