<?php
load_class('Model_Cangku_Chuku2Product');
class Model_Cangku_Yuanliao_Chuku2Product extends Model_Cangku_Chuku2Product {
 //    var $tableName = 'cangku_common_chuku2product';
	// var $primaryKey = 'id';
	// //库存model标识符
	// var $modelKucun = 'Model_Cangku_Kucun';
	// //是否出库，如果是出库，数量新增时需要*-1
	// var $isChuku = true;
	// //子表记录中的主表映射名,用来取得主表记录
	// var $mappingName = 'Chuku';
	// //日期字段,必须在主表中
	// var $fldDate = 'chukuDate';
	// //数量,金额字段,必须在子表中,且数量字段可以是多个
	// var $fldCnt = 'cnt';
	// var $fldMoney = 'money';
	// //其他需要复制到库存表中的字段，主要是汇总字段(分主从表,字段名必须一致)，也可能是数量字段（不参与库存计算)
	// var $fldCopyMain = array('kuwei','supplierId','state');
	// var $fldCopySon = array('productId','pihao');

   var $belongsTo = array (
		array(
			'tableClass' => 'Model_Cangku_Yuanliao_Chuku',
			'foreignKey' => 'chukuId',
			'mappingName' => 'Chuku'
		)
	);

}
?>