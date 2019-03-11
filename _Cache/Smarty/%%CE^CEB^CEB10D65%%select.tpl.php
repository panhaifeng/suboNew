<?php /* Smarty version 2.6.10, created on 2018-12-10 13:51:58
         compiled from Main2Son/select.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'Main2Son/select.tpl', 3, false),array('function', 'webcontrol', 'Main2Son/select.tpl', 4, false),)), $this); ?>
<?php $this->_cache_serials['Lib/App/../../_Cache/Smarty\%%CE^CEB^CEB10D65%%select.tpl.inc'] = 'feb3b5307fe3a868729d270864907c2a'; ?><div class="col-xs-4">
  <div class="form-group">
    <label for="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['key']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['key'])); ?>
" class="col-sm-3 control-label lableMain"><?php echo $this->_tpl_vars['item']['title']; ?>
:</label>
    <div class="col-sm-9"><?php if ($this->caching && !$this->_cache_including) { echo '{nocache:feb3b5307fe3a868729d270864907c2a#0}';}echo $this->_plugins['function']['webcontrol'][0][0]->_pi_func_webcontrol(array('type' => 'btselect','model' => $this->_tpl_vars['item']['model'],'options' => $this->_tpl_vars['item']['options'],'value' => $this->_tpl_vars['item']['value'],'itemName' => ((is_array($_tmp=@$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['key']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['key'])),'condition' => $this->_tpl_vars['item']['condition']), $this);if ($this->caching && !$this->_cache_including) { echo '{/nocache:feb3b5307fe3a868729d270864907c2a#0}';}?>
      
    </div>
  </div>
</div>