<?php /* Smarty version 2.6.10, created on 2018-12-10 13:52:19
         compiled from Main2Son/clientpopup.tpl */

$this->_cache_serials['Lib/App/../../_Cache/Smarty\%%F6^F69^F6946F00%%clientpopup.tpl.inc'] = '3fcf43d02fe73c0cb97d7aadf9f79599';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'Main2Son/clientpopup.tpl', 3, false),array('function', 'webcontrol', 'Main2Son/clientpopup.tpl', 5, false),)), $this); ?>
<?php
function _smarty_tplfunc_3fcf43d02fe73c0cb97d7aadf9f79599_0(&$_smarty)
{
echo $_smarty->_plugins['function']['webcontrol'][0][0]->_pi_func_webcontrol(array('type' => 'btclientpopup','value' => $_smarty->_tpl_vars['item']['value'],'clientName' => $_smarty->_tpl_vars['item']['clientName'],'itemName' => ((is_array($_tmp=@$_smarty->_tpl_vars['item']['name'])) ? $_smarty->_run_mod_handler('default', true, $_tmp, @$_smarty->_tpl_vars['key']) : smarty_modifier_default($_tmp, @$_smarty->_tpl_vars['key']))), $_smarty);
}



?>
