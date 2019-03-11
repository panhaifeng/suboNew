<?php /* Smarty version 2.6.10, created on 2018-12-10 13:52:01
         compiled from Main2Son/popup.tpl */

$this->_cache_serials['Lib/App/../../_Cache/Smarty\%%46^46D^46D06EA8%%popup.tpl.inc'] = 'd2190b41a7da203146819f11bceb9833';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'Main2Son/popup.tpl', 3, false),array('function', 'webcontrol', 'Main2Son/popup.tpl', 8, false),)), $this); ?>
<?php
function _smarty_tplfunc_d2190b41a7da203146819f11bceb9833_0(&$_smarty)
{
echo $_smarty->_plugins['function']['webcontrol'][0][0]->_pi_func_webcontrol(array('type' => 'btPopup','itemName' => ((is_array($_tmp=@$_smarty->_tpl_vars['item']['name'])) ? $_smarty->_run_mod_handler('default', true, $_tmp, @$_smarty->_tpl_vars['key']) : smarty_modifier_default($_tmp, @$_smarty->_tpl_vars['key'])),'value' => $_smarty->_tpl_vars['item']['value'],'disabled' => $_smarty->_tpl_vars['item']['disabled'],'readonly' => $_smarty->_tpl_vars['item']['readonly'],'text' => $_smarty->_tpl_vars['item']['text'],'url' => $_smarty->_tpl_vars['item']['url'],'textFld' => $_smarty->_tpl_vars['item']['textFld'],'hiddenFld' => $_smarty->_tpl_vars['item']['hiddenFld']), $_smarty);
}



?>
