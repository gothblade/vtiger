<?php /* Smarty version 2.6.18, created on 2013-01-29 08:39:02
         compiled from modules/Tooltip/EditQuickView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'modules/Tooltip/EditQuickView.tpl', 5, false),)), $this); ?>
<script language="JavaScript" type="text/javascript" src="modules/Tooltip/TooltipSettings.js"></script>
<br>
<table align="center" border="0" cellpadding="0" cellspacing="0" width="98%">
<tbody><tr>
	<td valign="top"><img src="<?php echo vtiger_imageurl('showPanelTopLeft.gif', $this->_tpl_vars['THEME']); ?>
"></td>
	<td valign="top" width="100%">
	<div align=center>
		<table border=0 cellspacing=0 cellpadding=5 width=100% class="settingsSelUITopLine">
			<form action="index.php" method="post" name="new" id="form" onsubmit="VtigerJS_DialogBox.block();">
			<input type="hidden" id="fieldid" name="fieldid" value="<?php echo $this->_tpl_vars['FIELDID']; ?>
">
			<input type="hidden" name="" value="">
		</table>
		
		<table border=0 cellspacing=0 cellpadding=5 width=100% class="tableHeading">
		<tr>
			<td class="small" align="left" nowrap>
				<strong>
					<?php echo $this->_tpl_vars['MOD']['LBL_TOOLTIP_HELP_TEXT']; ?>

				</strong>
			</td>
			<td class="small" align="right" width="100%">
				<input title="save" class="crmButton small save" type="button" name="save" onClick="doSaveTooltipInfo();" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
">
			</td>
			<td class="small" align="right">
				<input title="back" class="crmButton small cancel" type="button" name="Back" onClick="window.history.back();" value="<?php echo $this->_tpl_vars['APP']['LBL_BACK']; ?>
">
			</td>
		</tr>
		</table>
		
		<?php $_from = $this->_tpl_vars['FIELD_LISTS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['module'] => $this->_tpl_vars['info']):
?>
			<div id="<?php echo $this->_tpl_vars['module']; ?>
_fields" style="display:block">	
		 	<table cellspacing=0 cellpadding=5 width=100% class="listTable small">
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
                       		<td class="prvPrfTexture" style="width:20px">
                       			&nbsp;
                       		</td>
                       		<td width="5%" id="<?php echo $this->_foreach['groupfields']['iteration']; ?>
_<?php echo $this->_foreach['curvalue']['iteration']; ?>
">
                       			<?php echo $this->_tpl_vars['elementinfo']['input']; ?>

                       		</td>
                       		<td width="25%" nowrap onMouseOver="this.className='prvPrfHoverOn',$('<?php echo $this->_foreach['groupfields']['iteration']; ?>
_<?php echo $this->_foreach['curvalue']['iteration']; ?>
').className='prvPrfHoverOn'" onMouseOut="this.className='prvPrfHoverOff',$('<?php echo $this->_foreach['groupfields']['iteration']; ?>
_<?php echo $this->_foreach['curvalue']['iteration']; ?>
').className='prvPrfHoverOff'">
                       			<?php echo $this->_tpl_vars['elementinfo']['fieldlabel']; ?>

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
		</form>
		</div>
	</td>
	<td valign="top">
		<img src="<?php echo vtiger_imageurl('showPanelTopRight.gif', $this->_tpl_vars['THEME']); ?>
">
	</td>
	</tr>
</tbody>
</table>