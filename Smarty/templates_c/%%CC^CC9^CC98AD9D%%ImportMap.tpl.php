<?php /* Smarty version 2.6.18, created on 2013-01-29 07:28:59
         compiled from ImportMap.tpl */ ?>


<?php $this->assign('Firstrow', $this->_tpl_vars['FIRSTROW']); ?>
<table border="0" class="small cellLabel" cellpadding="0" cellspacing="1" width="100%">
	<?php $_from = $this->_tpl_vars['Firstrow']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['iter'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['iter']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['row']):
        $this->_foreach['iter']['iteration']++;
?>
	<?php $this->assign('counter', $this->_foreach['iter']['iteration']); ?>
	<tr>
		<td class="small" align="center" height="30">
			<?php echo $this->_tpl_vars['SELECTFIELD'][$this->_tpl_vars['counter']]; ?>

		</td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
</table>
