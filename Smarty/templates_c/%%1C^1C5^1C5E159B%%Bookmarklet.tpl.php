<?php /* Smarty version 2.6.18, created on 2013-01-29 07:28:17
         compiled from modules/Bookmarklet/Bookmarklet.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Vtiger Bookmarklet</title>
<script type="text/javascript" src="modules/Emails/GmailBookmarklet.js"></script>
<style type="text/css">
<?php echo '
.small {
	color:#000000;
	font-family:Arial,Helvetica,sans-serif;
	font-size:11px;
}
.big {
	background-color: #E7E7E7;
	font-family: Arial, Helvetica, sans-serif;
	font-size:14px;
}
.tableHeading {
	background:#D7D7D7;
	border:1px solid #DEDEDE;
}
.dvtCellLabel, .cellLabel {
	background:#F7F7F7;
	border-bottom:1px solid #DEDEDE;
	border-left:1px solid #DEDEDE;
	border-right:1px solid #DEDEDE;
	color:#545454;
	padding-left:10px;
	padding-right:10px;
	white-space:nowrap;
}
.dvtCellInfo, .cellInfo {
	border-bottom:1px solid #DEDEDE;
	border-left:1px solid #DEDEDE;
	border-right:1px solid #DEDEDE;
	padding-left:10px;
	padding-right:10px;
}
.button {
	width: 70px;
	color: white;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
}
.save {
	background-color: #9CC83E;
}
.cancel {
	background-color: #E0AD07;
}

/** Hack to hide the footer from UI */
.settingsSelectedUI { display: none; }

/* Styling for result */
ul.searchResult {
	list-style-type: none;
	margin: 0; padding: 0;
}
ul.searchResult li {
	display: inline;
	margin: 0; padding: 0;
	padding-right: 10px;
	line-height: 1.5em;
}
ul.searchResult li a {
	cursor: pointer;
	color: blue;
}
ul.searchResult li a:hover {
	background-color: #565656;
	color: white;
}
'; ?>

</style>
<script type="text/javascript">
		var moduleNameFields = '<?php echo $this->_tpl_vars['entityNameFields']; ?>
';
		var moduleEmailFields = '<?php echo $this->_tpl_vars['emailFields']; ?>
';
</script>
</head>

<body onload="init();" class="small">
	<div id="__vtigerBookMarkletDiv__">
		<div>
		<img src="themes/images/vtigerlogo.jpg" alt="vtiger CRM" title="vtiger CRM" border="0" style="width: 80px; height: 30px"
		</div>
								
		<table width="99%" cellspacing="0" cellpadding="5" border="0" class="tableHeading">
		<tr>
			<td class="big">Google Mail Information<br/></td>
			<td class="big" align="right"><input id="__saveVtigerEmail__" value="Save" type="button" class="button save"></td>
		</tr>
		</table>
	
		<table border="0" cellpadding="5" cellspacing="0" width="99%" class="small">
			<tbody>
				<tr>
					<td class="dvtCellLabel" align="right">Subject</td>
					<td class="dvtCellInfo" colspan=2><input id="subject" class="small" value="<?php echo $this->_tpl_vars['subject']; ?>
" size="63"></td>
				</tr>
				<tr>
					<td class="dvtCellLabel" align="right">Body</td>
					<td class="dvtCellInfo" colspan=2>
						<textarea id="description" rows="5" cols="60" class="small">Original message can be viewed &lt;a href="<?php echo $this->_tpl_vars['description']; ?>
"&gt;here&lt;/a&gt;
Update your custom description ...</textarea>
					</td>
				</tr>
				<tr>
					<td class="dvtCellLabel">
						<select id="parentType" class="small">
							<?php $_from = $this->_tpl_vars['types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['moduleName']):
?>
							<option value="<?php echo $this->_tpl_vars['moduleName']; ?>
"><?php echo $this->_tpl_vars['moduleName']; ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
						</select>
					</td>
					<td class="dvtCellInfo" width="20%">
						<span id="parentName" class="small bold">&nbsp;</span><br>
						<input id="parent_id" value="" type="hidden" />
						<input id="parentEmail" value="" type="hidden" />
						<input id="userEmail" value="<?php echo $this->_tpl_vars['userEmail']; ?>
" type="hidden" />
					</td>
					<td class="dvtCellInfo">
						<input id="__searchaccount__" value="" size="30" />&nbsp; 
						<input class="button save" id="__searchVtigerAccount__" value="Search" type="button" />
					</td>
				</tr>
				<tr id="__vtigerAccountSearchList___">
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>