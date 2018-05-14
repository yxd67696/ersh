<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="/ersh/Public/oa/css/amazeui.min.css">
		<link rel="stylesheet" href="/ersh/Public/oa/css/admin.css">
		<link rel="stylesheet" href="/ersh/Public/oa/css/app.css">
		<link rel="stylesheet" href="/ersh/Public/bootstrap/bootstrap.min.css">
		<script type="text/javascript" src="/ersh/Public/oa/js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="/ersh/Public/bootstrap/bootstrap.min.js"></script>
	</head>

	<body>
		
		<div class="am-cf admin-main">
			<!-- content start -->
			<div class="admin-content">
				<div class="admin-content-body">
					<!-- 模态框（Modal） -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog" style="margin-top:100px;">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;
									</button>
									<h4 class="modal-title" id="myModalLabel">
										添加一级分类
									</h4>
								</div>
								<div class="modal-body">
									<div class="input-group">
										<span class="input-group-addon">商品类名：</span>
										<input type="text" name="name" id="addorder1" class="form-control" placeholder="输入商品类名">
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" id="btn-addorder1" class="btn btn-primary">
										提交
									</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">关闭
									</button>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal -->
					</div>
					<!-- 模态框2（Modal） -->
					<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog" style="margin-top:100px;">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;
									</button>
									<h4 class="modal-title" id="myModalLabel">
										添加二级分类
									</h4>
								</div>
								<div class="modal-body">
									<div class="input-group">
										<span class="input-group-addon">商品一：</span>
										<input type="text" name="nama" id="nama" class="form-control" placeholder="输入商品类名">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">商品二：</span>
										<input type="text" name="namb" id="namb" class="form-control" placeholder="输入商品类名">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">商品三：</span>
										<input type="text" name="namc" id="namc" class="form-control" placeholder="输入商品类名">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">商品类：</span>
										<select class="form-control" name="id" id="select-val">
											<option value="">请选择商品所属分类</option>
										<?php if(is_array($lie1)): $i = 0; $__LIST__ = $lie1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
										</select>
									</div>	
								</div>
								<div class="modal-footer">
									<button type="button" id="btn-addorder2" class="btn btn-primary">
										提交
									</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">关闭
									</button>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal -->
					</div>
					<!-- 模态框3（Modal）编辑一级分类 -->
					<div class="modal fade" id="Save1-Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog" style="margin-top:100px;">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;
									</button>
									<h4 class="modal-title" id="myModalLabel">
										编辑一级分类
									</h4>
								</div>
								<div class="modal-body">
									<div class="input-group">
										<span class="input-group-addon">商品类名：</span>
										<input type="text" name="name" id="saveorder1" class="form-control" >
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" id="btn-saveorder1" class="btn btn-primary">
										提交
									</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">关闭
									</button>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal -->
					</div>
					<!-- 模态框4（Modal）编辑二级分类 -->
					<div class="modal fade" id="Save2-Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog" style="margin-top:100px;">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;
									</button>
									<h4 class="modal-title" id="myModalLabel">
										编辑二级分类
									</h4>
								</div>
								<div class="modal-body">
									<div class="input-group">
										<span class="input-group-addon">商品一：</span>
										<input type="text" name="nama" id="snama" class="form-control" placeholder="输入商品类名">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">商品二：</span>
										<input type="text" name="namb" id="snamb" class="form-control" placeholder="输入商品类名">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">商品三：</span>
										<input type="text" name="namc" id="snamc" class="form-control" placeholder="输入商品类名">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">商品类：</span>
										<select class="form-control" name="name" id="save2-select">
											<option value="">请选择商品所属分类</option>
										<?php if(is_array($lie1)): $i = 0; $__LIST__ = $lie1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>" lid="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
										</select>
									</div>	
								</div>
								<div class="modal-footer">
									<button type="button" id="btn-saveorder2" class="btn btn-primary">
										提交
									</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">关闭
									</button>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal -->
					</div>
					<div class="am-cf am-padding am-padding-bottom-0">
						<div class="am-fl am-cf">
							<strong class="am-text-primary am-text-lg"> </strong><small>
								<i class="icon-home"></i> &gt; 首页 &gt; 员工管理</small>
						</div>
					</div>
					<hr>
					<div class="container">
						<div class="am-g">
							<div class="am-u-sm-12 am-u-md-6">
								<div class="am-btn-toolbar">
									<div id="delall" class="am-btn-group am-btn-group-xs">.
										<button type="button" id="btn-lie1" class="am-btn am-btn-default btnAdd1">
											<span class="icon-plus"></span>显示一级分类
										</button>
										<button type="button" id="btn-lie2" style="display:none;" class="am-btn am-btn-default btnAdd1">
											<span class="icon-plus"></span>显示二级分类
										</button>
										<button type="button" class="am-btn am-btn-default btnAdd1" data-toggle="modal" data-target="#myModal">
											<span class="icon-plus"></span> 新增一级分类
										</button>
										<button type="button" class="am-btn am-btn-default btnAdd2" data-toggle="modal" data-target="#myModal2">
											<span class="icon-plus"></span> 新增二级分类
										</button>
										<button type="button" class="btnremove2 am-btn am-btn-default" >
											<span class="icon-trash"></span> 批量删除
										</button>
										<button type="button" class="btnremove1 am-btn am-btn-default" style="display:none;">
											<span class="icon-trash"></span> 批量删除
										</button>
									</div>
								</div>
							</div>

							<div class="am-u-sm-12 am-u-md-3">
								<div class="am-input-group am-input-group-sm">
									<input class="am-form-field" placeholder="请输入员工姓名" id="username" type="text">
									<span class="am-input-group-btn">
										<button class="am-btn am-btn-default" type="button" id="btnsearch">
											搜索
										</button> </span>
								</div>
							</div>
						</div>
						<div class="am-g" style="margin-top: -30px;">
							<div class="am-u-sm-12" id="lie2">
								<form class="am-form" action="user/delAll.action">
									<table class="am-table am-table-striped am-table-hover table-main">
										<thead>
											<tr>
												<th class="table-check">
													<input id="chkAll2" type="checkbox">
												</th>
												<th class="table-id">
													ID
												</th>
												<th>
													所属商品类
												</th>
												<th class="table-title">
													商品名
												</th>
												
												<th class="table-set">
													操作
												</th>
											</tr>
										</thead>
										<tbody id="tUser2">
											<?php if(is_array($lie2)): $i = 0; $__LIST__ = $lie2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr class="tr-lie2">
												<td><input name="id[]" value="<?php echo ($v["id"]); ?>" type="checkbox"></td>
												<td class="id"><?php echo ($v["id"]); ?></td>
												<td class="name name<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></td>
												<td class="names names<?php echo ($v["id"]); ?>"><?php echo ($v["nama"]); ?>/<?php echo ($v["namb"]); ?>/<?php echo ($v["namc"]); ?></td>
												<td>
													<div class="am-btn-toolbar">
														<div class="am-btn-group am-btn-group-xs"><button type="button" class="save2 am-btn am-btn-default am-btn-xs am-text-secondary btnEdit" data-toggle="modal" data-target="#Save2-Modal" lid="<?php echo ($v["lid"]); ?>"><span class="am-icon-pencil-square-o"></span> 编辑</button><button type="button" class="dellie2 am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"  id="<?php echo ($v["id"]); ?>"><span class="am-icon-trash-o"></span> 删除</button></div>
													</div>
												</td>
											</tr><?php endforeach; endif; else: echo "" ;endif; ?>
										</tbody>
									</table>

								</form>
							</div>
							<div class="am-u-sm-12" id="lie1" style="display:none;">
								<form class="am-form" action="user/delAll.action">
									<table class="am-table am-table-striped am-table-hover table-main">
										<thead>
											<tr>
												<th class="table-check">
													<input id="chkAll1" type="checkbox">
												</th>
												<th class="table-id">
													ID
												</th>
												<th>
													商品类名
												</th>
												<th class="table-set">
													操作
												</th>
											</tr>
										</thead>
										<tbody id="tUser1">
											<?php if(is_array($lie1)): $i = 0; $__LIST__ = $lie1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr class="tr-lie1">
												<td><input name="lid[]" value="<?php echo ($v["id"]); ?>" type="checkbox"></td>
												<td><?php echo ($v["id"]); ?></td>
												<td class="<?php echo ($v["name"]); ?> name"><?php echo ($v["name"]); ?></td>
												<td>
													<div class="am-btn-toolbar">
														<div class="am-btn-group am-btn-group-xs"><button type="button" class="save1 am-btn am-btn-default am-btn-xs am-text-secondary btnEdit" data-toggle="modal" data-target="#Save1-Modal" id="<?php echo ($v["id"]); ?>" name="<?php echo ($v["name"]); ?>"><span class="am-icon-pencil-square-o"></span> 编辑</button><button type="button" class="dellie1 am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"  id="<?php echo ($v["id"]); ?>"><span class="am-icon-trash-o"></span> 删除</button></div>
													</div>
												</td>
											</tr><?php endforeach; endif; else: echo "" ;endif; ?>
										</tbody>
									</table>

								</form>
							</div>
						</div>
					</div>

				</div>
				<!-- content end -->
			</div>
		</div>

		<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

		<!--[if (gte IE 9)|!(IE)]><!-->
		<script src="/ersh/Public/oa/js/jquery-1.11.3.min.js"></script>
		<!--<![endif]-->
		<script type="text/javascript" src="/ersh/Public/oa/myplugs/js/plugs.js"></script>
<script>
$(function() {
	//ajax添加一级分类
 	$('#btn-addorder1').click(function(){
		alert('添加成功');
		var name = $('#addorder1').val();
		$.ajax({
			url:'<?php echo U("Index/AjaxAddOrder1");?>',
			data:{name:name},
			type:'post',
			dataType:'json',
			success:function(obj){
				// console.log(obj);
				var data = obj;
				$('#select-val').append("<option value='"+data['lid']+"'>"+data['name']+"</option>");
				$('#tUser1').append("<tr class='tr-lie1'><td><input name='id' value='1' type='checkbox'></td><td>"+data['lid']+"</td><td>"+data['name']+"</td><td><div class='am-btn-toolbar'><div class='am-btn-group am-btn-group-xs'><button type='button' class='am-btn am-btn-default am-btn-xs am-text-secondary btnEdit'><span class='am-icon-pencil-square-o'></span> 编辑</button><button type='button' class='dellie1 am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only' id='"+data['lid']+"'><span class='am-icon-trash-o'></span> 删除</button></div></div></td></tr>");
			}
		})
	});
 	//ajax添加二级分类
	$('#btn-addorder2').click(function(){
	alert('添加成功');
	var nama = $('#nama').val();
	var namb = $('#namb').val();
	var namc = $('#namc').val();
	var id = $('#select-val').val();
	$.ajax({
		url:'<?php echo U("Index/AjaxAddOrder2");?>',
		data:{
			nama:nama,
			namb:namb,
			namc:namc,
			lid:id
		},
		type:'post',
		dataType:'json',
		success:function(obj){
			// console.log(obj);
			var data = obj;
			$('#tUser2').append("<tr class='tr-lie2'><td><input name='id' value='1' type='checkbox'></td><td>"+data['id']+"</td><td>"+data['name']+"</td><td>"+data['nama']+"/"+data['namb']+"/"+data['namc']+"</td><td><div class='am-btn-toolbar'><div class='am-btn-group am-btn-group-xs'><button type='button' class='am-btn am-btn-default am-btn-xs am-text-secondary btnEdit'><span class='am-icon-pencil-square-o'></span> 编辑</button><button type='button' class='dellie2 am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only' id='"+data['id']+"'><span class='am-icon-trash-o'></span> 删除</button></div></div></td></tr>");
		}
	})
	});
	//切换一级、二级分类
	$('#btn-lie1').click(function(){
		$('#lie2,#btn-lie1').hide();
		$('#lie1,#btn-lie2').show();
		$('.btnremove1').toggle();
		$('.btnremove2').toggle();
	});
	$('#btn-lie2').click(function(){
		$('#lie1,#btn-lie2').hide();
		$('#lie2,#btn-lie1').show();
		$('.btnremove1').toggle();
		$('.btnremove2').toggle();
	});

	//ajax删除一级分类
	$('#tUser1').on("click",'.dellie1',function(){
		if(!confirm("确定要删除？")){
			window.event.returnValue = false; 
		}else{
			$(this).parents('.tr-lie1').remove();
			var id = $(this).attr('id');
			$.ajax({
				url:'<?php echo U("Index/AjaxDellie1");?>',
				data:{id:id},
				type:'post',
				dataType:'json',
				success:function(obj){
					// console.log(obj);
				}
			})
		}
	});

	//ajax删除二级分类
	$('#tUser2').on("click",'.dellie2',function(){
		if(!confirm("确定要删除？")){
			window.event.returnValue = false; 
		}else{
			$(this).parents('.tr-lie2').remove();
			var id = $(this).attr('id');
			$.ajax({
				url:'<?php echo U("Index/AjaxDellie2");?>',
				data:{id:id},
				type:'post',
				dataType:'json',
				success:function(obj){
					// console.log(obj);
				}
			})
		}
	});

	//ajax批量删除 全选+反选 1/2级类
	var lid=document.getElementsByName('lid[]');
	$('#chkAll1').click(function(){
		for(i = 0; i < lid.length;i++){
			for(i = 0; i < lid.length;i++){
				lid[i].checked==true?lid[i].checked=false:lid[i].checked=true;
			}
		}
	});	
	var id=document.getElementsByName('id[]');
	$('#chkAll2').click(function(){
		for(i = 0; i < id.length;i++){
			for(i = 0; i < id.length;i++){
				id[i].checked==true?id[i].checked=false:id[i].checked=true;
			}
		}
	});	
 	//AJAX批量删除 一级分类 
        $(".btnremove1").click(function(){  
        	//一级分类 
            var lid = []; 
            $("input[name='lid[]']:checked").each(function () {  
            	//将选中项的id放入lid数组中
                lid.push($(this).val());  
            });  
             // alert(lid)
//            alert(lid);return false;  
            var url = "<?php echo U('Index/AjaxDelAll1');?>";  
            var data = {id:lid}; 
           	if(lid!=''){
           		if(!confirm("确定要删除？")){
				    window.event.returnValue = false; 
				}else{
					$.post(url,data,function(data){
						// console.log(data);
						if(data==1){
							$("input[name='lid[]']:checked").each(function(){  
			                	$(this).parents('tr').remove();  
			            	}); 
						}else{
	                    	alert("删除失败！");  
						} 
					});
	            }
           	}
        }) 
 	//AJAX批量删除 二级分类 
        $(".btnremove2").click(function(){  
        	//一级分类 
            var id = []; 
            $("input[name='id[]']:checked").each(function () {  
            	//将选中项的id放入id数组中
                id.push($(this).val());  
            });  
             // alert(id)
//            alert(id);return false;  
            var url = "<?php echo U('Index/AjaxDelAll2');?>";  
            var data = {id:id}; 
           	if(id!=''){
           		if(!confirm("确定要删除？")){
				    window.event.returnValue = false; 
				}else{
					$.post(url,data,function(data){
						console.log(data);
						if(data==1){
							$("input[name='id[]']:checked").each(function(){  
			                	$(this).parents('tr').remove();  
			            	}); 
						}else{
	                    	alert("删除失败！");  
						} 
					});
	            }
           	}

        })   
    //ajax编辑一级分类
    $('.save1').click(function(){
    	var id = $(this).attr('id');
    	var name = $(this).parents('td').prev('.name').html();
    	// alert(name);
    	$('#saveorder1').val(name);
    	$('#saveorder1').attr('lid',id);
    	$('#saveorder1').attr('names',name);
    	
    })
    $('#btn-saveorder1').click(function(){
    	var id = $('#saveorder1').attr('lid');
    	var name = $('#saveorder1').val();
    	var names = $('#saveorder1').attr('names');
    	// alert(names);
    	$.ajax({
    		url:"<?php echo U('Index/AjaxDosave1');?>",
    		data:{name:name,id:id},
    		type:'post',
    		dataType:'json',
    		success:function(obj){
    			alert('修改成功');
    			var data = obj;
    			console.log(data);
    			var name1 = document.getElementsByClassName(names);
    			name1[0].innerHTML=data['name'];
    			name1[0].className = data['name']+' name';
    		}
    	})
    })
    //ajax编辑二级分类
     $('.save2').click(function(){
     	var lid = $(this).attr('lid');
    	var id = $(this).parents('td').prevAll('.id').html();
    	var name = $(this).parents('td').prevAll('.name').html();
    	var names = $(this).parents('td').prevAll('.names').html();
    	// alert(id);
    	var options = document.getElementById('save2-select').children;
    	options[lid].selected=true;
    	var namesarr = names.split('/');
    	// alert(namesarr);
    	$('#snama').val(namesarr[0]);
    	$('#snamb').val(namesarr[1]);
    	$('#snamc').val(namesarr[2]);
    	$('#snama').attr('oid',id);
    	// $('#snama').attr('lid',lid);
    	$('#snama').attr('snama',namesarr[0]);
    	$('#snamb').attr('snamb',namesarr[1]);
    	$('#snamc').attr('snamc',namesarr[2]);
    	$('#save2-select').attr('names',name);
    	
    })
    $('#btn-saveorder2').click(function(){
		// var lid = $('#snama').attr('lid');
		var lid =$('#save2-select').val();
		var id = $('#snama').attr('oid');
		// alert(id);
		var nama = $('#snama').val();
		var namb = $('#snamb').val();
		var namc = $('#snamc').val();
		var name = $('#save2-select').attr('names');
		// alert(nama);
		$.ajax({
			url:"<?php echo U('Index/AjaxDosave2');?>",
			data:{name:name,id:id,lid:lid,nama:nama,namb:namb,namc:namc},
			type:'post',
			dataType:'json',
			success:function(obj){
				alert('修改成功');
				var data = obj;
				console.log(data);
				var nameid = 'name'+id;
				var namesid = 'names'+id;
				// var name1 = document.getElementsByClassName(nameid);
				var name1 = document.getElementsByClassName(nameid);
				var name2 = document.getElementsByClassName(namesid);
				// alert(name1[0]);
				name1[0].innerHTML=data['name'];
				var names = data['nama']+'/'+data['namb']+'/'+data['namc'];
				// alert(names);
				name1[0].innerHTML=data['name'];
				name2[0].innerHTML = names;
				$('.save2').attr('lid',data['lid']);
			}
		})
    })

	// $('.btnAdd2").click(function() {
	// 	$.jq_Panel({
	// 		title: "添加二级分类",
	// 		url: "AddOrder2.html",
	// 		iframeWidth: 600,
	// 		iframeHeight: 400,
	// 	});
	// });

	// $(".btnEdit").click(function() {
	// 	$.jq_Panel({
	// 		title: "编辑用户",
	// 		url: "addUser.html",
	// 		iframeWidth: 800,
	// 		iframeHeight: 600,
	// 	});

	// });
});

</script>
</body>
</html>