<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>添加页</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<center><h3><font color='red'>业务员添加页</font></h3></center>
<center>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    跳转至 <a href="{{url('account/index')}}">业务员列表页</a>
</center>
<form class="form-horizontal" role="form" action="{{url('account/store')}}" method="post">
@csrf
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">业务员名称</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" id="account_name" name="account_name"
				   placeholder="请输入业务员名称">
                   <span id="span_name" style="color:red"></span>
                   <b style="color:red">{{$errors->first('account_name')}}</b>
		</div>
	</div>
    <div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">手机号</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" id="account_tel" name="account_tel"
				   placeholder="请输入手机号">
                   <span id="span_tel"></span>
                   <b style="color:red">{{$errors->first('account_tel')}}</b>
		</div>
	</div>
    <div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">电话</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" id="account_tels" name="account_tels"
				   placeholder="请输入电话">
                   <span id="span_phone"></span>
                   <b style="color:red">{{$errors->first('account_tels')}}</b>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">添加</button>
		</div>
	</div>
</form>

</body>
</html>
<script>


//    $(function(){
//        //业务员名称
//        $(document).on('blur',"#account_name",function(){
//            // alert(123);
//            var reg = /^[\u4e00-\u9fa5A-Za-z0-9-_]{2,16}$/;
//            var account_name = $(this).val();
//            // console.log(account_name);
//            if(account_name==''){
//                $("#span_name").html("<font color=red>业务员名称不能为空</font>");
//            }else if(!reg.test(account_name)){
//                $("#span_name").html("<font color=red>业务员名字必须是中文、数字、字母、下划线2-16位</font>");
//            }
//        })
//
//        //电话
//        $(document).on('blur',"#account_tel",function(){
//            var account_tel = $(this).val();
//            // alert(account_tel);
//            var reg = /^1[3,5,6,8]\d{9}$/;
//            if(account_tel==''){
//                $("#span_tel").html("<font color=red>手机号不能为空</font>")
//            }else if(!reg.test(account_tel)){
//                $("#span_tel").html("<font color=red>手机号格式不正确</font>");
//            }
//        })
//        //手机
//        $(document).on('blur',"#account_tel",function(){
//            var account_tel = $(this).val();
//            // alert(account_tel);
//            var reg = /^1[3,5,6,8]\d{9}$/;
//            if(account_tel==''){
//                $("#span_tel").html("<font color=red>手机号不能为空</font>")
//            }else if(!reg.test(account_tel)){
//                $("#span_tel").html("<font color=red>手机号格式不正确</font>");
//            }
//        })
//    })
    
</script>