{*
注意:
proKind为产品弹出选择控件的必须参考的元素,特里特个性化需求,出了订单登记界面外其他使用产品弹出选择控件的模板必须制定proKind为hidden控件
*}<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$title}</title>
</head>

<script language="javascript" src="Resource/Script/Calendar/WdatePicker.js"></script>
<script language="javascript" src="Resource/bootstrap/bootstrap3.0.3/js/jquery.min.js"></script>
<link href="Resource/Css/validate.css" type="text/css" rel="stylesheet">
<script language="javascript" src="Resource/Script/jquery.validate.js"></script>
<!-- Bootstrap -->
<link rel="stylesheet" href="Resource/bootstrap/bootstrap3.0.3/css/bootstrap.css">
<script src="Resource/bootstrap/bootstrap3.0.3/js/bootstrap.js"></script>
<script src="Resource/bootstrap/bootstrap3.0.3/js/tooltip.js"></script>
<script language="javascript">
var _removeUrl='?controller={$smarty.get.controller}&action=RemoveByAjax';
var _rules = {$rules|@json_encode};
{literal}
$.extend({
  getUrlVars: function(){
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
      hash = hashes[i].split('=');
      vars.push(hash[0]);
      vars[hash[0]] = hash[1];
    }
    return vars;
  },
  getUrlVar: function(name){
    return $.getUrlVars()[name];
  }
});


$(function(){

  //临时写在这里，后期需要用sea.js封装
  $('#btnclientName').click(function(){
    var url="?controller=Jichu_Client&action=Popup";
    var ret = window.showModalDialog(url,window);
    if(!ret) ret=window.returnValue;
    if(!ret) return;
    $(this).siblings('#clientId').val(ret.id);
    $(this).siblings('#clientName').val(ret.compName);
    return;
  });

  //产品选择,临时写在这里，后期需要用sea.js封装
  $('[name="btnProduct"]').click(function(){
    var url="?controller=jichu_product&action=popup";
    var ret = window.showModalDialog(url,window);
    if(!ret) ret=window.returnValue;
    if(!ret) return;
    var tr = $(this).parents(".trRow");
    $('[name="proCode"]',tr).val(ret.proCode);
    $('[name="productId[]"]',tr).val(ret.id);
    $('[name="proName[]"]',tr).val(ret.proName);
    $('[name="guige[]"]',tr).val(ret.guige);
    // alert(ret.guige);
    $('[name="proName[]"]',tr).attr("title",ret.proName);
    //alert(ret.color);
    $('[name="color[]"]',tr).val(ret.color);
    if(!ret.unit){
      $('[name="unit[]"]',tr).val('公斤');
    }
    else{
      $('[name="unit[]"]',tr).val(ret.unit);
    }
    $('[name="cnt[]"]',tr).focus();
    return;
  });

  //色坯纱选择
  $('[name="btnYuanliao"]').click(function(){
    // alert(123);
    var controller=$.getUrlVar('controller');
    // alert($.getUrlVar('controller'));
    if(controller=='Shengchan_Chengpin_Ruku'){
      var url="?controller=jichu_product&action=popup&proKind=1";
    }else if(controller=='Shengchan_Yuliao_ruku'){
      var url="?controller=jichu_product&action=popup&proKind=0";
    }else
      var url="?controller=jichu_product&action=popup&proKind=0";
    var ret = window.showModalDialog(url,window);
    // debugger;
    if(!ret) ret=window.returnValue;
    if(!ret) return;
    var tr = $(this).parents(".trRow");
    $('[name="proCode"]',tr).val(ret.proCode);
    $('[name="productId[]"]',tr).val(ret.id);
    $('[name="proName[]"]',tr).val(ret.proName);
    $('[name="guige[]"]',tr).val(ret.guige);
    $('[name="color[]"]',tr).val(ret.color);
    $('[name="pihao[]"]',tr).focus();
    return;
  });

  //订单选择
  $('#btnorderName').click(function(){
      if($('[name="isSePiSha"]').length>0){
      var url="?controller=Trade_Order&action=popup&isSePiSha=1";
      var ret = window.showModalDialog(url,window);
      if(!ret) ret=window.returnValue;
      if(!ret) return;
      //控件显示订单号
      //alert(ret.color);
      $(this).siblings('#orderName').val(ret.orderCode);
       $(this).siblings('#orderId').val(ret.orderId);
      //填充产品信息
      //找到该行对象
      var tr = $("table").find(".trRow").eq(0);
      $('[name="proCode"]',tr).val(ret.proCode);
      $('[name="productId[]"]',tr).val(ret.id);
      $('[name="proName[]"]',tr).val(ret.proName);
      $('[name="guige[]"]',tr).val(ret.guige);
      $('[name="color[]"]',tr).val(ret.color);
      $('[name="cnt[]"]',tr).val(ret.cntYaohuo);
      $('[name="pihao[]"]',tr).focus();
      //删除空的行
      $("[name='productId[]'][value='']",".trRow").parents(".trRow").remove();
      return;

      }

  })

  //删除行,临时写在这里，后期需要用sea.js封装

  $('[id="btnRemove"]').click(function(){
    //利用ajax删除,后期需要利用sea.js进行封装
    var url=_removeUrl;
    var trs = $('.trRow');
    if(trs.length<=1) {
      alert('至少保存一个明细');
      return;
    }

    var tr = $(this).parents('.trRow');
    var id = $('[name="id[]"]',tr).val();
    if(!id) {
      tr.remove();
      return;
    }

    if(!confirm('此删除不可恢复，你确认吗?')) return;
    var param={'id':id};
    $.post(url,param,function(json){
      if(!json.success) {
        alert('出错');
        return;
      }
      tr.remove();
    },'json');
    return;
  });


  //复制行,临时写在这里，后期需要用sea.js封装
  $('#btnAdd').click(function(){
    var rows = $('.trRow');
    var len = rows.length;
    for(var i=0;i<5;i++) {
      var nt = rows.eq(len-1).clone(true);
      $('input,select',nt).val('');
      rows.eq(len-1).after(nt);
    }
    return;
  });

  if($('[name="cntYaohuo[]"]').length>0){
     //数量单价金额的自动计算 cntYaohuo时
      $('[name="cntYaohuo[]"],[name="danjia[]"],[name="money[]"]').change(function(){
        var tr = $(this).parents(".trRow");
        var danjia = parseFloat($('[name="danjia[]"]',tr).val()||0);
        var cntYaohuo = parseFloat($('[name="cntYaohuo[]"]',tr).val()||0);
        $('[name="money[]"]',tr).val((danjia*cntYaohuo).toFixed(2));
        return;
  });
  }else{
     //数量单价金额的自动计算 cnt时
      $('[name="cnt[]"],[name="danjia[]"],[name="money[]"]').change(function(){
        var tr = $(this).parents(".trRow");
        var danjia = parseFloat($('[name="danjia[]"]',tr).val()||0);
        var cnt = parseFloat($('[name="cnt[]"]',tr).val()||0);
        $('[name="money[]"]',tr).val((danjia*cnt).toFixed(2));
        return;
  });
  }


  //表单验证
  //表单验证应该被封装起来。
  var rules = $.extend({},_rules);
  $('#form1').validate({
    rules:rules,
    submitHandler : function(form){
      var r=true;
      if(typeof(beforeSubmit)=="function") {
        r = beforeSubmit();
      }
      if(!r) return;
      $('[name="Submit"]').attr('disabled',true);
      form.submit();
    }
    // ,debug:true
    ,onfocusout:false
    ,onclick:false
    ,onkeyup:false
  });

  //为元素增加特效
  $('#top').tooltip('top');
  {/literal}
  {if $jsPatch}{include file=$jsPatch}{/if}
  {literal}
});
</script>
<style type="text/css">

body{margin-left:5px; margin-top:5px; margin-right: 8px;}
.btns { position:absolute; right:16px; top:1px; height:28px;}
.relative { position:relative;}
.frbtn {position:absolute; top:1px; right:0px; height:28px;z-index:1000;}
.pd5{ padding-left:5px;}
#heji { padding-left:20px; height:20px; line-height:20px; margin-bottom:5px;}
label.error {
  color: #FF0000;
  font-style: normal;
	position:absolute;
	right:-50px;
	top:5px;
}
.lableMain {
  padding-left: 2px !important;
  padding-right: 2px !important;
}
</style>
{/literal}
<body>

<form name="form1" id="form1" class="form-horizontal" action="{url controller=$smarty.get.controller action='save'}" method="post">

<!-- 主表字段登记区域 -->
<div class="panel panel-info">
  <div class="panel-heading"><h3 class="panel-title" style="text-align:left;">{$areaMain.title}</h3></div>
  <div class="panel-body">
    <div class="row">
      {foreach from=$areaMain.fld item=item key=key}
      {include file="Main2Son/"|cat:$item.type|cat:".tpl"}
      {/foreach}
    </div>
  </div>
</div>
<div style="">

  <div class="table-responsive" style="width:{$tbl_son_width|default:"100%"};">
    <table class="table table-condensed table-striped">
      <thead>
        <tr>
          {foreach from=$headSon item=item key=key}
          {if $item.type!='bthidden'}
            {if $item.type=='btBtnRemove'}
              <th>{webcontrol type='btBtnAdd'}</th>
            {else}
            <th style='white-space:nowrap;'>{$item.title}</th>
            {/if}
          {/if}
          {/foreach}
        </tr>
      </thead>
      <tbody>
        {foreach from=$rowsSon item=item1 key=key1}
        <tr class='trRow'>
          {foreach from=$headSon item=item key=key}
            {if $item.type!='bthidden'}
            <td>{webcontrol type=$item.type value=$item1[$key].value itemName=$item.name readonly=$item.readonly disabled=$item.disabled options=$item.options}</td>
            {else}
              {webcontrol type=$item.type value=$item1[$key].value itemName=$item.name readonly=$item.readonly disabled=$item.disabled}
            {/if}
          {/foreach}
        </tr>
        {/foreach}
      </tbody>

    </table>
    </div>
</div>
{if $otherInfoTpl!=''}
{include file=$otherInfoTpl}
{/if}
<div class="panel panel-info">
  <div class="panel-heading"><h3 class="panel-title" style="text-align:left;">{$arr_item1.title}</h3></div>
  <div class="panel-body">
    <div class="row">      
      {foreach from=$arr_item1.fld item=item key=key}
      {include file="Main2Son/"|cat:$item.type|cat:".tpl"}      
      {/foreach}
    </div>       
  </div>
</div>

<div class="panel panel-info">
  <div class="panel-heading"><h3 class="panel-title" style="text-align:left;">{$arr_item2.title}</h3></div>
  <div class="panel-body">
    <div class="row">      
      {foreach from=$arr_item2.fld item=item key=key}
      {include file="Main2Son/"|cat:$item.type|cat:".tpl"}      
      {/foreach}
    </div>       
  </div>
</div>

<div class="panel panel-info">
  <div class="panel-heading"><h3 class="panel-title" style="text-align:left;">{$arr_item3.title}</h3></div>
  <div class="panel-body">
    <div class="row">      
      {foreach from=$arr_item3.fld item=item key=key}
      {include file="Main2Son/"|cat:$item.type|cat:".tpl"}      
      {/foreach}
    </div>       
  </div>
</div>

<div class="form-group">
  <div class="col-sm-offset-4 col-sm-8">
      <input class="btn btn-primary" type="submit" id="Submit" name="Submit" value=" 保 存 ">
    <!-- <input class="btn btn-default" type="submit" id="Submit" name="Submit" value="保存并新增"> -->
      <input class="btn btn-default" type="reset" id="Reset" name="Reset" value=" 重 置 ">
  </div>
</div>
<div style="clear:both;"></div>
</form>
{include file='Main2Son/_jsCommon.tpl'}
{if $sonTpl}{include file=$sonTpl}{/if}
</body>
</html>