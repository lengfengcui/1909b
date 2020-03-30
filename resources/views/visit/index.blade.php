<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>拜访会议列表</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<center><h2>拜访会议添加<a style="float:right;" href="{{url('visit/create')}}" class="btn btn-default">添加</a></h2></center><hr/>
<form>
	<input type="text" name="account_id" placeholder="请输客户名称关键字" value="{{$visit['account_id']??''}}">
	<button>搜索</button>
</form>
<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
				<th>拜访会议id</th>
				<th>客户名称</th>
				<th>访问人</th>
				<th>拜访时间</th>
				<th>访问地</th>
				<th>访问详情</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($visit as $v) 
			<tr>
				<td>{{$v->visit_id}}</td>
				<td>{{$v->account_id}}</td>
				<td>{{$v->client_id}}</td>
				<td>{{date("Y-m-d H:i:s",$v->visit_time)}}</td>
				<td>{{$v->visit_address}}</td>
				<td>{{$v->visit_desc}}</td>
				<td>
					<a href="{{url('/visit/edit/'.$v->visit_id)}}" class="btn btn-primary">编辑</a>|
					<a href="{{url('/visit/destroy/'.$v->visit_id)}}" class="btn btn-danger">删除</a>
				</td>
			</tr>
			@endforeach

			<tr><td colspan="6">{{$visit->appends(['account_id'=>$account_id])->links()}}</td></tr>
		</tbody>
</table>
</div>  	

</body>
</html>