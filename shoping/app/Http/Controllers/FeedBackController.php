<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeedBackModel;
use DB;

class FeedBackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('feedback');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated= $request->validate([
            'user_id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        $data=[
            'user_id'=>$request->user_id,
            'user_name'=>$request->name,
            'user_email'=>$request->email,
            'feedback'=>$request->message,
        ];
        FeedBackModel::create($data);
        return redirect('/feedback')->with('success','Thank you for your feedback!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=FeedBackModel::all();
        return view('admin.Menage-FeedBack',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FeedBackModel::where('id',$id)->delete();
        return redirect('/admin/Menage-FeedBack')->with('success','Feedback deleted successfully!');
    }
}
