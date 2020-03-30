<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Account;
use Illuminate\Validation\Rule;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uname=request()->uname;
        $where=[];
        if($uname){
            $where[]=['account_name','like',"%$uname%"];
        }
        $res=Account::where($where)->paginate(5);
        $query=request()->all();
        return view('account.index',['res'=>$res,'query'=>$query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //验证
         $request->validate([
            'account_name' => 'regex:/^[\x{4e00}-\x{9fa5}\w]{2,16}$/u|unique:account',
            'account_tel' => 'required|regex:/^1[3,5,6,8,7]\d{9}$/',
            'account_tels' => 'required'
        ],[
            'account_name.regex' => '业务员名字必须是中文、数字、字母、下划线2-16位',
            'account_name.unique' => '该名字已被添加',
            'account_tel.required' => '手机号不能为空',
            'account_tels.required' => '电话不能为空',
            'account_tel.regex' => '手机号格式不正确'
        ]);
        $all=$request->except('_token');
        $res=Account::insert($all);
        if($all){
            return redirect('account/index');
        }else{
            return redirect('account/create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $res=Account::where('account_id',$id)->first();


        // dd($aa);
        return view('account.edit',['res'=>$res]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            // 'account_name' => 'regex:/^[\x{4e00}-\x{9fa5}\w]{2,16}$/u|unique:admin',
            'account_name' => [
                'regex:/^[\x{4e00}-\x{9fa5}\w]{2,16}$/u',
                Rule::unique('account')->ignore($id,'account_id'),
            ],
            'account_tel' => 'required|regex:/^1[3,5,6,8,7]\d{9}$/',
            'account_tel' => 'required'
        ],[
            'account_name.regex' => '管理员名字必须是中文、数字、字母、下划线2-16位',
            'account_name.unique' => '该名称已被添加',
            'account_tel.required' => '手机号不能为空',
            'account_tel.required' => '手机不能为空',
            'account_tel.regex' => '手机号格式不正确'
        ]);
        // $all=$request->all();
        $all=$request->except('_token');
        // dd($all);
        $res=Account::where('account_id',$id)->update($all);
        if($res!==false){
            return redirect('account/index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res=Account::where('account_id',$id)->delete();
        if($res){
            return \redirect('account/index');
        }
    }
}
