<?php /* Smarty version 2.6.10, created on 2018-12-10 13:51:57
         compiled from Main2Son/T1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'Main2Son/T1.tpl', 42, false),array('function', 'webcontrol', 'Main2Son/T1.tpl', 67, false),array('modifier', 'default', 'Main2Son/T1.tpl', 42, false),array('modifier', 'cat', 'Main2Son/T1.tpl', 49, false),)), $this); ?>
<?php $this->_cache_serials['Lib/App/../../_Cache/Smarty\%%96^96E^96EAE6A5%%T1.tpl.inc'] = '9a2a9e6d063e7b00d83eef3dfd58e5cf'; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
</head>
<link href="Resource/Css/validate.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="Resource/bootstrap/bootstrap3.0.3/css/bootstrap.css">

<?php echo '
<style type="text/css">

body{padding-left:5px; padding-top:5px; padding-right: 5px;}
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

.trRow select {width:auto;}
.trRow input {min-width: 80px;}
</style>
'; ?>


<body>
<!--图片上传功能，表单添加新属性enctype="multipart/form-data"，2015-09-11,by liuxin -->
<form name="form1" id="form1" class="form-horizontal" enctype="multipart/form-data" action="<?php if ($this->caching && !$this->_cache_including) { echo '{nocache:9a2a9e6d063e7b00d83eef3dfd58e5cf#0}';}echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('controller' => $_GET['controller'],'action' => ((is_array($_tmp=@$this->_tpl_vars['action_save'])) ? $this->_run_mod_handler('default', true, $_tmp, 'save') : smarty_modifier_default($_tmp, 'save'))), $this);if ($this->caching && !$this->_cache_including) { echo '{/nocache:9a2a9e6d063e7b00d83eef3dfd58e5cf#0}';}?>
" method="post">
<!-- 主表字段登记区域 -->
<div class="panel panel-info">
  <div class="panel-heading"><h3 class="panel-title" style="text-align:left;"><?php echo $this->_tpl_vars['areaMain']['title']; ?>
</h3></div>
  <div class="panel-body">
    <div class="row">
    <?php $_from = $this->_tpl_vars['areaMain']['fld']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
      <?php $this->assign('f', ((is_array($_tmp=((is_array($_tmp="Lib/App/Template/Main2Son/")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['item']['type']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['item']['type'])))) ? $this->_run_mod_handler('cat', true, $_tmp, ".tpl") : smarty_modifier_cat($_tmp, ".tpl"))); ?>
      <?php if (file_exists ( $this->_tpl_vars['f'] )): ?>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp="Main2Son/")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['item']['type']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['item']['type'])))) ? $this->_run_mod_handler('cat', true, $_tmp, ".tpl") : smarty_modifier_cat($_tmp, ".tpl")), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <?php else: ?>
      <?php echo $this->_tpl_vars['key']; ?>
:<?php echo $this->_tpl_vars['item']['type']; ?>
对应的模板文件<?php echo $this->_tpl_vars['f']; ?>
不存在
      <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
    </div>
  </div>
</div>
<div style="overflow:auto; border:1px solid #bce8f1; margin-bottom:10px; max-height:280px;">
  <div class="table-responsive" style="width:<?php echo ((is_array($_tmp=@$this->_tpl_vars['tbl_son_width'])) ? $this->_run_mod_handler('default', true, $_tmp, "100%") : smarty_modifier_default($_tmp, "100%")); ?>
;">
    <table class="table table-condensed table-striped trRowMore" id='table_main'  name='table_main' removeUrl='?controller=<?php echo $_GET['controller']; ?>
&action=<?php echo ((is_array($_tmp=@$this->_tpl_vars['RemoveByAjax'])) ? $this->_run_mod_handler('default', true, $_tmp, 'RemoveByAjax') : smarty_modifier_default($_tmp, 'RemoveByAjax')); ?>
' key='id[]'>
      <thead>
        <tr>
        <?php $_from = $this->_tpl_vars['headSon']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
          <?php if ($this->_tpl_vars['item']['type'] != 'bthidden'): ?>
            <?php if ($this->_tpl_vars['item']['type'] == 'btBtnRemove'): ?>
              <th><?php if ($this->caching && !$this->_cache_including) { echo '{nocache:9a2a9e6d063e7b00d83eef3dfd58e5cf#1}';}echo $this->_plugins['function']['webcontrol'][0][0]->_pi_func_webcontrol(array('type' => 'btBtnAdd'), $this);if ($this->caching && !$this->_cache_including) { echo '{/nocache:9a2a9e6d063e7b00d83eef3dfd58e5cf#1}';}?>
</th>
            <?php else: ?>
            <th style='white-space:nowrap;'><?php echo $this->_tpl_vars['item']['title']; ?>
 <?php if ($this->_tpl_vars['item']['class']): ?><span class='<?php echo $this->_tpl_vars['item']['class']; ?>
' style="color: red;"></span><?php endif; ?></th>

            <?php endif; ?>
          <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
        </tr>
      </thead>
      <tbody>
        <?php $_from = $this->_tpl_vars['rowsSon']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key1'] => $this->_tpl_vars['item1']):
?>
        <tr class='trRow'>
        <?php $_from = $this->_tpl_vars['headSon']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
          <?php if ($this->_tpl_vars['item']['type'] != 'bthidden'): ?>
            <td><?php if ($this->caching && !$this->_cache_including) { echo '{nocache:9a2a9e6d063e7b00d83eef3dfd58e5cf#2}';}echo $this->_plugins['function']['webcontrol'][0][0]->_pi_func_webcontrol(array('type' => $this->_tpl_vars['item']['type'],'itemName' => $this->_tpl_vars['item']['name'],'readonly' => $this->_tpl_vars['item']['readonly'],'disabled' => $this->_tpl_vars['item']['disabled'],'model' => $this->_tpl_vars['item']['model'],'options' => $this->_tpl_vars['item']['options'],'condition' => $this->_tpl_vars['item']['condition'],'optionType' => $this->_tpl_vars['item']['optionType'],'url' => $this->_tpl_vars['item']['url'],'textFld' => $this->_tpl_vars['item']['textFld'],'hiddenFld' => $this->_tpl_vars['item']['hiddenFld'],'text' => $this->_tpl_vars['item1'][$this->_tpl_vars['key']]['text'],'inTable' => ((is_array($_tmp=@$this->_tpl_vars['item']['inTable'])) ? $this->_run_mod_handler('default', true, $_tmp, true) : smarty_modifier_default($_tmp, true)),'value' => ((is_array($_tmp=@$this->_tpl_vars['item1'][$this->_tpl_vars['key']]['value'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['item']['defaultValue']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['item']['defaultValue'])),'kind' => $this->_tpl_vars['item']['kind'],'checked' => $this->_tpl_vars['item1'][$this->_tpl_vars['key']]['checked']), $this);if ($this->caching && !$this->_cache_including) { echo '{/nocache:9a2a9e6d063e7b00d83eef3dfd58e5cf#2}';}?>
</td>
            <?php else: ?>
              <?php if ($this->caching && !$this->_cache_including) { echo '{nocache:9a2a9e6d063e7b00d83eef3dfd58e5cf#3}';}echo $this->_plugins['function']['webcontrol'][0][0]->_pi_func_webcontrol(array('type' => $this->_tpl_vars['item']['type'],'value' => ((is_array($_tmp=@$this->_tpl_vars['item1'][$this->_tpl_vars['key']]['value'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['item']['defaultValue']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['item']['defaultValue'])),'itemName' => $this->_tpl_vars['item']['name'],'readonly' => $this->_tpl_vars['item']['readonly'],'disabled' => $this->_tpl_vars['item']['disabled']), $this);if ($this->caching && !$this->_cache_including) { echo '{/nocache:9a2a9e6d063e7b00d83eef3dfd58e5cf#3}';}?>

          <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
      </tbody>

    </table>
  </div>
</div>

<?php if ($this->_tpl_vars['otherInfoTpl'] != ''): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['otherInfoTpl'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<div class="form-group">
  <div class="col-sm-offset-4 col-sm-8">
      <input class="btn btn-primary" type="submit" id="Submit" name="Submit" value=" 保 存 " onclick="$('#submitValue').val('保存')">
            <?php echo $this->_tpl_vars['other_button']; ?>

      <input class="btn btn-default" type="reset" id="Reset" name="Reset" value=" 重 置 ">
      <input type='hidden' name='submitValue' id='submitValue' value=''/>
      <input type='hidden' name='fromController' id='fromController' value='<?php echo ((is_array($_tmp=@$this->_tpl_vars['fromController'])) ? $this->_run_mod_handler('default', true, $_tmp, @$_GET['controller']) : smarty_modifier_default($_tmp, @$_GET['controller'])); ?>
'/>
      <input type='hidden' name='fromAction' id='fromAction' value='<?php echo ((is_array($_tmp=@$_GET['fromAction'])) ? $this->_run_mod_handler('default', true, $_tmp, @$_GET['action']) : smarty_modifier_default($_tmp, @$_GET['action'])); ?>
'/>
  </div>
</div>
<div style="clear:both;"></div>

</form>
<div id="divModel" class="s-isindex-wrap s-model-set-menu menu-top" style="display:none;">
  <div><input type="text" class="supplierText" id="supplierText"/></div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Main2Son/_jsCommon.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if ($this->_tpl_vars['sonTpl']):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['sonTpl'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>
<?php if ($this->_tpl_vars['sonTpl2']):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['sonTpl2'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>

<script language="javascript">
<?php echo '
$(function(){
  //供应商自动完成
  if($.autocomplete){
    $(\'#supplierText\').autocomplete(\'?controller=jichu_Supplier&action=GetJsonByKey\', {
      minChars:1,
      remoteDataType:\'json\',
      useCache:false,
      sortResults:false,
      onItemSelect:function(v){
        $(\'#supplierId\').val(v.data[0].id);
            $(\'#divModel\').hide();
            $(\'#btnMore\').removeClass(\'active\');
      }
    });
  }

  //切换divModel的可见
  $(\'#btnMore\').click(function(){
        $(\'#supplierText\').val(\'\');
    if($(\'#divModel\').is(\':hidden\')){
      var showTarget = $(this), target= $(\'#supplierId\');
      var showL = target.offset().left
         ,showT = target.offset().top
         ,showW = target.width()
         ,showH = target.height();
        $(\'#supplierText\').css("left", showL).css("top", showT).css("width",showW).css("height", showH+1);
      $(\'#divModel\').css({\'left\':showL,\'top\':showT, \'width\':(showW+2), \'height\':(showH+2)}).show();
        $(this).addClass(\'active\');
      $(\'#supplierText\').focus();
    } else {
      $(\'#divModel\').hide();
      $(this).removeClass(\'active\');
    }
  });
});
</script>
'; ?>

</body>
</html>