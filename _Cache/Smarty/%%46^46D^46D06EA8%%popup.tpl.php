<?php /* Smarty version 2.6.10, created on 2018-12-10 13:52:01
         compiled from Main2Son/popup.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'Main2Son/popup.tpl', 3, false),array('function', 'webcontrol', 'Main2Son/popup.tpl', 8, false),)), $this); ?>
<?php $this->_cache_serials['Lib/App/../../_Cache/Smarty\%%46^46D^46D06EA8%%popup.tpl.inc'] = 'd2190b41a7da203146819f11bceb9833'; ?><div class="col-xs-4">
    <div class="form-group">
        <label for="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['key']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['key'])); ?>
" class="col-sm-3 control-label lableMain"><?php echo $this->_tpl_vars['item']['title']; ?>
:</label>
        <div class="col-sm-9">
                    <?php if ($this->caching && !$this->_cache_including) { echo '{nocache:d2190b41a7da203146819f11bceb9833#0}';}echo $this->_plugins['function']['webcontrol'][0][0]->_pi_func_webcontrol(array('type' => 'btPopup','itemName' => ((is_array($_tmp=@$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['key']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['key'])),'value' => $this->_tpl_vars['item']['value'],'disabled' => $this->_tpl_vars['item']['disabled'],'readonly' => $this->_tpl_vars['item']['readonly'],'text' => $this->_tpl_vars['item']['text'],'url' => $this->_tpl_vars['item']['url'],'textFld' => $this->_tpl_vars['item']['textFld'],'hiddenFld' => $this->_tpl_vars['item']['hiddenFld']), $this);if ($this->caching && !$this->_cache_including) { echo '{/nocache:d2190b41a7da203146819f11bceb9833#0}';}?>

        </div>
    </div>
</div>