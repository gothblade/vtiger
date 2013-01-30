<?php /* Smarty version 2.6.18, created on 2013-01-29 08:22:25
         compiled from UnifiedSearchAjax.tpl */ ?>
<?php if ($this->_tpl_vars['MODULE'] == $this->_tpl_vars['SEARCH_MODULE'] && $this->_tpl_vars['SEARCH_MODULE'] != ''): ?>
	<div id="global_list_<?php echo $this->_tpl_vars['SEARCH_MODULE']; ?>
" style="display:block">
<?php elseif ($this->_tpl_vars['MODULE'] == 'Contacts' && $this->_tpl_vars['SEARCH_MODULE'] == ''): ?>
	<div id="global_list_<?php echo $this->_tpl_vars['MODULE']; ?>
" style="display:block">
<?php elseif ($this->_tpl_vars['SEARCH_MODULE'] != ''): ?>
	<div id="global_list_<?php echo $this->_tpl_vars['MODULE']; ?>
" style="display:none">
<?php else: ?>
	<div id="global_list_<?php echo $this->_tpl_vars['MODULE']; ?>
" style="display:block">
<?php endif; ?>
<form name="massdelete" method="POST">
<table border=0 cellspacing=0 cellpadding=0 width=98% align=center>
     
     <input name="idlist" type="hidden">
     <input name="change_owner" type="hidden">
     <input name="change_status" type="hidden">
     <input name="search_criteria" type="hidden" value="<?php echo $this->_tpl_vars['SEARCH_STRING']; ?>
">
     <input name="module" type="hidden" value="<?php echo $this->_tpl_vars['MODULE']; ?>
" />
     <input name="<?php echo $this->_tpl_vars['MODULE']; ?>
RecordCount" id="<?php echo $this->_tpl_vars['MODULE']; ?>
RecordCount" type="hidden" value="<?php echo $this->_tpl_vars['ModuleRecordCount'][$this->_tpl_vars['MODULE']]['count']; ?>
" />
     <tr>
		<td>
	   <!-- PUBLIC CONTENTS STARTS-->
	   <br>
		<div class="small" style="padding:2px">
			<table border=0 cellspacing=1 cellpadding=0 width=100% class="lvtBg">
	           <tr >
					<td>
						<table border=0 cellspacing=0 cellpadding=2 width=100% class="small">
				   			<tr>
							<?php $this->assign('MODULELABEL', $this->_tpl_vars['MODULE']); ?>
							<?php if ($this->_tpl_vars['APP'][$this->_tpl_vars['MODULE']] != ''): ?>
								<?php $this->assign('MODULELABEL', $this->_tpl_vars['APP'][$this->_tpl_vars['MODULE']]); ?>
							<?php endif; ?>
								<td style="padding-right:20px" nowrap ><b class=big><?php echo $this->_tpl_vars['MODULELABEL']; ?>
</b><?php echo $this->_tpl_vars['SEARCH_CRITERIA']; ?>
</td>					
								<td style="padding-right:20px" class="small" align="right" nowrap><?php echo $this->_tpl_vars['ModuleRecordCount'][$this->_tpl_vars['MODULE']]['recordListRangeMessage']; ?>
</td>
								<td nowrap width="50%">
									<table border=0 cellspacing=0 cellpadding=0 class="small">
									   <tr><?php echo $this->_tpl_vars['NAVIGATION']; ?>
</tr>
									</table>
								</td>					
				  			 </tr>
						</table>
                 		<div  class="searchResults">
			 				<table border=0 cellspacing=0 cellpadding=3 width=100% class="small">
				   				<tr>
								<?php if ($this->_tpl_vars['DISPLAYHEADER'] == 1): ?>
									<?php $_from = $this->_tpl_vars['LISTHEADER']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['header']):
?>
									<td class="mailSubHeader"><?php echo $this->_tpl_vars['header']; ?>
</td>
									<?php endforeach; endif; unset($_from); ?>
								<?php else: ?>
									<td class="searchResultsRow" colspan=$HEADERCOUNT> <?php echo $this->_tpl_vars['APP']['LBL_NO_DATA']; ?>
 </td>
								<?php endif; ?>
				   				</tr>
							   <?php $_from = $this->_tpl_vars['LISTENTITY']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['entity_id'] => $this->_tpl_vars['entity']):
?>
							   <tr bgcolor=white onMouseOver="this.className='lvtColDataHover'" onMouseOut="this.className='lvtColData'"  >
								<?php $_from = $this->_tpl_vars['entity']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?>	
									<td><?php echo $this->_tpl_vars['data']; ?>
</td>
								<?php endforeach; endif; unset($_from); ?>
							   </tr>
							   <?php endforeach; endif; unset($_from); ?>
							</table>
			 			</div>
					</td>
		   		</tr>
			</table>
	   </div>	   
	</td>
   </tr>
</table>
</form>	
</div>
<?php if ($this->_tpl_vars['SEARCH_MODULE'] == 'All'): ?>
<script>
displayModuleList(document.getElementById('global_search_module'));
</script>
<?php endif; ?>