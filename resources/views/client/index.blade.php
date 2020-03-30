<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8"> 
	<title>售楼添加</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta charset="utf-8" />
		<title>安居客</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link href="/static/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/static/assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="/static/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!-- ace styles -->

		<link rel="stylesheet" href="/static/assets/css/ace.min.css" />
		<link rel="stylesheet" href="/static/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/static/assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="/static/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="/static/assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="/static/assets/js/html5shiv.js"></script>
		<script src="/static/assets/js/respond.min.js"></script>
		<![endif]-->
	
										<form action="" method="get">
												客户名称：<input type="text" name="client_name" value="{{$input['client_name']??''}}">
												业务员：<select name="account_name">
															<option value="">请选择</option>
														@foreach($res2 as $v)
															<option {{$input==$v->account_name?'selected':''}} value="{{$v->account_name}}">{{$v->account_name}}</option>
														@endforeach
														</select>
														<button>搜索</button>
										</form>
									
											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														
														<th>客户id</th>
														<th>客户名称</th>
														<th>客户级别</th>
														<th>客户来源</th>
														<th>业务员</th>
														<th>电话</th>
														<th>手机</th>
														<th>操作</th>
													</tr>
												</thead>

												<tbody>
												@foreach($res as $v)
													<tr client_id="{{$v->client_id}}">
														<td>{{$v->client_id}}</td>
														<td zidnan="client_name">
															
															<span class="span-test">{{$v->client_name}}</span>
															<input class="changvl" type="text" value="{{$v->client_name}}" style="display:none">
														</td>
														<td>{{$v->client_rank}}</td>
														<td>{{$v->client_origin}}</td>
														<td>{{$v->account_name}}</td>
														<td>{{$v->client_tel}}</td>
														<td>{{$v->client_tels}}</td>
														<td>
															<button class="btn" ><a href="{{url('/client/edit/'.$v->client_id)}}">编辑</a></button>
															<button  class="btns btn-danger" client_id={{$v->client_id}} >删除</button>
														</td>
													</tr>																					
												@endforeach				
												</tbody>
											</table>
											<tr>
												<td>{{$res->appends($input)->links()}}</td>
											</tr>
											<script src="/static/assets/js/jquery-2.0.3.min.js"></script>
		<script>
				$(".btns").click(function(){
					var client_id = $(this).attr('client_id');
					// if(confirm('是否删除')){
					// 	$.get('/client/destroy/',{client_id:client_id},function(res){
					// 		if(result.code=='00000'){
                	// 		   location.reload();
            		// 	   }
         			//    },'json');
					
					// }
					if(window.confirm('是否删除')){
						location.href="{{url('client/destroy')}}?client_id="+client_id;
					}
				})
				$(document).on('click','.pagination a',function(){
					var url = $(this).attr('href');
					$.get(url,function(result){
						$('tbody').html(result);
					})
					return false;
				})
				$(document).on('click','.span-test',function(){
					//让span标签隐藏
					$(this).hide();
					$(this).next('input').show();
					
					$(".changvl").blur(function(){
						var client_id = $(this).parents('tr').attr('client_id');
						var client_name = $(this).parent().attr('zidnan');
						var value_ = $(this).val();

						// alert(_value)
						$.ajax({
							url:"{{'/client/ajaxjdjg'}}",
							type:'get',
							data:{client_id:client_id,client_name:client_name,value_:value_},
							success:function(res){
								if(res==='ok'){
									
									$(this).prev("span").text(value_).show();
									$(this).hide();
								}else{
									alert('操作错误');
								}
							}
						})
					})

				})
		</script>
</body>
</html>


