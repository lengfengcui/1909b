<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visit;
class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $account_id=request()->account_id;
        $where=[];
        if($account_id){
            $where[]=['account_id','like',"%$account_id%"];
        }
        $visit=Visit::where($where)->paginate(3);
        //dd($visit);
        return view('visit.index',['visit'=>$visit,'account_id'=>$account_id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('visit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post=$request->except('_token');
        //dd($post);
        $validatedData = $request->validate([ 
            'account_id' => 'required|unique:visit|max:20', 
            'client_id' => 'required', 
            'visit_man' => 'required', 
            'visit_address' => 'required', 
        ],[
            'account_id.required'=>'业务员名称必填！',
            'account_id.unique'=>'业务员名称已存在！',
            'account_id.max'=>'业务员名称最大长度不超过20位！',
            'client_id.required'=>'客户必填！',
            'visit_man.required'=>'访问人必填！',
            'visit_address.required'=>'访问地址必填！',
        ]);
        $post['visit_time']=time();
        //dd($post);
        $res=Visit::insert($post);
        //dd($res);
        if($res){
           return redirect('/visit/index');
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
        $visit=Visit::where('visit_id',$id)->first();
        return view('visit.edit',['visit'=>$visit]);
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
        $post=$request->except('_token');
        //dd($post);
        $post['visit_time']=time();
        $visit=Visit::where('visit_id',$id)->update($post);
        //dd($visit);
        if($visit!==false){
        return redirect('/visit/index');
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
        $visit=Visit::destroy($id);
        //dd($visit);
        if($visit){
            return redirect('/visit/index');
        }
    }
}
