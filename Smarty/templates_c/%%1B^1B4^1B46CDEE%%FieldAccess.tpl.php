<?php /* Smarty version 2.6.18, created on 2013-01-29 02:40:18
         compiled from FieldAccess.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'FieldAccess.tpl', 17, false),array('modifier', 'getTranslatedString', 'FieldAccess.tpl', 62, false),)), $this); ?>
<script language="JAVASCRIPT" type="text/javascript" src="include/js/smoothscroll.js"></script>
<script language="JavaScript" type="text/javascript" src="include/js/menu.js"></script>
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
		<form action="index.php" method="post" name="new" id="form" onsubmit="VtigerJS_DialogBox.block();">
		<input type="hidden" name="module" value="Settings">
		<input type="hidden" name="parenttab" value="Settings">
		<input type="hidden" name="fld_module" id="fld_module" value="<?php echo $this->_tpl_vars['DEF_MODULE']; ?>
">
		<?php if ($this->_tpl_vars['MODE'] != 'view'): ?>
			<input type="hidden" name="action" value="UpdateDefaultFieldLevelAccess">
		<?php else: ?>
			<input type="hidden" name="action" value="EditDefOrgFieldLevelAccess">
		<?php endif; ?>	
		<tr>
			<td width=50 rowspan=2 valign=top><img src="<?php echo vtiger_imageurl('orgshar.gif', $this->_tpl_vars['THEME']); ?>
" alt="<?php echo $this->_tpl_vars['MOD']['LBL_MODULE_NAME']; ?>
" width="48" height="48" border=0 title="<?php echo $this->_tpl_vars['MOD']['LBL_MODULE_NAME']; ?>
"></td>
			<td colspan=2 class=heading2 valign=bottom><b><a href="index.php?module=Settings&action=index&parenttab=Settings"><?php echo $this->_tpl_vars['MOD']['LBL_SETTINGS']; ?>
</a> > <?php echo $this->_tpl_vars['MOD']['LBL_FIELDS_ACCESS']; ?>
 </b></td>
			<td rowspan=2 class="small" align=right>&nbsp;</td>
		</tr>
		<tr>
			<td valign=top class="small"><?php echo $this->_tpl_vars['MOD']['LBL_SHARING_FIELDS_DESCRIPTION']; ?>
</td>
		</tr>
		</table>
		<br>
		<table border=0 cellspacing=0 cellpadding=5 width=100% class="tableHeading">
		<tr>
			<td class="big"><strong><?php echo $this->_tpl_vars['CMOD']['LBL_GLOBAL_FIELDS_MANAGER']; ?>
</strong></td>
			<td class="small" align=right>
			<?php if ($this->_tpl_vars['MODE'] != 'edit'): ?>
				<input name="Edit" type="submit" class="crmButton small edit" value="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON']; ?>
" >									
			<?php else: ?>
				<input title="save" accessKey="S" class="crmButton small save" type="submit" name="Save" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_LABEL']; ?>
">
				<input name="Cancel" value=" <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
 " class="crmButton small cancel" type="button" onClick="window.history.back();">
			<?php endif; ?>
			</td>
		</tr>
		</table>
		<table width="100%" border="0" cellpadding="5" cellspacing="0" class="listTableTopButtons">
                <tr>
        		<td  style="padding-left:5px;" class="big"><?php echo $this->_tpl_vars['CMOD']['LBL_SELECT_SCREEN']; ?>
&nbsp; 
			<select name="Screen" class="detailedViewTextBox" style="width:30%;"  onChange="changemodules(this)">
			<?php $_from = $this->_tpl_vars['FIELD_INFO']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['module']):
?>
				<?php $this->assign('MODULELABEL', getTranslatedString($this->_tpl_vars['module'], $this->_tpl_vars['module'])); ?>
				<?php if ($this->_tpl_vars['module'] == $this->_tpl_vars['DEF_MODULE']): ?>
					<option selected value='<?php echo $this->_tpl_vars['module']; ?>
'><?php echo $this->_tpl_vars['MODULELABEL']; ?>
</option>
				<?php else: ?>		
					<option value='<?php echo $this->_tpl_vars['module']; ?>
' ><?php echo $this->_tpl_vars['MODULELABEL']; ?>
</option>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			</select>
		    	</td>
	                <td align="right">&nbsp;</td>
                </tr>
		</table>
		<?php $_from = $this->_tpl_vars['FIELD_LISTS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['allmodules'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['allmodules']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module'] => $this->_tpl_vars['info']):
        $this->_foreach['allmodules']['iteration']++;
?>
		<?php $this->assign('MODULELABEL', $this->_tpl_vars['module']); ?>
		<?php if ($this->_tpl_vars['APP'][$this->_tpl_vars['module']] != ''): ?>
			<?php $this->assign('MODULELABEL', $this->_tpl_vars['APP'][$this->_tpl_vars['module']]); ?>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['module'] == $this->_tpl_vars['DEF_MODULE']): ?>
			<div id="<?php echo $this->_tpl_vars['module']; ?>
_fields" style="display:block">	
		<?php else: ?>
			<div id="<?php echo $this->_tpl_vars['module']; ?>
_fields" style="display:none">	
		<?php endif; ?>
	 	<table cellspacing=0 cellpadding=5 width=100% class="listTable small">
       		<tr>
			<td colspan="2" class="listRow" valign="top" nowrap>
			<b><?php echo $this->_tpl_vars['CMOD']['LBL_FIELDS_AVLBL']; ?>
 <?php echo $this->_tpl_vars['MODULELABEL']; ?>
</b>
			</td>
		</tr>
		<tr>
                	<td valign=top width="25%" >
		     	<table border=0 cellspacing=0 cellpadding=5 width=100% class=small>
				<?php $_from = $this->_tpl_vars['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['groupfields'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['groupfields']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['elements']):
        $this->_foreach['groupfields']['iteration']++;
?>
                        	<tr>
					<?php $_from = $this->_tpl_vars['elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['curvalue'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['curvalue']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['elementinfo']):
        $this->_foreach['curvalue']['iteration']++;
?>
                           		<td class="prvPrfTexture" style="width:20px">&nbsp;</td>
                           		<td width="5%" id="<?php echo $this->_foreach['allmodules']['iteration']; ?>
_<?php echo $this->_foreach['groupfields']['iteration']; ?>
_<?php echo $this->_foreach['curvalue']['iteration']; ?>
"><?php echo $this->_tpl_vars['elementinfo']['1']; ?>
</td>
                           		<td width="25%" nowrap  onMouseOver="this.className='prvPrfHoverOn',$('<?php echo $this->_foreach['allmodules']['iteration']; ?>
_<?php echo $this->_foreach['groupfields']['iteration']; ?>
_<?php echo $this->_foreach['curvalue']['iteration']; ?>
').className='prvPrfHoverOn'" onMouseOut="this.className='prvPrfHoverOff',$('<?php echo $this->_foreach['allmodules']['iteration']; ?>
_<?php echo $this->_foreach['groupfields']['iteration']; ?>
_<?php echo $this->_foreach['curvalue']['iteration']; ?>
').className='prvPrfHoverOff'"><?php echo $this->_tpl_vars['elementinfo']['0']; ?>
</td>
					<?php endforeach; endif; unset($_from); ?>
                         	</tr>
                         	<?php endforeach; endif; unset($_from); ?>
                     	</table>
			</td>
                </tr>
                </table>
		</div>
		<?php endforeach; endif; unset($_from); ?>
	</td>
	</tr>
        </table>
	<br>
	<br>
	<table border=0 cellspacing=0 cellpadding=5 width=100% >
		<tr><td class="small" ><div align=right><a href="#top"><?php echo $this->_tpl_vars['MOD']['LBL_SCROLL']; ?>
</a></div></td></tr>
	</table>
</td>
</tr>
</table>
</td>
</tr>
</form>
</table>
</div>
</td>
        <td valign="top"><img src="<?php echo vtiger_imageurl('showPanelTopRight.gif', $this->_tpl_vars['THEME']); ?>
"></td>
   </tr>
</tbody>
</table>
<script>
var def_field='<?php echo $this->_tpl_vars['DEF_MODULE']; ?>
_fields';
<?php echo '
function changemodules(selectmodule)
{
	hide(def_field);
	module=selectmodule.options[selectmodule.options.selectedIndex].value;
	document.getElementById(\'fld_module\').value = module; 
	def_field = module+"_fields";
	show(def_field);
}
</script>
'; ?>

