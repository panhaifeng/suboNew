<?php /* Smarty version 2.6.10, created on 2019-01-10 07:15:14
         compiled from Trade/_addInfoJs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'Trade/_addInfoJs.tpl', 3, false),)), $this); ?>

<script language="javascript">
var orderCode = '<?php echo ((is_array($_tmp=@$this->_tpl_vars['orderCode'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
';
<?php echo '
// var orderCode = {$orderCode|default:\'""\'};
$(function(){	
	$(\'#traderId\').change(function(){
		var param={id:$(this).val()};
		var url=\'?controller=Jichu_Employ&action=AjaxCodeAtEmploy\'
			$.getJSON(url,param,function(json){
				var code = orderCode+json.codeAtEmploy
				$(\'#orderCode\').val(code);
		})
	});
});
</script>
'; ?>