<?php /* Smarty version 2.6.10, created on 2018-12-10 13:51:58
         compiled from Main2Son/_jsCommon.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'webcontrol', 'Main2Son/_jsCommon.tpl', 8, false),array('modifier', 'json_encode', 'Main2Son/_jsCommon.tpl', 11, false),)), $this); ?>
<?php $this->_cache_serials['Lib/App/../../_Cache/Smarty\%%D3^D3B^D3B46A51%%_jsCommon.tpl.inc'] = '1dc98eaf3a86baf237a470cbfa4c1199'; ?><!-- _jsCommon.tpl -->
<script language="javascript" src="Resource/Script/Calendar/WdatePicker.js"></script>
<script language="javascript" src="Resource/bootstrap/bootstrap3.0.3/js/jquery.min.js"></script>
<script language="javascript" src="Resource/Script/jquery.validate.js"></script><!-- Bootstrap -->
<script src="Resource/bootstrap/bootstrap3.0.3/js/bootstrap.js"></script>
<script src="Resource/bootstrap/bootstrap3.0.3/js/tooltip.js"></script>
<?php if ($this->caching && !$this->_cache_including) { echo '{nocache:1dc98eaf3a86baf237a470cbfa4c1199#0}';}echo $this->_plugins['function']['webcontrol'][0][0]->_pi_func_webcontrol(array('type' => 'LoadJsCss','src' => "Resource/Script/layer/layer.js"), $this);if ($this->caching && !$this->_cache_including) { echo '{/nocache:1dc98eaf3a86baf237a470cbfa4c1199#0}';}?>

<script language="javascript">
var _removeUrl='?controller=<?php echo $_GET['controller']; ?>
&action=RemoveByAjax';
var _rules = <?php echo json_encode($this->_tpl_vars['rules']); ?>
;
var onSelect = null;
<?php echo '
$(function(){
  //日历下拉按钮点击后触发calendar;
  $(\'[id="btnCalendar"]\').click(function(){
    var p = $(this).parents(\'.input-group\');
    WdatePicker({el:$(\'input\',p)[0]});
  });

  //删除行,临时写在这里，后期需要用sea.js封装
  $(\'[id="btnRemove"]\').click(function(){
    //利用ajax删除,后期需要利用sea.js进行封装
    var url=_removeUrl;
    var trs = $(\'.trRow\');
    if(trs.length<=1) {
      alert(\'至少保存一个明细\');
      return;
    }

    var tr = $(this).parents(\'.trRow\');
    var id = $(\'[name="id[]"]\',tr).val();
    if(!id) {
      tr.remove();
      return;
    }

    if(!confirm(\'此删除不可恢复，你确认吗?\')) return;
    var param={\'id\':id};
    $.post(url,param,function(json){
      if(!json.success) {
        alert(\'出错\');
        return;
      }
      tr.remove();
      window.parent.showMsg(\'删除成功!\');
    },\'json\');
    return;
  });


  //复制行,临时写在这里，后期需要用sea.js封装
  // $(\'#btnAdd\').click(function(){
  //   var rows = $(\'.trRow\');
  //   var len = rows.length;
  //   for(var i=0;i<5;i++) {
  //     var nt = rows.eq(len-1).clone(true);
  //     $(\'input,select\',nt).val(\'\');
  //     rows.eq(len-1).after(nt);
  //   }
  //   return;
  // });

  //复制行,临时写在这里，后期需要用sea.js封装
  $(\'#btnAdd\',\'#table_main\').click(function(){
    fnAdd(\'#table_main\');
  });
  //复制行,临时写在这里，后期需要用sea.js封装
  $(\'#btnAdd\',\'#table_else\').click(function(){
    fnAdd(\'#table_else\');
  });

  //输入数量单价自动计算金额
  // alert(1);
  $(\'[name="danjia[]"],[name="cnt[]"],[name="cntYaohuo[]"]\',\'.trRow\').change(function(){
    var tr=$(this).parents(\'.trRow\');
    var danjia = $(\'[name="danjia[]"]\',tr);
    var cnt = $(\'[name="cnt[]"]\',tr);
    if(cnt.length==0) cnt= $(\'[name="cntYaohuo[]"]\',tr);
    // alert(danjia);alert(cnt);
    var money = parseFloat(danjia.val()||0)*parseFloat(cnt.val()||0);
    $(\'[name="money[]"]\',tr).val(money.toFixed(2));
  });

  //当单位选择的是公斤的时候，把数量 复制给 折合公斤数 
  $(\'[name="cnt[]"],[name="unit[]"]\',\'.trRow\').change(function(){
    var tr=$(this).parents(\'.trRow\');
    var cnt = $(\'[name="cnt[]"]\',tr);
    var select=$(\'[name="unit[]"]\',tr).val();
    if(select=="公斤"){
      $(\'[name="cntZhehe[]"]\',tr).val(cnt.val());
    }else{
      $(\'[name="cntZhehe[]"]\',tr).val(\'\');
    }
  });

  //输入金额，自动计算单价

  //表单验证
  //表单验证应该被封装起来。
  var rules = $.extend({},_rules);
  $(\'#form1\').validate({
    rules:rules,
    submitHandler : function(form){
      var r=true;
      if(typeof(beforeSubmit)=="function") {
        r = beforeSubmit();
      }
      if(!r) return;
      $(\'[name="Submit"]\').attr(\'disabled\',true);
      form.submit();
    }
     ,errorPlacement: function(error, element) {
      var type = element.attr(\'type\');
      var obj = element;
      if(type==\'hidden\') {//如果是hidden控件，需要取得非hidden控件，否则位置会报错
        var par = element.parents(\'.input-group\');
        obj = $(\'input[type="text"]\',par);
      }
      var errorText = error.text();
      obj.attr(\'data-toggle\',\'tooltip\').attr(\'data-placement\',\'bottom\').attr(\'title\',errorText);
      obj.tooltip(\'show\');      
    }

    // ,debug:true
    ,onfocusout:false
    ,onclick:false
    ,onkeyup:false
  });

  ///////////////////////////弹出选择控件
  //临时写在这里，后期需要用sea.js封装
  //临时写在这里，后期需要用sea.js封装
  $(\'#btnclientName\').click(function(){
      //重写onSelect接口后再弹出
    var _this = this;
    onSelect = function(ret) {
      $(_this).siblings(\'#clientId\').val(ret.id);
      $(_this).siblings(\'#clientName\').val(ret.compName);
      return;
    }
    var url="?controller=Jichu_Client&action=Popup";
   var ret = window.open(url,\'newwindow\',\'height=500,width=1000,top=200,left=400\');
    // var ret = window.showModalDialog(url,window);
    // if(!ret) ret=window.returnValue;
    // if(!ret) return;
    //触发onSelClient函数
    if(onSelect) onSelect(this);
    return;
  });

  //产品选择,临时写在这里，后期需要用sea.js封装
  $(\'[name="btnProduct"]\').click(function(){
    //重写onSelect接口后再弹出
    var _this = this;
    onSelect = function(ret) {
      var tr = $(_this).parents(".trRow");
      $(\'[name="proCode"]\',tr).val(ret.proCode);
      $(\'[name="productId[]"]\',tr).val(ret.id);
      $(\'[name="proName[]"]\',tr).val(ret.proName);
      $(\'[name="guige[]"]\',tr).val(ret.guige);
      // alert(ret.guige);
      $(\'[name="proName[]"]\',tr).attr("title",ret.proName);
      //alert(ret.color);
      $(\'[name="color[]"]\',tr).val(ret.color);
      if(!ret.unit){
        $(\'[name="unit[]"]\',tr).val(\'公斤\');
      }
      else{
        $(\'[name="unit[]"]\',tr).val(ret.unit);
      }
      $(\'[name="cnt[]"]\',tr).focus();
      return;
    }
    var url="?controller=jichu_product&action=popup";
    var ret = window.open(url,\'window\',\'height=600,width=1200,top=150,left=300\');
  });

  //订单选择
  $(\'#btnorderName\').click(function(){
    var url="?controller=Trade_Order&action=popup";
       //var ret = window.open(url,\'newwindow\',\'height=500,width=1000,top=200,left=400\');
    var ret = window.showModalDialog(url,window);
    if(!ret) ret=window.returnValue;
    if(!ret) return;
    //控件显示订单号
    var g = $(this).parents(\'.form-group\');
    $(\'#orderName\',g).val(ret.orderCode);
    $(\'#orderId\',g).val(ret.orderId);
    // $(\'#color\',g).val(ret.color);
    //填充产品信息
    //找到该行对象   
    //删除空的行
    //$("[name=\'productId[]\'][value=\'\']",".trRow").parents(".trRow").remove();
    if(onSelOrder) onSelOrder(this,ret);
    return;
  })

  // //订单选择
  // $(\'[name="btnPlanCode"]\').click(function(){
  //   var url="?controller=Shengchan_Plan&action=popup";
  //  var ret = window.open(url,\'newwindow\',\'height=300,width=500\');
  //   if(!ret) ret=window.returnValue;
  //   if(!ret) return;
  //   //控件显示订单号
  //   var g = $(this).parents(\'.input-group\');
  //   // debugger;
  //   // alert(ret.planCode);alert($(\'#planCode\',g).val());
  //   $(\'#planCode\',g).val(ret.planCode);
  //   // $(\'#planId\',g).val(ret.planId);
  //   $(\'#plan2proId\',g).val(ret.id);
  //   //填充产品信息
  //   //找到该行对象
  //   //删除空的行
  //   if(onSelPlan) onSelPlan(this,ret);
  //   return;
  // })

  //通用的弹出选择控件的事件定义,
  //里面暴露一个onSelect
  //另有
    $(\'[name="btnPop"]\').click(function(e){
    //debugger;
    var p = $(this).parents(\'.clsPop\');
    //弹出窗地址
    var url = $(this).attr(\'url\');
    var textFld= $(this).attr(\'textFld\');
    var hiddenFld= $(this).attr(\'hiddenFld\');
    var id = $(\'.hideId\',p).attr(\'id\');
    
    onSelect = function(ret) {
	  //选中行后填充textBox和对应的隐藏id
	  $(\'#textBox\',p).val(ret[textFld]);
	  $(\'.hideId\',p).val(ret[hiddenFld]);
	  
	  //执行回调函数,就是触发自定义事件:onSel
	  if(!$("[name=\'"+id+"\']").data("events") || !$("[name=\'"+id+"\']").data("events")[\'onSel\']) {
		  //alert(\'未发现对popup控件 \'+id+ \' 的回调函数进行定义,您可能需要在sonTpl中用bind进行事件绑定:\\n$("[name=\\\'productId[]\\\']").bind(\\\'onSel\\\',function(event,ret){...})\');
		  // debugger;
	      alert(\'未发现对popup控件 \'+id+ \' 的回调函数进行定义,您可能需要在sonTpl中用bind进行事件绑定:\\n\\$(\\\'[name="\'+id+\'"]\\\').bind(\\\'onSel\\\',function(event,ret){...})\');
	      return;
	   }
    
      $(\'.hideId\',p).trigger(\'onSel\',[ret]);
      return;
    }

    window.open(url,\'newwindow\',\'height=500,width=1000,top=200,left=400\');

  });
  //combobox的选中效果
  $(\'.jeffCombobox li\').click(function(){
    var p = $(this).parents(\'.input-group\');
    $(\'input\',p).val($(this).attr(\'v\'));
  });

  /**
  * 添加5行方法，适应于多个table
  */
  function fnAdd(tblId) {
    var rows = $(\'.trRow\',tblId);
    var len = rows.length;

    for(var i=0;i<5;i++) {
      var nt = rows.eq(len-1).clone(true);
      $(\'input,select\',nt).val(\'\');
      $(\'input[type="radio"],input[type="checkbox"]\',nt).attr(\'checked\',false);

       //加载新增后运行的代码
      if(typeof(beforeAdd) == \'function\'){
        beforeAdd(nt,tblId);
      }
      //拼接
      rows.eq(len-1).after(nt);
    }

    return;
  }

});
'; ?>

</script>