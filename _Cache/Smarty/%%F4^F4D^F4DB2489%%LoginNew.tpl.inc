<?php /* Smarty version 2.6.10, created on 2018-12-10 10:19:49
         compiled from LoginNew.tpl */

$this->_cache_serials['Lib/App/../../_Cache/Smarty\%%F4^F4D^F4DB2489%%LoginNew.tpl.inc'] = '0870be1d1c56a72eaa3508046299e62d';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'webcontrol', 'LoginNew.tpl', 5, false),array('function', 'url', 'LoginNew.tpl', 35, false),array('modifier', 'default', 'LoginNew.tpl', 74, false),array('modifier', 'date_format', 'LoginNew.tpl', 74, false),)), $this); ?>
<?php
function _smarty_tplfunc_0870be1d1c56a72eaa3508046299e62d_0(&$_smarty)
{
echo $_smarty->_plugins['function']['webcontrol'][0][0]->_pi_func_webcontrol(array('type' => 'GetAppInf','varName' => 'systemV'), $_smarty);
}


function _smarty_tplfunc_0870be1d1c56a72eaa3508046299e62d_1(&$_smarty)
{
echo $_smarty->_plugins['function']['webcontrol'][0][0]->_pi_func_webcontrol(array('type' => 'GetAppInf','varName' => 'systemV'), $_smarty);
}


function _smarty_tplfunc_0870be1d1c56a72eaa3508046299e62d_2(&$_smarty)
{
echo $_smarty->_plugins['function']['url'][0][0]->_pi_func_url(array('controller' => $_GET['controller'],'action' => 'login'), $_smarty);
}


function _smarty_tplfunc_0870be1d1c56a72eaa3508046299e62d_3(&$_smarty)
{
echo $_smarty->_plugins['function']['url'][0][0]->_pi_func_url(array('controller' => $_GET['controller'],'action' => 'createshortcuts'), $_smarty);
}



?>
