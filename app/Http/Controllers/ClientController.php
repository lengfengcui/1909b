<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Client;
use App\Account;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client_name = request()->client_name;
        $account_name = request()->account_name;
        // dd($client_name);
        $where = [];
        if($client_name){
            $where[] = ['client_name','like',"%$client_name%"];
        }
        if($account_name){
            $where[] = ['account_name','like',"%$account_name%"];
        }
        $res2 = Account::get();
        $input = request()->all();
        $res = Client::where($where)->leftjoin('Account','account.account_id','=','client.account_id')->paginate(2);
        if(request()->ajax()){
            return view('client.ajaxpage',['res'=>$res,'res2'=>$res2,'input'=>$input]);
        }
        return view('client.index',['res'=>$res,'res2'=>$res2,'input'=>$input]);
    }

    //即点即改
    public function ajaxjdjg(){
        $client_id = request()->client_id;
        $value_ = request()->value_;
        
        $client_name = request()->client_name;
        // dd($client_name);
        $where = [
            ['client_id','=',$client_id]
        ];
        $res = Client::where($where)->update([$client_name=>$value_]);
        if($res===false){
            echo 'no';
        }else{
            echo 'ok';
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $res = Account::get();
        // dd($res);
        return view('client.create',['res'=>$res]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valuedata = $request->validate([
            'client_name' => 'required|regex:/^[\x{4e00}-\x{9fa5}\w]{2,16}$/u|unique:client',
            'client_rank' => 'required',
            'client_origin' => 'required',
            'client_tel' => 'required'
        ],[
            'client_name.required'=> '名字必填',
            'client_name.regex'=> '由中文、字母、数字、下划线组成',
            'client_name.unique'=> '名字已有',
            'client_rank.required' => '必填',
            'client_origin.required' => '必填',
            'client_tel.required' => '必填'
        ]);
        $data = $request->except('_token');
        $res = Client::insert($data);
        // dd($res);
        if($res){
            return redirect('client/index');
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
        $res2 = Account::get();
        $res = Client::find($id);
        return view('client.edit',['res'=>$res,'res2'=>$res2]);
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
        $data = $request->except('_token');
        $res = Client::where('client_id',$id)->update($data);
        if($res!==false){
            return redirect('client/index');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $client_id = Request()->all();
        $res = Client::where('client_id',$client_id)->delete();
        if($res){
            return redirect('client/index');
        }
    }
}
