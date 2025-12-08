<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistrationModel;
use App\Models\User;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Session;

class registration extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registration');
    }

    public function signin() {
        return view('signin');
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
        $validated = $request->validate([
            "name" => "required|string|max:255",
            "email" => "required",
            "phone" => "required|min:10|max:10",
            "password" => "required|min:8", 
            "confirm-password" => "required|same:password"
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password)
        ];
        
        RegistrationModel::create($data);

        return redirect('/sign-in')->with('success', 'User Added successfully');
    }


    // login 
    public function login(Request $request)
    {
    //create to add model
        $validated = $request->validate([
            "email"=>"required",
            "password"=>"required || min:8"  
            ]);
        
            // dd($credentials);
        
            $user = User::where('email', $validated['email'])->first();
            

            if($user!=null)
            {
                Auth::login($user);
                if ($user && Hash::check($validated['password'], $user->password)) {
                    $user=Auth::user();
                    return view('/signin',['user'=>$user]);
            
                }
                else 
                {    
                    return redirect('/sign-in')->with('error', 'Your Login credentials are not matched');        
                }
            }
            else 
                {    
                    return redirect('/sign-in')->with('error', 'Your Login credentials are not matched');        
                }

    }
    

    public function logout(Request $request)
    {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/')->with('success', 'You have been successfully logged out.');
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
