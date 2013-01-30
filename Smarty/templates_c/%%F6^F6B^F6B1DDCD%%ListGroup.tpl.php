<?php /* Smarty version 2.6.18, created on 2013-01-29 02:40:07
         compiled from ListGroup.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'ListGroup.tpl', 17, false),)), $this); ?>
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
				<input type="hidden" name="mode" value="create">
				<input type="hidden" name="parenttab" value="Settings">
				<tr>
					<td width=50 rowspan=2 valign=top><img src="<?php echo vtiger_imageurl('ico-groups.gif', $this->_tpl_vars['THEME']); ?>
" alt="<?php echo $this->_tpl_vars['MOD']['LBL_GROUPS']; ?>
" width="48" height="48" border=0 title="<?php echo $this->_tpl_vars['MOD']['LBL_GROUPS']; ?>
"></td>
					<td class=heading2 valign=bottom><b><a href="index.php?module=Settings&action=index&parenttab=Settings"><?php echo $this->_tpl_vars['MOD']['LBL_SETTINGS']; ?>
</a> > <?php echo $this->_tpl_vars['CMOD']['LBL_GROUPS']; ?>
</b></td>
				</tr>
				<tr>
					<td valign=top class="small"><?php echo $this->_tpl_vars['MOD']['LBL_GROUP_DESC']; ?>
</td>
				</tr>
				</table>
				<br>
				<table border=0 cellspacing=0 cellpadding=10 width=100% >
				<tr>

				<td>
				
					<table border=0 cellspacing=0 cellpadding=5 width=100% class="tableHeading">
					<tr>
						<td class="big"><strong><?php echo $this->_tpl_vars['MOD']['LBL_GROUP_LIST']; ?>
</strong></td>
						<td class="small" align=right><?php echo $this->_tpl_vars['CMOD']['LBL_TOTAL']; ?>
 <?php echo $this->_tpl_vars['GRPCNT']; ?>
 <?php echo $this->_tpl_vars['CMOD']['LBL_GROUPS']; ?>
 </td>
					</tr>
					</table>
					<table border=0 cellspacing=0 cellpadding=5 width=100% class="listTableTopButtons">

					<tr>
					     <td class=small align=right>
						<input title="<?php echo $this->_tpl_vars['CMOD']['LBL_NEW_GROUP']; ?>
" class="crmButton create small" type="submit" name="New" value="<?php echo $this->_tpl_vars['CMOD']['LBL_NEW_GROUP']; ?>
"/>
					     </td>
					</tr>
					</table>
						
					<table border=0 cellspacing=0 cellpadding=5 width=100% class="listTable">
					<tr>
						<td class="colHeader small" valign=top width=2%>#</td>
						<td class="colHeader small" valign=top width=8%><?php echo $this->_tpl_vars['LIST_HEADER']['0']; ?>
</td>
						<td class="colHeader small" valign=top width=30%><?php echo $this->_tpl_vars['LIST_HEADER']['1']; ?>
</td>
						<td class="colHeader small" valign=top width=60%><?php echo $this->_tpl_vars['LIST_HEADER']['2']; ?>
</td>
					  </tr>
						<?php $_from = $this->_tpl_vars['LIST_ENTRIES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['grouplist'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['grouplist']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['groupvalues']):
        $this->_foreach['grouplist']['iteration']++;
?>
					  <tr>
						<td class="listTableRow small" valign=top><?php echo $this->_foreach['grouplist']['iteration']; ?>
</td>
						<td class="listTableRow small" valign=top nowrap>
							  	<a href="index.php?module=Settings&action=createnewgroup&returnaction=listgroups&parenttab=Settings&mode=edit&groupId=<?php echo $this->_tpl_vars['groupvalues']['groupid']; ?>
"><img src="<?php echo vtiger_imageurl('editfield.gif', $this->_tpl_vars['THEME']); ?>
" alt="<?php echo $this->_tpl_vars['APP']['LNK_EDIT']; ?>
" title="<?php echo $this->_tpl_vars['APP']['LNK_EDIT']; ?>
" border="0" align="absmiddle"></a>&nbsp;|	
								<a href="#" onClick="deletegroup(this,'<?php echo $this->_tpl_vars['groupvalues']['groupid']; ?>
')";><img src="<?php echo vtiger_imageurl('delete.gif', $this->_tpl_vars['THEME']); ?>
" alt="<?php echo $this->_tpl_vars['LNK_DELETE']; ?>
" title="<?php echo $this->_tpl_vars['APP']['LNK_DELETE']; ?>
" border="0" align="absmiddle"></a>
						</td>
						<td class="listTableRow small" valign=top><strong>
                              				<a href="index.php?module=Settings&action=GroupDetailView&parenttab=Settings&groupId=<?php echo $this->_tpl_vars['groupvalues']['groupid']; ?>
"><?php echo $this->_tpl_vars['groupvalues']['groupname']; ?>
</a></strong>
						</td>
						<td class="listTableRow small" valign=top><?php echo $this->_tpl_vars['groupvalues']['description']; ?>
</td>
					  </tr>
					<?php endforeach; endif; unset($_from); ?>
					</table>
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

<div id="tempdiv" style="display:block;position:absolute;left:350px;top:200px;"></div>
<script>
function deletegroup(obj,groupid)
{
	$("status").style.display="inline";
        new Ajax.Request(
                'index.php',
                {queue: {position: 'end', scope: 'command'},
                        method: 'post',
                        postBody:'module=Users&action=UsersAjax&file=GroupDeleteStep1&groupid='+groupid,
                        onComplete: function(response) {
                                $("status").style.display="none";
                                $("tempdiv").innerHTML=response.responseText;
								fnvshobj(obj,"tempdiv");
                        }
                }
        );
}

</script>