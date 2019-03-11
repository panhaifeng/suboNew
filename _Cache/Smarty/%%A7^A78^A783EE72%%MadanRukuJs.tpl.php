<?php /* Smarty version 2.6.10, created on 2018-12-10 13:52:01
         compiled from Cangku/Chengpin/MadanRukuJs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'webcontrol', 'Cangku/Chengpin/MadanRukuJs.tpl', 1, false),)), $this); ?>
<?php $this->_cache_serials['Lib/App/../../_Cache/Smarty\%%A7^A78^A783EE72%%MadanRukuJs.tpl.inc'] = '03e92fe3ed50cb237d2cb2bd2b322b49';  if ($this->caching && !$this->_cache_including) { echo '{nocache:03e92fe3ed50cb237d2cb2bd2b322b49#0}';}echo $this->_plugins['function']['webcontrol'][0][0]->_pi_func_webcontrol(array('type' => 'LoadJsCss','src' => "Resource/Script/jquery.json.js"), $this);if ($this->caching && !$this->_cache_including) { echo '{/nocache:03e92fe3ed50cb237d2cb2bd2b322b49#0}';}?>

<script language="javascript">
<?php echo '
$(function(){
	/**
	* 码单按钮单机事件
	* 打开码单入库界面
	*/
	$(\'[name="btnMadan"]\').live(\'click\',function(){
		
		//url地址
		var url="?controller=Cangku_Chengpin_Ruku&action=SetMadan";
		var trRow = $(this).parents(".trRow");
		// var ruku2proId = $(\'[name="id[]"]\',trRow).val();
		// url+="&ruku2proId="+ruku2proId;
		//弹出窗口，设置宽度高度
		var width = screen.width;
		var height = screen.height;
		width = width>1300?1300:width;
		height = height>640?640:height;
		//获取码单选择信息
		// var madan = $(\'[name="Madan[]"]\',trRow).val();
		// var ret = window.showModalDialog(url,{data:$.toJSON(madan)},\'dialogWidth:\'+width+\'px;dialogHeight:\'+height+\'px;\');
		//取得隐藏字段的值，保存的是码单信息
		var madan = $(\'[name="Madan[]"]\',trRow).val();
		if(madan==\'\')madan=\'""\';//第一次进入的时候，隐藏字段不能为空
		var ret = window.showModalDialog(url,{data:madan},\'dialogWidth:\'+width+\'px;dialogHeight:\'+height+\'px;\');
	    if(!ret){
	    	//window.returnValue取得返回值
	    	ret=window.returnValue;
	    	//第二次如果没有返回值的话，会取上一次的值，因此设置window.returnValue=null
	    	window.returnValue=null;
	    }
	    if(!ret) return;
		if(ret.ok!=1)return false;
		// debugger;
		$(\'[name="cntJian[]"]\',trRow).val(ret.cntJian);
		$(\'[name="cnt[]"]\',trRow).val(ret.cnt);
		$(\'[name="cntM[]"]\',trRow).val(ret.cntM);
		$(\'[name="cntMadan[]"]\',trRow).val(ret.cntMadan);
		$(\'[name="Madan[]"]\',trRow).val(ret.jsonStr);
	});
});
'; ?>

</script>