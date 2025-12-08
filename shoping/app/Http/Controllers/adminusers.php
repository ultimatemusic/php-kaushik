<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Session;
use App\Models\adminusersModel;
class adminusers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('admin.adminlogin');
        

        // $user = User::where('email', $request->email)->first();
        // dd($user);
        
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
    public function adminlogin(Request $request)
    {
        $validated = $request->validate([
            "email" => "required",
            "password" => "required|min:8"
        ]);
        $adminemail= adminusersModel::where('email',$request->email)->first();
        if($adminemail){
            if( $adminemail->email==$request->email && $adminemail->password==$request->password){
                // $request->session()->put('adminemail',$adminemail->email);
                session(['useremail' => $adminemail->name]);
                return redirect('admin');
                // return riderect('admin',['useremail'=>$adminemail->email]);
            }else{
                return back()->with('fail','Password is incorrect');
            }
        }
    }
    public function adminlogout()
    {
        session()->flush();
        return redirect('admin');
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
        //
    }
}
