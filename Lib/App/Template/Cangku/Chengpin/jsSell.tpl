{literal}
<script language="javascript">
$(function(){
	
	//因为需要使用ret作为回调函数的参数，所以需要使用bind,
	//选择订单后，明细栏中显示订单明细情况,显示客户情况
	$('[name="orderId"]').bind('onSel',function(event,ret){
		//先删除id='' && 数量=''的行，
		var trs = $('.trRow');
		var len = trs.length; 
		var tpl = trs.eq(0).clone(true);
		var pNode = trs.parent();
		// debugger;
		for(var i=0;trs[i];i++) {
			if($('[name="id[]"]',trs[i]).val()!='') continue;
			if($('[name="cnt[]"]',trs[i]).val()!='') continue;
			trs.eq(i).remove();
		}

		//插入订单明细的情况
		var url='?controller=trade_order&action=GetMinxiByOrderId';
		var param={'orderId':this.value};
		// debugger;
		$.post(url,param,function(ret){
			// debugger;
			if(!ret.success) {
				alert('服务器端错误');
				return;
			}
			// debugger;
			$('#clientName').val(ret.order.Client.compName);
			$('#clientId').val(ret.order.clientId);
			$('#traderName').val(ret.order.Trader.employName);

			var json = ret.order.Products;
			if(!json) {
				alert('未发现数据集');
				return;
			}
			for(var i=0;json[i];i++) {
				var nt = tpl.clone(true); 
				$('input,select',nt).val(''); 

				//为控件赋值
				$('[name="proCode[]"]',nt).val(json[i].proCode);
				$('[name="proName[]"]',nt).val(json[i].proName);
				$('[name="guige[]"]',nt).val(json[i].guige);
				$('[name="color[]"]',nt).val(json[i].color);
				$('[name="productId[]"]',nt).val(json[i].productId);
				$('[name="ord2proId[]"]',nt).val(json[i].ord2proId);
				$('[name="unit[]"]',nt).val(json[i].unit);
				// $('proCode',nt).val(json[i].proCode);
				// $('proCode',nt).val(json[i].proCode);
				pNode.append(nt);
			}
			tpl = null;
			return;
		},'json');
	});
});
</script>
{/literal}