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

	
									
									<form class="form-horizontal" role="form" action="{{url('/client/store')}}" method="post">
									@csrf
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 客户名称 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="client_name" class="but col-xs-10  col-sm-5" />
											<b style="color:red">{{$errors->first('client_name')}}</b>
										</div>
									</div>

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 客户级别 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="client_rank" class="col-xs-10 col-sm-5" />
											<b style="color:red">{{$errors->first('client_rank')}}</b>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 客户来源 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="client_origin" class="col-xs-10 col-sm-5" />
											<b style="color:red">{{$errors->first('client_origin')}}</b>
										</div>
									</div>
									<div class="form-group">
														<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 业务员 </label>

														<div class="col-sm-9">
															<select name="account_id">
																<option value="">请选择</option>
															@foreach($res as $v)
																<option value="{{$v->account_id}}">{{$v->account_name}}</option>
															@endforeach
															</select>
															
															</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 电话 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="client_tel" class="col-xs-10 col-sm-5" />
											<b style="color:red">{{$errors->first('client_tel')}}</b>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 手机 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  name="client_tels" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="space-4"></div>				
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="icon-ok bigger-110"></i>
												增加
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
									</div><!-- /span -->
								</div><!-- /row -->

					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

			<script src="/static/assets/js/jquery-2.0.3.min.js"></script>
		<script>
			// $(document).on('blur','.but',function(){
			// 	alert(12)
			// })
		</script>
</body>
</html>

