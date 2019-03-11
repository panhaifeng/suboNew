<?php /* Smarty version 2.6.10, created on 2018-12-10 13:51:48
         compiled from Search/traderId.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'webcontrol', 'Search/traderId.tpl', 2, false),)), $this); ?>
<?php $this->_cache_serials['Lib/App/../../_Cache/Smarty\%%91^91F^91F65C8E%%traderId.tpl.inc'] = '240c4537d4a1ed284c2662223347e696'; ?><select name="traderId" id="traderId">
    		<?php if ($this->caching && !$this->_cache_including) { echo '{nocache:240c4537d4a1ed284c2662223347e696#0}';}echo $this->_plugins['function']['webcontrol'][0][0]->_pi_func_webcontrol(array('type' => 'Traderoptions','model' => 'Jichu_Employ','selected' => $this->_tpl_vars['arr_condition']['traderId'],'emptyText' => '选择业务员'), $this);if ($this->caching && !$this->_cache_including) { echo '{/nocache:240c4537d4a1ed284c2662223347e696#0}';}?>

 </select>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'GetClientByTraderIdJson.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>