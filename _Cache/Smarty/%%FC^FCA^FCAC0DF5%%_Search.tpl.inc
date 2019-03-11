<?php /* Smarty version 2.6.10, created on 2019-01-10 07:15:11
         compiled from _Search.tpl */

$this->_cache_serials['Lib/App/../../_Cache/Smarty\%%FC^FCA^FCAC0DF5%%_Search.tpl.inc'] = '39c038d956bbdb659baf62f777dd055b';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '_Search.tpl', 11, false),array('modifier', 'default', '_Search.tpl', 24, false),array('function', 'url', '_Search.tpl', 22, false),)), $this); ?>
<?php
function _smarty_tplfunc_39c038d956bbdb659baf62f777dd055b_0(&$_smarty)
{
echo $_smarty->_plugins['function']['url'][0][0]->_pi_func_url(array('controller' => $_GET['controller'],'action' => 'add'), $_smarty);
}


function _smarty_tplfunc_39c038d956bbdb659baf62f777dd055b_1(&$_smarty)
{
echo $_smarty->_plugins['function']['url'][0][0]->_pi_func_url(array('controller' => $_GET['controller'],'action' => 'list'), $_smarty);
}



?>
