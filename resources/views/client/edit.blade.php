<!DOCTYPE html>
<html lang="en">
	<head>
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
	
									
									<form class="form-horizontal" role="form" action="{{url('/client/update/'.$res->client_id)}}" method="post">
									@csrf
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 客户名称 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="client_name" value="{{$res->client_name}}" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 客户级别 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="client_rank" value="{{$res->client_rank}}" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 客户来源 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="client_origin" value="{{$res->client_origin}}" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<div class="form-group">
														<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 业务员 </label>

														<div class="col-sm-9">
															<select name="account_id">
																<option value="">请选择</option>
															@foreach($res2 as $v)
																<option {{$res->account_id==$v->account_id?'selected':''}} value="{{$v->account_id}}">{{$v->account_name}}</option>
															@endforeach
															</select>
															</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 电话 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="client_tel" value="{{$res->client_tel}}" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"  for="form-field-1"> 手机 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  name="client_tels" value="{{$res->client_tels}}" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="space-4"></div>				
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="icon-ok bigger-110"></i>
												修改
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												重置
											</button>
										</div>
									</div>

									<div class="hr hr-24"></div>
								</form>
								<script src="/static/assets/js/jquery-2.0.3.min.js"></script>
</body>
</html>

