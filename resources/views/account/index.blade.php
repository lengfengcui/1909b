<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title></title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<center><h3><font color='red'>管理员列表页</font></h3></center>
<center>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    跳转至 <a href="{{url('account/create')}}">管理员添加页</a>
</center>
<form action="">
    <input type="text" name="uname" placeholder="输入业务员名称关键字" value="{{$query['uname']??''}}">
    <input type="submit" value="搜索">
</form>
<table class="table table-striped">
	<thead>
		<tr>
			<th>业务员ID</th>
			<th>业务员名称</th>
			<th>手机号</th>
			<th>电话</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
        @foreach ($res as $v)
		<tr>
			<td>{{$v->account_id}}</td>
			<td>{{$v->account_name}}</td>
			<td>{{$v->account_tel}}</td>
			<td>{{$v->account_tels}}</td>
			<td>
            <a href="{{url('account/edit/'.$v->account_id)}}" class="btn btn-primary">编辑</a>
            <a href="javascript:;" account_id={{$v->account_id}} class="btn btn-danger del">删除</a>
            </td>
		</tr>
        @endforeach
	</tbody>
</table>
<center>{{$res->appends($query)->links()}}</center>

</body>
</html>
<script>
 $(document).on('click','.del',function(){
        var account_id = $(this).attr('account_id');
        if(window.confirm('是否删除')){
            location.href="{{url('account/destroy')}}/"+account_id;
        }
    })
</script>