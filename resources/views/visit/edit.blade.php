<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>拜访会议修改</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<form action="{{url('/visit/update/'.$visit->visit_id)}}" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
	@csrf
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">业务员名称</label>
		<div class="col-sm-8">
			<input type="text" class="form-control"  name="account_id" value="{{$visit->account_id}}" 
				   placeholder="业务员名称">
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">客户名称</label>
		<div class="col-sm-8">
			<input type="text" class="form-control"  name="client_id" value="{{$visit->client_id}}" 
				   placeholder="客户名称">
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">访问人</label>
		<div class="col-sm-8">
			<input type="text" class="form-control"  name="visit_man" value="{{$visit->visit_man}}"  
				   placeholder="访问人">
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">访问地址</label>
		<div class="col-sm-8">
			<input type="text" class="form-control"  name="visit_address" value="{{$visit->visit_address}}" 
				   placeholder="访问地址">
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">访问详情</label>
		<div class="col-sm-8">
			<textarea type="text" class="form-control"  name="visit_desc" 
				   placeholder="访问详情">{{$visit->visit_desc}}</textarea>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-8">
			<button type="submit" class="btn btn-default">修改</button>
		</div>
	</div>
</form>

</body>
</html>