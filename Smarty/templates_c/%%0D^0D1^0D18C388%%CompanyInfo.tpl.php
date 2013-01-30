<?php /* Smarty version 2.6.18, created on 2013-01-30 01:02:58
         compiled from Settings/CompanyInfo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'Settings/CompanyInfo.tpl', 17, false),)), $this); ?>
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
	<form action="index.php" method="post" name="company" onsubmit="VtigerJS_DialogBox.block();">
    	<input type="hidden" name="module" value="Settings">
    	<input type="hidden" name="parenttab" value="Settings">
	<input type="hidden" name="action">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "SetMenu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
				<!-- DISPLAY -->
				<table border=0 cellspacing=0 cellpadding=5 width=100% class="settingsSelUITopLine">
				<tr>
					<td width=50 rowspan=2 valign=top><img src="<?php echo vtiger_imageurl('company.gif', $this->_tpl_vars['THEME']); ?>
" alt="<?php echo $this->_tpl_vars['MOD']['LBL_USERS']; ?>
" width="48" height="48" border=0 title="<?php echo $this->_tpl_vars['MOD']['LBL_USERS']; ?>
"></td>
					<td class=heading2 valign=bottom><b><a href="index.php?module=Settings&action=index&parenttab=Settings"><?php echo $this->_tpl_vars['MOD']['LBL_SETTINGS']; ?>
</a> > <?php echo $this->_tpl_vars['MOD']['LBL_COMPANY_DETAILS']; ?>
 </b></td>
				</tr>
				<tr>
					<td valign=top class="small"><?php echo $this->_tpl_vars['MOD']['LBL_COMPANY_DESC']; ?>
 </td>
				</tr>
				</table>
				
				<br>
				<table border=0 cellspacing=0 cellpadding=10 width=100% >
				<tr>
				<td>
				
					<table border=0 cellspacing=0 cellpadding=5 width=100% class="tableHeading">
					<tr>
						<td class="big"><strong><?php echo $this->_tpl_vars['MOD']['LBL_COMPANY_DETAILS']; ?>
 </strong></td>
						<td class="small" align=right>
							<input class="crmButton small edit" title="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_KEY']; ?>
" onclick="this.form.action.value='EditCompanyDetails'" type="submit" name="Edit" value="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_LABEL']; ?>
">
						</td>
					</tr>
					</table>
					
					<table border=0 cellspacing=0 cellpadding=0 width=100% class="listRow">
					<tr>
						<td class="small" valign=top ><table width="100%"  border="0" cellspacing="0" cellpadding="5">
                          <tr>
                            <td width="20%" class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_ORGANIZATION_NAME']; ?>
</strong></td>
                            <td width="80%" class="small cellText"><strong><?php echo $this->_tpl_vars['ORGANIZATIONNAME']; ?>
</strong></td>
                          </tr>
                          <tr valign="top">
                            <td class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_ORGANIZATION_LOGO']; ?>
</strong></td>
                            <td class="small cellText" style="background-image: url(<?php echo $this->_tpl_vars['ORGANIZATIONLOGOPATH']; ?>
/<?php echo $this->_tpl_vars['ORGANIZATIONLOGONAME']; ?>
); background-position: left; background-repeat: no-repeat;" width="48" height="48" border="0"></td>
                          </tr>
                          <tr>
                            <td class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_ORGANIZATION_ADDRESS']; ?>
</strong></td>
                            <td class="small cellText"><?php echo $this->_tpl_vars['ORGANIZATIONADDRESS']; ?>
</td>
                          </tr>
                          <tr> 
                            <td class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_ORGANIZATION_CITY']; ?>
</strong></td>
                            <td class="small cellText"><?php echo $this->_tpl_vars['ORGANIZATIONCITY']; ?>
</td>
                          </tr>
                          <tr>
                            <td class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_ORGANIZATION_STATE']; ?>
</strong></td>
                            <td class="small cellText"><?php echo $this->_tpl_vars['ORGANIZATIONSTATE']; ?>
</td>
                          </tr>
                          <tr>
                            <td class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_ORGANIZATION_CODE']; ?>
</strong></td>
                            <td class="small cellText"><?php echo $this->_tpl_vars['ORGANIZATIONCODE']; ?>
</td>
                          </tr>
                          <tr>
                            <td class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_ORGANIZATION_COUNTRY']; ?>
</strong></td>
                            <td class="small cellText"><?php echo $this->_tpl_vars['ORGANIZATIONCOUNTRY']; ?>
</td>
                          </tr>
                          <tr>
                            <td class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_ORGANIZATION_PHONE']; ?>
</strong></td>
                            <td class="small cellText"><?php echo $this->_tpl_vars['ORGANIZATIONPHONE']; ?>
</td>
                          </tr>
                          <tr>
                            <td class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_ORGANIZATION_FAX']; ?>
</strong></td>
                            <td class="small cellText"><?php echo $this->_tpl_vars['ORGANIZATIONFAX']; ?>
</td>
                          </tr>
                          <tr>
                            <td class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_ORGANIZATION_WEBSITE']; ?>
</strong></td>
                            <td class="small cellText"><?php echo $this->_tpl_vars['ORGANIZATIONWEBSITE']; ?>
</td>
                          </tr>
                        </table>
						
						</td>
					  </tr>
					</table>
					<!--table border=0 cellspacing=0 cellpadding=5 width=100% >
					<tr>
					  <td class="small" nowrap align=right><a href="#top"><?php echo $this->_tpl_vars['MOD']['LBL_SCROLL']; ?>
</a></td>
					</tr>
					</table-->
				</td>
				</tr>
				</table>
			
			
			
			</td>
			</tr>
			</table>
		</td>
	</tr>
	</table>
	</form>	
	</div>
</td>
        <td valign="top"><img src="<?php echo vtiger_imageurl('showPanelTopRight.gif', $this->_tpl_vars['THEME']); ?>
"></td>
   </tr>
</tbody>
</table>