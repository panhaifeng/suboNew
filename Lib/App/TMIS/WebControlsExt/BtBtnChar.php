<?php
/*
*2014-3-26 by jeff : select需要被bootstrap控件使用，所以这里改动为select1
*/
function _ctlBtBtnChar($name,$params){	
	$itemName 	= $params['itemName'];
    $value = $params['value']?$params['value']:'';    
    $title = $params['title']?$params['title']:'工艺';    
	$html = "<a name='btBtnChar' id='btBtnChar' class='btn btn-sm btn-primary' href='javascript:;'>{$title}</a>";
	$html .="<input type='hidden' name='{$itemName}' value='{$value}' class='hideChar'>";
	return $html;
}
?>