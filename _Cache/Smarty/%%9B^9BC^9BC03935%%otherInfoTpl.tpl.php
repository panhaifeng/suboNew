<?php /* Smarty version 2.6.10, created on 2019-01-10 07:15:13
         compiled from Trade/otherInfoTpl.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'Trade/otherInfoTpl.tpl', 6, false),)), $this); ?>
<div class="panel panel-info">
  <div class="panel-heading"><h3 class="panel-title" style="text-align:left;">合同备注</h3></div>
  <div class="panel-body">
    <div class="row">      
      <?php $_from = $this->_tpl_vars['arr_memo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp="Main2Son/")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['item']['type']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['item']['type'])))) ? $this->_run_mod_handler('cat', true, $_tmp, ".tpl") : smarty_modifier_cat($_tmp, ".tpl")), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>      
      <?php endforeach; endif; unset($_from); ?>
    </div>       
  </div>
</div>

<div class="panel panel-info">
  <div class="panel-heading"><h3 class="panel-title" style="text-align:left;">合同条款</h3></div>
  <div class="panel-body">
    <div class="row">      
      <?php $_from = $this->_tpl_vars['arr_item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp="Main2Son/")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['item']['type']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['item']['type'])))) ? $this->_run_mod_handler('cat', true, $_tmp, ".tpl") : smarty_modifier_cat($_tmp, ".tpl")), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>      
      <?php endforeach; endif; unset($_from); ?>
    </div>       
  </div>
</div>