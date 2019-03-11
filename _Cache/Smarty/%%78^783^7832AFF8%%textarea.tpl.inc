<?php /* Smarty version 2.6.10, created on 2018-12-10 13:51:58
         compiled from Main2Son/textarea.tpl */

$this->_cache_serials['Lib/App/../../_Cache/Smarty\%%78^783^7832AFF8%%textarea.tpl.inc'] = '072891843b79eec7579b3c09de21e388';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'Main2Son/textarea.tpl', 3, false),array('function', 'webcontrol', 'Main2Son/textarea.tpl', 5, false),)), $this); ?>
<?php
function _smarty_tplfunc_072891843b79eec7579b3c09de21e388_0(&$_smarty)
{
echo $_smarty->_plugins['function']['webcontrol'][0][0]->_pi_func_webcontrol(array('type' => 'bttextarea','itemName' => ((is_array($_tmp=@$_smarty->_tpl_vars['item']['name'])) ? $_smarty->_run_mod_handler('default', true, $_tmp, @$_smarty->_tpl_vars['key']) : smarty_modifier_default($_tmp, @$_smarty->_tpl_vars['key'])),'value' => $_smarty->_tpl_vars['item']['value'],'disabled' => $_smarty->_tpl_vars['item']['disabled'],'readonly' => $_smarty->_tpl_vars['item']['readonly']), $_smarty);
}



?>
