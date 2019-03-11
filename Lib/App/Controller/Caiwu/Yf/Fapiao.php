<?php
FLEA::loadClass('TMIS_Controller');
////////////////////////////////////////控制器名称
class Controller_Caiwu_Yf_Fapiao extends Tmis_Controller {
	var $_modelExample;
	var $_tplEdit='Caiwu/Yf/fapiaoEdit.tpl';
	function __construct() {
		$this->_modelExample = & FLEA::getSingleton('Model_Caiwu_Yf_Fapiao');

		 //搭建过账界面
        $this->fldMain = array(
        	'creater' => array('type' => 'text', 'value' => $_SESSION['REALNAME'],'title'=>'制单人','readonly'=>true),
        	'fapiaoCode' => array('type' => 'text', 'value' => '','title'=>'发票号'),
			'fapiaoDate' => array('title' => '发票日期', "type" => "calendar", 'value' => date('Y-m-d')),
			'supplierId' => array('title' => '供应商', 'type' => 'select', 'value' => '','model'=>'Model_Jichu_Supplier'),
			'money' => array('title' => '发票金额', 'type' => 'text', 'value' => '','addonEnd'=>'元'),
			'memo' => array('title' => '备注', 'type' => 'textarea', 'value' => ''),
			'id' => array('type' => 'hidden', 'value' => ''),
		);

		// 表单元素的验证规则定义
		$this->rules = array(
			'fapiaoCode' => 'required repeat',
			'fapiaoDate' => 'required',
			'supplierId' => 'required',
			'money' => 'required number'
		);
	}

	function actionRight() {
		// $this->authCheck('4-1-4');
		FLEA::loadclass('TMIS_Pager');
		$arr=TMIS_Pager::getParamArray(array(
			'dateFrom'=>date('Y-m-d',mktime(0,0,0,date('m'),date('d')-30,date('Y'))),
			'dateTo'=>date('Y-m-d'),
			'supplierId'=>'',
			'key'=>'',
			'no_edit'=>'',
		));
		$sql="select x.*,a.compName from caiwu_yf_fapiao x
			left join jichu_supplier a on a.id=x.supplierId
			where 1";
		if($arr['supplierId']!='')$sql.=" and x.supplierId='{$arr['supplierId']}'";
		if($arr['dateFrom']!=''){
			$sql.=" and x.fapiaoDate >= '{$arr['dateFrom']}'";
		}
		if($arr['dateTo']!=''){
			$sql.=" and x.fapiaoDate <='{$arr['dateTo']}'";
		}
		
		if($arr['key']!=''){
			$sql.=" and x.fapiaoCode like '%{$arr['key']}%'";
		}
		$sql.=" order by x.id desc";
		$page=& new TMIS_Pager($sql);
		$rowset=$page->findAll();
		//dump($rowset);exit;
		if(count($rowset)>0)foreach($rowset as & $v) {
				$v['_edit'].=$this->getEditHtml($v['id']).'&nbsp;&nbsp;'.$this->getRemoveHtml($v['id']);
		}

		$rowset[] = $this->getHeji($rowset, array('money'), $_GET['no_edit']==1?'fapiaoCode':'_edit');
		
		$arr_field_info=array(
			'_edit'=>'操作',
			'fapiaoCode'=>array('text'=>'发票编码','width'=>100),
			'fapiaoDate'=>'收票日期',
			'compName'=>'加工供应商',
			'money'=>'金额',
			'memo'=>'备注',
		);
		$smarty=& $this->_getView();
		$smarty->assign('arr_condition',$arr);
		$smarty->assign('add_display','none');
		$smarty->assign('arr_field_info',$arr_field_info);
		$smarty->assign('arr_field_value',$rowset);
		$smarty->assign('page_info',$page->getNavBar($this->_url($_GET['action'],$arr)).$note);
		$smarty->display('TblList.tpl');
	}
	


	function actionSave() {
		$arr=array(
			'id'=>$_POST['id'],
			'supplierId'=>$_POST['supplierId'],
			'fapiaoCode'=>$_POST['fapiaoCode'],
			'fapiaoDate'=>$_POST['fapiaoDate'],
			'money'=>$_POST['money'],
			'memo'=>$_POST['memo'],
			'creater'=>$_POST['creater'],
			// 'bizhong'=>$_POST['bizhong'],
			// 'huilv'=>empty($_POST['huilv'])?1:$_POST['huilv'],
		);
		// dump($arr);exit;
		$id=$this->_modelExample->save($arr);
		js_alert(null,'window.parent.showMsg("操作成功");',$this->_url($_POST['fromAction']==''?'add':$_POST['fromAction']));

	}

	//发票号码是否重复
	function actionGetFapiaoCodeByAjax() {
		if(!$_GET['fapiaoCode'])exit;
		$re=$this->_modelExample->find(array('fapiaoCode'=>$_GET['fapiaoCode']));

		if($re['id']>0) {
			echo json_encode(array('success'=>false,'msg'=>'发票号码重复!'));exit;
		}
		echo json_encode(array('success'=>true));exit;
	}

	function actionAdd() {
		$smarty = &$this->_getView();
		$smarty->assign('fldMain', $this->fldMain);
		$smarty->assign('rules', $this->rules);
		$smarty->assign('title', '发票信息编辑');
		// $smarty->assign('sonTpl', 'caiwu/yf/sonTpl.tpl');
		$smarty->display('Main/A1.tpl');
	}

	function actionEdit() {
		$row = $this->_modelExample->find(array('id' => $_GET['id']));
		
		$this->fldMain = $this->getValueFromRow($this->fldMain, $row); 

		// dump($row);exit;
		$smarty = &$this->_getView();
		$smarty->assign('fldMain', $this->fldMain);
		$smarty->assign('rules', $this->rules);
		$smarty->assign('title', '发票信息编辑');
		$smarty->assign('aRow', $row);
		// $smarty->assign('sonTpl', 'caiwu/yf/sonTpl.tpl');
		$smarty->display('Main/A1.tpl');
	}
	
}
?>