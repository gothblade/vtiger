<?php /* Smarty version 2.6.18, created on 2013-01-29 02:40:13
         compiled from GroupDetailview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'GroupDetailview.tpl', 17, false),)), $this); ?>
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
$this->_smarty_include(array('smarty_include_tpl_file' => 'SetMenu.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<!-- DISPLAY -->
				<table border=0 cellspacing=0 cellpadding=5 width=100% class="settingsSelUITopLine">
				<form action="index.php" method="post" name="new" id="form" onsubmit="VtigerJS_DialogBox.block();">
				<input type="hidden" name="module" value="Settings">
				<input type="hidden" name="action" value="createnewgroup">
				<input type="hidden" name="groupId" value="<?php echo $this->_tpl_vars['GROUPID']; ?>
">
				<input type="hidden" name="mode" value="edit">
				<input type="hidden" name="parenttab" value="Settings">
				<tr>
					<td width=50 rowspan=2 valign=top><img src="<?php echo vtiger_imageurl('ico-groups.gif', $this->_tpl_vars['THEME']); ?>
" width="48" height="48" border=0 ></td>
					<td class=heading2 valign=bottom><b><a href="index.php?module=Settings&action=index&parenttab=Settings"><?php echo $this->_tpl_vars['MOD']['LBL_SETTINGS']; ?>
</a> > <a href="index.php?module=Settings&action=listgroups&parenttab=Settings"><?php echo $this->_tpl_vars['CMOD']['LBL_GROUPS']; ?>
</a> &gt; <?php echo $this->_tpl_vars['CMOD']['LBL_VIEWING']; ?>
 &quot;<?php echo $this->_tpl_vars['GROUPINFO']['0']['groupname']; ?>
&quot; </b></td>
				</tr>
				<tr>
					<td valign=top class="small"><?php echo $this->_tpl_vars['CMOD']['LBL_VIEWING']; ?>
 <?php echo $this->_tpl_vars['CMOD']['LBL_PROPERTIES']; ?>
 &quot;<?php echo $this->_tpl_vars['GROUPINFO']['0']['groupname']; ?>
`&quot; <?php echo $this->_tpl_vars['CMOD']['LBL_GROUP_NAME']; ?>
 </td>
				</tr>
				</table>
				
				<br>
				<table border=0 cellspacing=0 cellpadding=10 width=100% >
				<tr>
				<td valign=top>
					
					<table border=0 cellspacing=0 cellpadding=5 width=100% class="tableHeading">
					<tr>
						<td class="big"><strong><?php echo $this->_tpl_vars['CMOD']['LBL_PROPERTIES']; ?>
 &quot;<?php echo $this->_tpl_vars['GROUPINFO']['0']['groupname']; ?>
&quot; </strong></td>
						<td><div align="right">
					 	    <input value="   <?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_LABEL']; ?>
   " title="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_KEY']; ?>
" class="crmButton small edit" type="submit" name="Edit" >
						</div></td>
					  </tr>
					</table>
					<table width="100%"  border="0" cellspacing="0" cellpadding="5">
                      <tr class="small">
                        <td width="15%" class="small cellLabel"><strong><?php echo $this->_tpl_vars['CMOD']['LBL_GROUP_NAME']; ?>
</strong></td>
                        <td width="85%" class="cellText" ><?php echo $this->_tpl_vars['GROUPINFO']['0']['groupname']; ?>
</td>
                      </tr>
                      <tr class="small">
                        <td class="small cellLabel"><strong><?php echo $this->_tpl_vars['CMOD']['LBL_DESCRIPTION']; ?>
</strong></td>
                        <td class="cellText"><?php echo $this->_tpl_vars['GROUPINFO']['0']['description']; ?>
</td>
                      </tr>
                      <tr class="small">
                        <td valign=top class="cellLabel"><strong><?php echo $this->_tpl_vars['CMOD']['LBL_MEMBER']; ?>
</strong></td>
                        <td class="cellText">
						<table width="70%"  border="0" cellspacing="0" cellpadding="5">
                          <tr class="small">
                  		<?php $_from = $this->_tpl_vars['GROUPINFO']['1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['type'] => $this->_tpl_vars['details']):
?> 
				<?php if ($this->_tpl_vars['details']['0'] != ''): ?>		
					<?php if ($this->_tpl_vars['type'] == 'User'): ?>
                            		<td colspan="2" class="cellBottomDotLine">
						<div align="left"><strong><?php echo $this->_tpl_vars['MOD']['LBL_USERS']; ?>
</strong></div>
					</td>
					<?php endif; ?>	
					<?php if ($this->_tpl_vars['type'] == 'Role'): ?>
                            		<td colspan="2" class="cellBottomDotLine">
						<div align="left"><strong><?php echo $this->_tpl_vars['MOD']['LBL_ROLES']; ?>
</strong></div>
					</td>
					<?php endif; ?>	
					<?php if ($this->_tpl_vars['type'] == 'Role and Subordinates'): ?>
                            		<td colspan="2" class="cellBottomDotLine">
						<div align="left"><strong><?php echo $this->_tpl_vars['type']; ?>
</strong></div>
					</td>
					<?php endif; ?>	
					<?php if ($this->_tpl_vars['type'] == 'Group'): ?>
                            		<td colspan="2" class="cellBottomDotLine">
						<div align="left"><strong><?php echo $this->_tpl_vars['CMOD']['LBL_GROUPS']; ?>
</strong></div>
					</td>
					<?php endif; ?>	
                            </tr>
                          <tr class="small">

                            <td width="16"><div align="center"></div></td>
                            <td>
					<?php $_from = $this->_tpl_vars['details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['element']):
?>
						<?php if ($this->_tpl_vars['element']['memberaction'] == 'GroupDetailView'): ?>
						<a href="index.php?module=Settings&action=<?php echo $this->_tpl_vars['element']['memberaction']; ?>
&<?php echo $this->_tpl_vars['element']['actionparameter']; ?>
=<?php echo $this->_tpl_vars['element']['memberid']; ?>
"><?php echo $this->_tpl_vars['element']['membername']; ?>
</a><br />
						<?php endif; ?>
						<?php if ($this->_tpl_vars['element']['memberaction'] == 'RoleDetailView'): ?>	
						<a href="index.php?module=Settings&action=<?php echo $this->_tpl_vars['element']['memberaction']; ?>
&<?php echo $this->_tpl_vars['element']['actionparameter']; ?>
=<?php echo $this->_tpl_vars['element']['memberid']; ?>
"><?php echo $this->_tpl_vars['element']['membername']; ?>
</a><br />
						<?php endif; ?>
						<?php if ($this->_tpl_vars['element']['memberaction'] == 'DetailView'): ?>	
						<a href="index.php?module=Users&action=<?php echo $this->_tpl_vars['element']['memberaction']; ?>
&<?php echo $this->_tpl_vars['element']['actionparameter']; ?>
=<?php echo $this->_tpl_vars['element']['memberid']; ?>
"><?php echo $this->_tpl_vars['element']['membername']; ?>
</a><br />
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
			    </td>  	 
                          </tr>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
                        </table></td>
                      </tr>
                    </table>
					<br>
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
	</form>
	</table>
		
	</div>
</td>
        <td valign="top"><img src="<?php echo vtiger_imageurl('showPanelTopRight.gif', $this->_tpl_vars['THEME']); ?>
"></td>
   </tr>
</tbody>
</table>